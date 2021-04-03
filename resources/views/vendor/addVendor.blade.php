@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <h4>Add Vendor</h4>
    
    <form action="{{ Route('vendor.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label class='mt-3' for="name">Vendor Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Name" name="party_name">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">GST No.</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter GST No." name="gst_no">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Vendor Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Address" name="address">
        </div>
        <input type="submit" class="btn btn-primary mt-3" name="submit">
    </form>
</div>
@endsection