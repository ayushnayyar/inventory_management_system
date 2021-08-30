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

}