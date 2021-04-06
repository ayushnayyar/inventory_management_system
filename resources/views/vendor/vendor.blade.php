@extends('layouts.app')
@section('content')
  <div id="layoutSidenav_content">
   <div>
   <div class="ml-2 mr-2">
      <a class="btn submit-button-color mb-2 mt-2 btn-block font-weight-bold p-2" href="{{ Route('addvendor') }}">Add Vendor</a>
    </div>
    <div class="m-2">

      <table id="customers" class='table table-dark table-hover table-responsive-sm'>
        <tr>
          <th>Name</th>
          <th>GST No</th>
          <th>Address</th>
        </tr>
        @foreach($vendors as $vendor)
        <tr class='table-active'>
          <td>{{ $vendor->party_name }}</td>
          <td>{{ $vendor->gst_no }}</td>
          <td>{{ $vendor->address }}</td>
          <td><a href="{{ Route('vendor.edit',[$vendor->id]) }}" class="btn btn-sm update-btn-color">Update</a></td>
          <td><a href="{{ Route('vendor.delete',[$vendor->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    </div>
  </div>
@endsection