<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ReceivesController extends Controller
{
    public function received($order_id){
        $order = Order::findorfail($order_id);
        return view('order.receivedOrder', compact('order'));
    }
}
