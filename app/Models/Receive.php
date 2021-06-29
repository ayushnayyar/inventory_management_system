<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receive extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public static function store($order, $request){
        $receive = new Receive();
        $receive->order_id = $order->id;
        $receive->party_name = $order->party_name;
        $receive->actual_recieved_from = $request->actual_recieved_from;
        $receive->type = $request->type;
        $receive->shade = $request->shade;
        $receive->recieved_stock = $request->recieved_stock;
        $receive->actual_stock = $request->actual_stock;
        $receive->no_of_boxes = $request->no_of_boxes;
        $receive->short_stock = $request->recieved_stock -  $request->actual_stock;
        $receive->return_stock = $request->return_stock;
        $receive->save();
    }
}
