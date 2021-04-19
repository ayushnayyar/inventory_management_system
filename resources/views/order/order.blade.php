@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div class="ml-5 mr-5 mb-3 mt-3">
  <div class="d-flex justify-content-between">
      <div class="">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded mr-1 input-bg-color" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="ml-2 input-group-text border-0 search-box-icon" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </div>

      <div class="add_vendor_button">
        <a class="btn submit-button-color font-weight-bold" href="{{ Route('mrn.yarn') }}">Add Order</a>
        <a class="ml-2 btn view-btn-color font-weight-bold" href="">Generate Report</a>
      </div>

    </div>
    <div class="mb-3 mt-3">
      <table id="orders" class='table table-dark table-hover table-responsive-sm'>
        <tr>
          <th>Item Name</th>
          <th>Vendor Name</th>
          <th>Stock Recieved</th>
          <th>Current Stock</th>
          <th>Dispatched</th>
        </tr>
        @foreach($orders as $order)
        <tr class='table-active'>
          <td>{{ $order->item_name }} </td>
          <td>{{ $order->party_name }}</td>
          <td>{{ $order->recieved_stock }}</td>
          <td>{{ $order->current_stock }}</td>
          <td>{{ $order->dispatched }}</td>
          <td><a href="{{ Route('order.edit',[$order->id]) }}" class="btn btn-sm update-btn-color">Update</a></td>
          <td><a href="{{ Route('order.view',[$order->id]) }}" class="btn btn-sm view-btn-color">View</a></td>
          <td><a href="{{ Route('order.delete',[$order->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>

  </div>
</div>
@endsection