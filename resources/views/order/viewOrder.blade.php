@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
<div class="">
<h1>Transactions</h1>
<h4 class="mt-3">Short Stock : {{ $short_stock }}</h4>
<table id="customers"  class="table table-dark table-hover table-responsive-sm mt-4">
      <tr>
        <th>Item name</th>
        <th>Vendor name</th>
        <th>Actual stock Recieved</th>
        <th>Current stock</th>
        <th>Beam floor</th>
        <th>Beam machine</th>
        <th>Weft</th>
        <th>Fabric Stock</th>
        <th>Dispatch</th>
        <th>Timestamp</th>
      </tr>
      @foreach($transactions as $transaction)
      <tr>
        <td>{{ $transaction->item_name }}</td>
        <td>{{ $transaction->party_name }} </td>
        <td>{{ $transaction->actual_stock }} </td>
        <td>{{ $transaction->current_stock }} </td>
        <td>{{ $transaction->beam_floor }} </td>
        <td>{{ $transaction->beam_machine }} </td>
        <td>{{ $transaction->weft }} </td>
        <td>{{ $transaction->fabric_stock }} </td>
        <td> {{ $transaction->dispatched }} </td>
        <td> {{$transaction->created_at }} </td>
      </tr>
     @endforeach
  </table>
  </div>
</div>
@endsection