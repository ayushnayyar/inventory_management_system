<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Daily extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public static function store($order){
        $daily = new Daily();
        $order_exists = DB::table('dailies')->where('order_id','=',$order->id)->first();
        $daily->order_id = $order->id;
        if($order_exists == null){
            $daily->party_name = $order->party_name;
            $daily->beam_machine = $order->beam_machine;
            $daily->beam_floor = $order->beam_floor;
            $daily->weft = $order->weft;
            $daily->fabric_stock = $order->fabric_stock;
            $daily->opening_stock = $order->current_stock;
            $daily->cone_stock = $order->cone_stock;
            $daily->save();
        }
    }

    public static function dailiesUpdate($order,$request,$opening_stock){
        $daily = new Daily();
        $daily->order_id = $order->id;
        $daily->party_name = $order->party_name;
        $daily->beam_machine = $request->beam_machine;
        $daily->beam_floor = $request->beam_floor;
        $daily->weft = $request->weft;
        $daily->fabric_stock = $request->fabric_stock;
        $daily->opening_stock = $opening_stock;
        $daily->cone_stock = $order->cone_stock;
        $daily->save();
    }
}