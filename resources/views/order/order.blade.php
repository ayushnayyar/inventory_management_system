@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary mb-3" href="{{ Route('addorder') }}">Add Order</a>

<table id="orders" class="table table-dark">
      <tr>
        <th>Item id</th>
        <th>Vendor id</th>
        <th>Stock Recieved</th>
        <th>Current Stock</th>
        <th>Beam</th>
        <th>Dispatched</th>
      </tr>
      @foreach($orders as $order)
      <tr>
        <td>{{ $order->item_id }} </td>
        <td>{{ $order->party_id }}</td>
        <td>{{ $order->stock }}</td>
        <td>{{ $order->current_stock }}</td>
        <td>{{ $order->beam }}</td>
        <td>{{ $order->dispatched }}</td>
        <td><a href="{{ Route('order.edit',[$order->id]) }}" class="btn btn-warning">Update</a></td>
        <td><a href="" class="btn btn-success">View</a></td>
        <td><a href="" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
  </table>
</div>
@endsection