<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'Id',
            'party_name',
            'item_name',
            'stock',
            'current_stock',
            'yadnyesh',
            'dispatched',
           
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Order::all();
        return collect(Order::getOrders());
    }
}
