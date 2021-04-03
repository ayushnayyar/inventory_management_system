@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
<a class="btn btn-primary mb-3" href="{{ Route('addorder') }}">Add Order</a>
<a class="btn btn-primary mb-3" href="{{ Route('reportorder') }}">Generate Report</a>
<table id="orders" class='table table-dark table-hover table-responsive-sm'>
      <tr>
        <th>Item Name</th>
        <th>Vendor Name</th>
        <th>Stock Recieved</th>
        <th>Current Stock</th>
        <th>Beam</th>
        <th>Dispatched</th>
      </tr>
      @foreach($orders as $order)
      <tr class='table-active'>
        <td>{{ $order->item_name }} </td>
        <td>{{ $order->party_name }}</td>
        <td>{{ $order->stock }}</td>
        <td>{{ $order->current_stock }}</td>
        <td>{{ $order->beam }}</td>
        <td>{{ $order->dispatched }}</td>
        <td><a href="{{ Route('order.edit',[$order->id]) }}" class="btn btn-warning">Update</a></td>
        <td><a href="{{ Route('order.view',[$order->id]) }}" class="btn btn-success">View</a></td>
        <td><a href="{{ Route('order.delete',[$order->id]) }}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
  </table>
</div>
@endsection