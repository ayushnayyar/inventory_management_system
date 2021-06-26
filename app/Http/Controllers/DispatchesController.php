<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DispatchesController extends Controller
{
    public function dispatched($order_id){
        $order = Order::find($order_id);
        return view('order.dispatchedOrder', compact('order'));
    }
}