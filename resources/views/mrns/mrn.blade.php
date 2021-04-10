@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">
    <div style="margin-left: 40%;">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a type="button" href="{{ Route('mrn.others') }}" class="btn btn-info border border-dark">Others</a>
            <a type="button" href="{{ Route('mrn.yarn') }}" color='white' class="btn btn-info border border-dark">Yarn</a>

        </div>
    </div>
    <div class="m-2">
      <table id="orders" class='table table-dark table-hover table-responsive-sm'>
        <tr>
          <th>Item Name</th>
          <th>Vendor Name</th>
          <th>Stock Recieved</th>
          <th>Current Stock</th>
          <th>Dispatched</th>
        </tr>
        @foreach($mrns as $mrn)
        <tr class='table-active'>
          <td>{{ $mrn->item_name }} </td>
          <td>{{ $mrn->vendor_name }}</td>
          <td>{{ $mrn->invoice_no }}</td>
          <td>{{ $mrn->quantity }}</td>
          <td>{{ $mrn->description }}</td>
          <td><a href="{{ Route('order.edit',[$mrn->id]) }}" class="btn btn-sm update-btn-color">Update</a></td>
          <td><a href="{{ Route('order.delete',[$mrn->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
</div>
@endsection