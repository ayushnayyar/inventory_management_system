<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatch extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public static function store($order, $request){
        $dispatch = new Dispatch();
        $dispatch->order_id = $order->id;
        $dispatch->party_name = $order->party_name;
        $dispatch->quality = $request ->quality;
        $dispatch->design = $request->design;
        $dispatch->length = $request->length;
        $dispatch->no_of_bales = $request->no_of_bales;
        $dispatch->dispatched = $request->dispatched;
        $dispatch->save();
    }
}
