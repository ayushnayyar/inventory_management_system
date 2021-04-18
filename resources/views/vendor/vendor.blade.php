@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div>
    <div class="d-flex justify-content-between m-2">
      <div class="">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded mr-1 input-bg-color" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0 search-box-icon" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </div>

      <form action="{{ Route('vendor.report') }}" method="POST">
        @csrf
        <div class="form-group ">
                <label class="label-color" for="name">Select Vendor :</label>
                <select name="party_name">
                    @foreach($vendors as $vendor)
                    <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn view-btn-color font-weight-bold">Generate Report</button>
        </form>

      <div class="add_vendor_button">
        <a class="btn submit-button-color btn-block font-weight-bold" href="{{ Route('addvendor') }}">Add Vendor</a>
        
      </div>

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