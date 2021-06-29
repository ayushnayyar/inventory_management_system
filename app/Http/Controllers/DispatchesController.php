<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DispatchesController extends Controller
{
    public function dispatched($order_id){
        $order = Order::find($order_id);
        $dispatched = DB::table('dispatches')->select('*')->where('order_id', '=' , $order_id)->get();
        return view('order.dispatchedOrder', compact('order','dispatched'));
    }
}