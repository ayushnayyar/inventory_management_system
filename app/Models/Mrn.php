<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Mrn extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function store($order){
        $mrn = new Mrn();
        $mrn->mrn_no = $order->mrn_no;
        $mrn->item_name = $order->item_name;
        $mrn->vendor_name = $order->vendor_name;
        $mrn->description = $order->description;
        $mrn->invoice_no = $order->invoice_no;
        $mrn->quantity = $order->actual_stock;
        $mrn->save();
        return $mrn->id;
    }
}
