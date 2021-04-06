@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">
<form class="mt-4" method="POST" action="{{ Route('mrnothers.store') }}">
    @csrf
    <div class="row ml-4 mr-4"> 
        <div class="form-group col-4">
            <label class="label-color" for="exampleInputEmail1">MRN number:</label>
            <input type="number" class="form-control input-bg-color" id="mrn_number" placeholder="" name='mrn_no'>
        </div>
        <div class="form-group col-4">
            <label class="label-color" for="exampleInputPassword1">Vendor name:</label>
            <input type="text" class="form-control input-bg-color" placeholder="" name='vendor_name'>
        </div>
        <div class="form-group col-4">
            <label class="label-color" for="exampleInputPassword1">Item name:</label>
            <input type="text" class="form-control input-bg-color" placeholder="" name="item_name">
        </div>
        <div class="form-group col-4">
            <label class="label-color" for="exampleInputPassword1">Description:</label>
            <input type="text" class="form-control input-bg-color" placeholder="" name='description'>
        </div>
        <div class="form-group col-4">
            <label class="label-color" for="exampleInputPassword1">Invoice number:</label>
            <input type="number" class="form-control input-bg-color" placeholder="" name='invoice_no'>
        </div>
        <div class="form-group col-4">
            <label class="label-color" for="exampleInputPassword1">Quantity:</label>
            <input type="number" class="form-control input-bg-color" placeholder="" name='quantity'>
        </div>
        <div class="col-4">

            <button type="submit" class="btn submit-button-color">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection