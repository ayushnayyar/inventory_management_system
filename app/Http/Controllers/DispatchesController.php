<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DispatchesController extends Controller
{
    public function dispatched($order_id){
        $order = Order::find($order_id);
        $dispatched = DB::table('dispatches')->select('*')->where('order_id', '=' , $order_id)->paginate(3);
        return view('order.dispatchedOrder', compact('order','dispatched'));
    }

    public function report(Request $request){
        $dispatched = DB::table('dispatches')->select('*')->where('party_name', '=', $request->party_name)->get();
        return view('reports.dispatch', compact('dispatched'));
    }
}