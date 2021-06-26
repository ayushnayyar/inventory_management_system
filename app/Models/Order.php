<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mrn;

class Order extends Model
{
    use HasFactory;

    public function vendor(){
        return $this->hasOne('App\Models\Vendor', 'party_id' , 'id');
    }
    public function material(){
        return $this->hasOne('App\Models\Material', 'item_id' , 'id');
    }

    public function mrn(){
        return $this->hasOne(Mrn::class, 'mrn_id', 'id');
    }

    public function receives(){
        return $this->hasMany('App\Models\Receive', 'order_id', 'id');
    }
}
