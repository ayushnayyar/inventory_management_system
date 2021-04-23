@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div>
    <div class="d-flex justify-content-between ml-5 mr-5 mt-3 mb-3">

      <form action="{{ Route('vendor.report') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-between">
          <div class="form-group ">
            <label class="label-color" for="name">Select Vendor</label>
            <select class="ml-1 btn btn-secondary btn-sm dropdown-toggle" name="party_name">
              @foreach($vendors as $vendor)
              <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
              @endforeach
            </select>
          </div>
          <div>
            <button type="submit" class="ml-2 btn view-btn-color font-weight-bold">Generate Report</button>
          </div>
        </div>
      </form>

      <div class="add_vendor_button">
        <a class="btn submit-button-color font-weight-bold" href="{{ Route('addvendor') }}">Add Vendor</a>
      </div>

    </div>

    <div class="mt-2 mb-2 card bg-dark ml-5 mr-5" style="border: none;">
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
      <div>
        <table id="customers" class='search-table table table-dark table-hover table-responsive-sm'>
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
</div>
@endsection