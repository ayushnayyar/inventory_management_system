<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    use HasFactory;
    public static function store_transaction(){
        $joinData = DB::table('orders')->leftJoin('transactions','orders.id','=','transactions.order_id')->select('orders.*')->orderBy('created_at', 'asc')->get();
        $transaction = new Transaction();
        foreach($joinData as $data){
        $transaction->order_id = $data->id;
        $transaction->party_id = $data->party_id;
        $transaction->item_id = $data->item_id;
        $transaction->mrn_id = $data->mrn_id;
        $transaction->invoice_no = $data->invoice_no;
        $transaction->party_name = $data->party_name;
        $transaction->actual_recieved_from = $data->actual_recieved_from;
        $transaction->item_name = $data->item_name;
        $transaction->shade = $data->shade;
        $transaction->recieved_stock = $data->recieved_stock;
        $transaction->actual_stock = $data->actual_stock;
        $transaction->return_stock = $data->return_stock;
        $transaction->current_stock = $data->current_stock;
        $transaction->cone_stock = $data->cone_stock;
        $transaction->beam_machine = $data->beam_machine;
        $transaction->beam_floor = $data->beam_floor;
        $transaction->weft = $data->weft;
        $transaction->fabric_stock = $data->fabric_stock;
        $transaction->dispatched = $data->dispatched;
        $transaction->short_stock = $data->short_stock;
        $transaction->save();
        }
    }
    public static function update_transaction($order,$order_id){
        $transaction = new Transaction();
        $transaction->order_id = $order->id;
        $transaction->party_id = $order->party_id;
        $transaction->item_id = $order->item_id;
        $transaction->mrn_id = $order->mrn_id;
        $transaction->invoice_no = $order->invoice_no;
        $transaction->party_name = $order->party_name;
        $transaction->actual_recieved_from = $order->actual_recieved_from;
        $transaction->item_name = $order->item_name;
        $transaction->shade = $order->shade;
        $transaction->recieved_stock = $order->recieved_stock;
        $transaction->actual_stock = $order->actual_stock;
        $transaction->return_stock = $order->return_stock;
        $transaction->current_stock = $order->current_stock;
        $transaction->cone_stock = $order->cone_stock;
        $transaction->beam_machine = $order->beam_machine;
        $transaction->beam_floor = $order->beam_floor;
        $transaction->weft = $order->weft;
        $transaction->fabric_stock = $order->fabric_stock;
        $transaction->dispatched = $order->dispatched;
        $transaction->short_stock = $order->short_stock;
        $transaction->save();
        $ts = DB::table('transactions')->where('order_id','=',$order_id)->get();
        $dispatched = 0;
        foreach($ts as $t){
            $dispatched = $dispatched + $t->dispatched;
        }
        $transaction->current_stock = $transaction->actual_stock-$transaction->return_stock - $dispatched;
        $transaction->save();
    }
}
