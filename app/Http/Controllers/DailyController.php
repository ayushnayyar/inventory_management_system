<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyController extends Controller
{
    //
    public function index($order_id){
        $order = Order::findorfail($order_id);
        $dailies = DB::table('dailies')->select('*')->where('order_id', '=' , $order_id)->paginate(5);
        return view('order.daily', compact('order', 'dailies'));
    }

}