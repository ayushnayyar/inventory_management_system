@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div class="ml-5 mr-5 mb-3 mt-3">
    <div class="d-flex justify-content-between">
      <div class="">
      </div>

      <div class="add_vendor_button">
        <a class="btn submit-button-color font-weight-bold mr-4" href="{{ Route('mrn') }}">Add Order</a>
      </div>

    </div>
    <div class="mt-3 mb-2 card bg-dark ml-4 mr-4" style="border: none;">
      <div class="d-flex justify-content-between bg-dark">
        <div>
          <div class="card-header text-white bg-dark">
            <i class="fas fa-table mr-1"></i>
            Table
          </div>
        </div>
        <div>
          <div>
            <div class="input-group rounded mt-2">
              <input type="search" data-table=".search-table" data-count="#count" class="form-control rounded mr-1 input-bg-color" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="ml-2 input-group-text border-0 search-box-icon mr-1" id="search-addon">
                <i class="fas fa-search "></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-2 mt-2">
        <table id="orders" class='search-table table table-dark table-hover table-responsive-sm'>
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
            <td><a href="{{ Route('order.received',[$order->id]) }}" class="btn btn-sm update-btn-color">Received</a></td>
            <td><a href="{{ Route('order.dispatched',[$order->id]) }}" class="btn btn-sm view-btn-color">Dispatched</a></td>
            <td><a href="{{ Route('order.delete',[$order->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection