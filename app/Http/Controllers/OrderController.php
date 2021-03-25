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
        $order = new Order();
        $current_stock = $request->stock - ($request->dispatched);
        $order->stock = $request->stock;
        $order->current_stock=$current_stock;
        $order->beam=$request->beam;
        $order->dispatched=$request->dispatched;
        $order->party_id = $request->party_id;
        $order->item_id = $request->material_id;
        $getItem= DB::table('materials')->where('id','=',$request->material_id)->get();
        foreach ($getItem as $item){
                $itemName= $item->material_name;
        }
        $getVendor= DB::table('vendors')->where('id','=',$request->party_id)->get();
        foreach ($getVendor as $vendor){
                $partyName =  $vendor->party_name;
        }
       
        $order->item_name = $itemName;
        $order->party_name = $partyName;
        $order->save();
        $joinData = DB::table('orders')->leftJoin('transactions','orders.id','=','transactions.order_id')->select('orders.*')->orderBy('created_at', 'asc')->get();
        $transaction = new Transaction();
        foreach($joinData as $data){
        $transaction->order_id = $data->id;
        $transaction->party_id = $data->party_id;
        $transaction->item_id = $data->item_id;
        $transaction->stock = $data->stock;
        $transaction->current_stock = $data->current_stock;
        $transaction->beam = $data->beam;
        $transaction->dispatched = $data->dispatched;
        $transaction->item_name = $data->item_name;
        $transaction->party_name = $data->party_name;
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
        $order->beam=$request->beam;
        $order->dispatched=$request->dispatched;
        $current_stock = $order->stock - ($request->dispatched);
        $order->current_stock = $current_stock;
        $order->save();
        $transaction = new Transaction();
        $transaction->order_id = $order->id;
        $transaction->party_id = $order->party_id;
        $transaction->item_id = $order->item_id;
        $transaction->stock = $order->stock;
        $transaction->current_stock = $current_stock;
        $transaction->beam = $request->beam;
        $transaction->dispatched = $request->dispatched;
        $transaction->item_name = $order->item_name;
        $transaction->party_name = $order->party_name;
        $transaction->save();
        $ts = DB::table('transactions')->where('order_id','=',$order_id)->get();
        $dispatched = 0;
        foreach($ts as $t){
            $dispatched = $dispatched + $t->dispatched;
        }
        $order->current_stock = $order->stock - $dispatched;
        $order->dispatched = $dispatched;
        $order->save();
        $transaction->current_stock = $transaction->stock - $dispatched;
        $transaction->save();
        return redirect()->route('order');
    }

    public function viewOrder($order_id){
       $transactions = DB::table('transactions')->where('order_id', $order_id)->get();
       return view('order.viewOrder', compact('transactions'));
    }

    public function deleteOrder($order_id){
        $order = Order::find($order_id);
        $order->delete();
        return redirect()->route('order'); 
    }
    public function exportIntoCSV(){
        return Excel::download(new OrdersExport,'orders.csv');
    }
}
