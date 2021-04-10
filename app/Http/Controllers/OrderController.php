<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Exports\OrdersExport;
use App\Models\Mrn;
use Excel;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('order.order', compact('orders'));
    }

    public function addOrder(){
        $vendors = Vendor::all();
        $materials = Material::all();
        return view('order.newOrder', compact('vendors','materials'));
    }
    public function store(Request $request){
        $mrn = new Mrn();
        $mrn->mrn_no = $request->mrn_no;
        $mrn->item_name = $request->item_name;
        $mrn->vendor_name = $request->vendor_name;
        $mrn->description = $request->description;
        $mrn->invoice_no = $request->invoice_no;
        $mrn->quantity = $request->actual_stock;
        $mrn->save();
        $order = new Order();
        $order->mrn_id = $mrn->id;
        $current_stock = $request->actual_stock - ($request->return_stock);
        $order->recieved_stock= $request->recieved_stock;
        $order->actual_stock = $request->actual_stock;
        $order->return_stock = $request->return_stock;
        $order->current_stock = $current_stock;
        $order->invoice_no = $request->invoice_no;
        $order->short_stock= $request->recieved_stock - $request->actual_stock;
        $order->cone_stock = 0;
        $order->beam_machine = 0;
        $order->beam_floor = 0;
        $order->weft = 0;
        $order->dispatched = 0;
        $order->fabric_stock = 0;
        $getItem = DB::table('materials')->where('material_name','=',$request->item_name)->get();
        foreach ($getItem as $item){
                $itemId= $item->id;
        }
        $getVendor= DB::table('vendors')->where('party_name','=',$request->vendor_name)->get();
        foreach ($getVendor as $vendor){
                $partyId =  $vendor->id;
        }
        $order->shade =$request->shade;
        $order->item_name = $request->item_name;
        $order->party_name = $request->vendor_name;
        $order->party_id = $partyId;
        $order->item_id = $itemId;
        $order->actual_recieved_from =$request->actual_recieved_from; 
        $order->save();
        $joinData = DB::table('orders')->leftJoin('transactions','orders.id','=','transactions.order_id')->select('orders.*')->orderBy('created_at', 'asc')->get();
        $transaction = new Transaction();
        foreach($joinData as $data){
        $transaction->order_id = $data->id;
        $transaction->party_id = $data->party_id;
        $transaction->item_id = $data->item_id;
        $transaction->mrn_id = $data->mrn_id;
        $transaction->invoice_no = $data->invoice_no;
        $transaction->party_name = $data->party_name;
        $transaction->actual_recieved_from = $data->actual_recieved_from;
        $transaction->item_name = $data->item_name;
        $transaction->shade = $data->shade;
        $transaction->recieved_stock = $data->recieved_stock;
        $transaction->actual_stock = $data->actual_stock;
        $transaction->return_stock = $data->return_stock;
        $transaction->current_stock = $data->current_stock;
        $transaction->cone_stock = $data->cone_stock;
        $transaction->beam_machine = $data->beam_machine;
        $transaction->beam_floor = $data->beam_floor;
        $transaction->weft = $data->weft;
        $transaction->fabric_stock = $data->fabric_stock;
        $transaction->dispatched = $data->dispatched;
        $transaction->short_stock = $data->short_stock;
        $transaction->save();
        }
        return redirect()->route('order');
    }

    public function editOrder($order_id){
        $order = Order::find($order_id);
        return view('order.updateOrder', compact('order'));
    }

    public function updateOrder($order_id, Request $request){
        $order = Order::find($order_id);
        $order->cone_stock = $request->cone_stock;
        $order->beam_floor = $request->beam_floor;
        $order->beam_machine = $request->beam_machine;
        $order->weft = $request->weft;
        $order->fabric_stock = $request->fabric_stock;
        $order->dispatched = $request->dispatched;
        $current_stock = $order->actual_stock - $order->return;
        $order->current_stock = $current_stock; 
        $order->save();
        $transaction = new Transaction();
        $transaction->order_id = $order->id;
        $transaction->party_id = $order->party_id;
        $transaction->item_id = $order->item_id;
        $transaction->mrn_id = $order->mrn_id;
        $transaction->invoice_no = $order->invoice_no;
        $transaction->party_name = $order->party_name;
        $transaction->actual_recieved_from = $order->actual_recieved_from;
        $transaction->item_name = $order->item_name;
        $transaction->shade = $order->shade;
        $transaction->recieved_stock = $order->recieved_stock;
        $transaction->actual_stock = $order->actual_stock;
        $transaction->return_stock = $order->return_stock;
        $transaction->current_stock = $order->current_stock;
        $transaction->cone_stock = $order->cone_stock;
        $transaction->beam_machine = $order->beam_machine;
        $transaction->beam_floor = $order->beam_floor;
        $transaction->weft = $order->weft;
        $transaction->fabric_stock = $order->fabric_stock;
        $transaction->dispatched = $order->dispatched;
        $transaction->short_stock = $order->short_stock;
        $transaction->save();
        $ts = DB::table('transactions')->where('order_id','=',$order_id)->get();
        $dispatched = 0;
        foreach($ts as $t){
            $dispatched = $dispatched + $t->dispatched;
        }
        $order->current_stock = $order->actual_stock-$order->return_stock- $dispatched;
        $order->dispatched = $dispatched;
        $order->save();
        $transaction->current_stock = $transaction->actual_stock-$transaction->return_stock - $dispatched;
        $transaction->save();
        return redirect()->route('order');
    }

    public function viewOrder($order_id){
       $transactions = DB::table('transactions')->where('order_id', $order_id)->get();
       foreach ($transactions as $transaction) {
           $short_stock = $transaction->short_stock;
       }
       return view('order.viewOrder', compact('transactions', 'short_stock'));
    }

    public function deleteOrder($order_id){
        $order = Order::find($order_id);
        $mrn_id = Order::find($order_id)->toArray();
        $mrn = Mrn::find($mrn_id['mrn_id']);
        $mrn->delete();
        $order->delete();
        return redirect()->route('order'); 
    }
    public function exportIntoCSV(){
        return Excel::download(new OrdersExport,'orders.csv');
    }
}
