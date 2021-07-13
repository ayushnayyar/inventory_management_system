<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use App\Models\Dispatch;
use App\Models\Order;;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Mrn;
use App\Models\Receive;

class OrderController extends Controller
{
    public function index(){
        $orders = DB::table('orders')->paginate(5);
        return view('order.order', compact('orders'));
    }

    public function store(Request $request){
        // storing in mrn
        $mrn = new Mrn();
        $mrn_id = $mrn->store($request);
        
        //storing in order
        $order = new Order();

        //to get item id
        $getItem = DB::table('materials')->where('material_name','=',$request->item_name)->get();
        foreach ($getItem as $item){
                $itemId= $item->id;
        }

        //to get vendor id
        $getVendor= DB::table('vendors')->where('party_name','=',$request->vendor_name)->get();
        foreach ($getVendor as $vendor){
                $partyId =  $vendor->id;
        }
        $order->mrn_id = $mrn_id;
        $order->party_id = $partyId;
        $order->item_id = $itemId;
        $order->invoice_no = $request->invoice_no;
        $order->party_name = $request->vendor_name;
        $order->actual_recieved_from =$request->actual_recieved_from; 
        $order->item_name = $request->item_name;
        $order->shade =$request->shade;
        $order->type = $request->type;
        $order->recieved_stock= $request->recieved_stock;
        $order->actual_stock = $request->actual_stock;
        $order->no_of_boxes = $request->no_of_boxes;
        $order->short_stock= $request->recieved_stock - $request->actual_stock;
        $order->return_stock = $request->return_stock;
        $order->current_stock = $request->actual_stock - ($request->return_stock);
        $order->cone_stock = $order->current_stock;
        $order->beam_machine = 0;
        $order->beam_floor = 0;
        $order->weft = 0;
        $order->fabric_stock = 0;
        $order->dispatched = 0;
        $order->length = 0;
        $order->no_of_bales = 0;
        $order->save();
        $receive = Receive::store($order,$request);
        $daily = Daily::store($order);
        return redirect()->route('order');
    }


    public function addReceived($order_id, Request $request){
        $order = Order::findorfail($order_id);
        $order->recieved_stock = $order->recieved_stock + $request->recieved_stock;
        $order->actual_stock = $order->actual_stock + $request->actual_stock;
        $order->no_of_boxes = $order->no_of_boxes + $request->no_of_boxes;
        $order->short_stock= $order->recieved_stock - $order->actual_stock;
        $order->return_stock = $order->return_stock + $request->return_stock;
        $order->current_stock = $order->actual_stock - ($order->return_stock);
        $order->cone_stock = $order->cone_stock + $request->actual_stock - ($request->return_stock);
        $order->save();
        $receive = Receive::store($order,$request);
        return redirect()->route('order');
    }

    public function addDispatched($order_id, Request $request){
        $order = Order::findorfail($order_id);
        $order->no_of_bales = $order->no_of_bales + $request->no_of_bales;
        $order->length = $order->length + $request->length;
        $order->dispatched = $order->dispatched + $request->dispatched;
        $order->current_stock = $order->current_stock - ($request->dispatched);
        $order->save();
        $dispatch = Dispatch::store($order,$request);
        return redirect()->route('order');
    }

    public function dailyUpdate($order_id, Request $request){
       $order = Order::find($order_id);
       $opening_stock = $order->cone_stock;
       $order->beam_floor = $order->beam_floor + $request->beam_floor;
       $order->beam_machine = $order->beam_machine +  $request->beam_machine;
       $order->weft = $order->weft + $request->weft;
       $order->fabric_stock = $order->fabric_stock + $request->fabric_stock; 
       $rec_used = $order->beam_machine + $order->beam_floor + $order->weft + $order->fabric_stock;
       $order->cone_stock = $order->current_stock - $rec_used - $order->dispatched;
       $order->save();
       $daily = Daily::dailiesUpdate($order , $request, $opening_stock);
      return redirect()->route('order');
    }


    public function deleteOrder($order_id){
        $order = Order::find($order_id);
        $mrn_id = Order::find($order_id)->toArray();
        $mrn = Mrn::find($mrn_id['mrn_id']);
        $receive = DB::table('receives')->select('*')->where('order_id','=',$order_id);
        $receive->delete();
        $dispatch = DB::table('dispatches')->select('*')->where('order_id','=',$order_id);
        $dispatch->delete();
        $mrn->delete();
        $order->delete();
        return redirect()->route('order'); 
    }

    public function report(Request $request){
        $receives = DB::table('receives')->select(
        DB::raw("SUM(recieved_stock) as received_stock"),
        DB::raw("SUM(actual_stock) as actual_stock")
        )->where('party_name','=', $request->party_name)->where('created_at','<=',date($request->date))->get();


        $dispatched = DB::table('dispatches')->select(
            DB::raw("SUM(dispatched) as dispatched"),
            )->where('party_name','=', $request->party_name)->where('created_at','<=',date($request->date))->get();


        $dailies = DB::table('dailies')->select(
            DB::raw("SUM(beam_floor) as beam_floor"),
            DB::raw("SUM(beam_machine) as beam_machine"),
            DB::raw("SUM(fabric_stock) as fabric_stock"),
            )->where('party_name','=', $request->party_name)->where('created_at','<=',date($request->date))->get();
        
        return view('reports.reconliation', compact('dailies','dispatched','receives'));
    }
}