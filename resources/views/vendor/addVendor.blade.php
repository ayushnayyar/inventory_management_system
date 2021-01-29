@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Add Vendor</h4>
        <form action="" class="post">
            <label class='mt-3' for="name">Vendor Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Name" name="party_name">
            <label class='mt-3' for="name">GST No.</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter GST No." name="gst_no">
            <label class='mt-3' for="name">Vendor Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Address" name="party_address">
            <input type="submit" class="btn btn-primary mt-3" name="submit">
        </form>
    </div>
@endsection