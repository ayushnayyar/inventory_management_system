@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">
<form class="mt-4" method="POST" action="{{ Route('mrnothers.store') }}">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="exampleInputEmail1">MRN number:</label>
            <input type="number" class="form-control" id="mrn_number" placeholder="" name='mrn_no'>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Vendor name:</label>
            <input type="text" class="form-control" placeholder="" name='vendor_name'>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Item name:</label>
            <input type="text" class="form-control" placeholder="" name="item_name">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Description:</label>
            <input type="text" class="form-control" placeholder="" name='description'>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Invoice number:</label>
            <input type="number" class="form-control" placeholder="" name='invoice_no'>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Quantity:</label>
            <input type="number" class="form-control" placeholder="" name='quantity'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection