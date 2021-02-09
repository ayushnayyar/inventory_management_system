<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

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
        $order->stock = $request->stock;
        $order->current_stock=$request->stock;
        $order->beam=$request->beam;
        $order->dispatched=$request->dispatched;
        $order->party_id = $request->party_id;
        $order->item_id = $request->material_id;
        $order->save();
        return redirect()->route('order');
    }
}
