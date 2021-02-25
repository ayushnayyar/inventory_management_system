@extends('layouts.app')
@section('content')
  <div class="container">
   
    <a class="btn btn-primary mb-3" href="{{ Route('addvendor') }}">Add Vendor</a>
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
        <td><a href="{{ Route('vendor.edit',[$vendor->id]) }}" class="btn btn-warning">Update</a></td>
        <td><a href="{{ Route('vendor.delete',[$vendor->id]) }}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
  </table>
  </div>
@endsection