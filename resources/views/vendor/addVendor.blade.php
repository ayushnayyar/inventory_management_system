@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class='ml-5 mr-5'>

        <h4 class="mb-3 mt-3 text-white">Add Vendor</h4>
        
        <form action="{{ Route('vendor.store') }}" method="POST">
            @csrf
            <div class="row mb-3 mt-3">
                <div class="form-group col-5">
                    <label class='mt-3 label-color' for="name">Vendor Name</label>
                    <input type="text" class="form-control input-bg-color" id="" placeholder="Enter Vendor Name" name="party_name">
                </div>
                <div class="form-group col-5">
                    <label class='mt-3 label-color' for="name">GST No.</label>
                    <input type="text" class="form-control input-bg-color" id="" placeholder="Enter GST No." name="gst_no">
                </div>
                <div class="form-group col-5">
                    <label class='mt-3 label-color' for="name">Vendor Address</label>
                    <input type="text" class="form-control input-bg-color" id="" placeholder="Enter Vendor Address" name="address">
                </div>
            </div>
            <div class="mb-3 mt-3">
                <input type="submit" class="btn submit-button-color mt-3" name="submit">
            </div>
        </form>
    </div>
</div>
@endsection