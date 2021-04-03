@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
<h1>Transaction</h1>
<table id="customers"  class="table table-dark">
      <tr>
      <th>Order id</th>
        <th>Item ID</th>
        <th>Vendor ID</th>
        <th>Stock initial</th>
        <th>Current stock</th>
        <th>Beam</th>
        <th>Dispatch</th>
      </tr>
      @foreach($transactions as $transaction)
      <tr>
        <td>{{ $transaction->order_id}} </td>
        <td>{{ $transaction->party_id }}</td>
        <td>{{ $transaction->item_id }} </td>
        <td>{{ $transaction->stock }} </td>
        <td>{{ $transaction->current_stock }} </td>
        <td>{{ $transaction->beam }} </td>
        <td> {{ $transaction->dispatched }} </td>
      </tr>
     @endforeach
  </table>
</div>
@endsection