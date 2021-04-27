@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div>
  <div class="mt-3 mb-3" style="margin-left: 87%;">
      <button class="btn font-weight-bold submit-button-color" data-toggle="modal" data-target="#vendorModal">Add Vendor</button>
  </div>
   
    <!-- add vendor modal -->
    <div class="modal fade" id="vendorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-bg">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="{{ Route('vendor.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <div class="form-group">
                    <label class='mt-3 label-color' for="name">Vendor Name</label>
                    <input type="text" class="form-control input-bg-color" id="" placeholder="Enter Vendor Name" name="party_name">
                </div>
                <div class="form-group">
                    <label class='mt-3 label-color' for="name">GST No.</label>
                    <input type="text" class="form-control input-bg-color" id="" placeholder="Enter GST No." name="gst_no">
                </div>
                <div class="form-group">
                    <label class='mt-3 label-color' for="name">Vendor Address</label>
                    <input type="text" class="form-control input-bg-color" id="" placeholder="Enter Vendor Address" name="address">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn submit-button-color mt-3" name="submit">
            </div>
        </form>
          </div>
        </div>
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
            <td><button type="button" class="btn btn-sm update-btn-color" data-toggle="modal" data-target="#exampleModal-{{ $vendor->id }}" data-whatever="{{ $vendor->id }}">Update</button></td>
            <!-- update vendor modal -->
            <div class="modal fade" id="exampleModal-{{ $vendor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-bg">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Vendor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ Route('vendor.update', [$vendor->id]) }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label class='mt-3' for="name">Vendor Name</label>
                        <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Vendor Name" name="party_name" value="{{ $vendor->party_name }}">
                      </div>
                      <div class="form-group">
                        <label class='mt-3' for="name">GST No.</label>
                        <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter GST No." name="gst_no" value="{{ $vendor->gst_no }}">
                      </div>
                      <div class="form-group">
                        <label class='mt-3' for="name">Vendor Address</label>
                        <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Vendor Address" name="address" value="{{ $vendor->address }}">
                      </div>
                      <input type="submit" class="btn submit-button-color mt-3" name="submit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <td><a href="{{ Route('vendor.delete',[$vendor->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection