@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div>

        <h4 class="aligns mt-5">Update Vendor</h4>
        
        <form action="{{ Route('vendor.update', [$vendor->id]) }}" method="POST">
            @csrf
            <div class="form-group col-4">
                <label class='mt-3' for="name">Vendor Name</label>
                <input type="text" class="form-control input-back-color"  id="exampleInputEmail1" placeholder="Enter Vendor Name" name="party_name" value="{{ $vendor->party_name }}">
            </div>
            <div class="form-group col-4">
                <label class='mt-3' for="name">GST No.</label>
                <input type="text" class="form-control input-back-color "  id="exampleInputEmail1" placeholder="Enter GST No." name="gst_no" value="{{ $vendor->gst_no }}">
            </div>
            <div class="form-group col-4">
                <label class='mt-3' for="name">Vendor Address</label>
                <input type="text" class="form-control input-back-color" id="exampleInputEmail1" placeholder="Enter Vendor Address" name="address" value="{{ $vendor->address }}">
            </div>
            <div class="col-4">
                <button type="submit" class="d-block btn submit-button-color">Submit</button>
            </div>
        </form>
    </div>
    </div>
    @endsection