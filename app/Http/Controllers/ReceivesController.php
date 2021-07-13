<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceivesController extends Controller
{
    public function received($order_id){
        $order = Order::findorfail($order_id);
        $receives = DB::table('receives')->select('*')->where('order_id', '=' , $order_id)->paginate(5);
        return view('order.receivedOrder', compact('order','receives'));
    }

    public function report(Request $request){
        $receives = DB::table('receives')->select('*')->where('party_name', '=', $request->party_name)->get();
        return view('reports.inward', compact('receives'));
    }
}
