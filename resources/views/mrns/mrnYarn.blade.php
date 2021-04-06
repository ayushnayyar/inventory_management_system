@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">

    <form class="mt-4" method="POST" action="{{ Route('mrnyarn.store') }}">
        @csrf
    <div class="row ml-4 mr-4">
        <div class="form-group col-4">
            <label for="exampleInputEmail1" class="label-color">MRN number:</label>
            <input type="number" class="form-control input-bg-color" id="mrn_number" placeholder="" name="mrn_no">
        </div>
        <div class="form-group col-4">
            <label class="mt-3" for="name" class="label-color">Select Vendor</label>
            <select name="vendor_name">
                @foreach($vendors as $vendor)
                <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-4">
            <label class="mt-3" for="name" class="label-color">Select Material</label>
            <select name="item_name" class='form-select'>
                @foreach($materials as $material)
                <option value="{{ $material->material_name }}">{{ $material->material_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">Actually received from:</label>
            <input type="text" class="form-control input-bg-color" placeholder="" name="actual_recieved_from">
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">shade:</label>
            <input type="text" class="form-control input-bg-color" placeholder="" name="shade">
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">Invoice number:</label>
            <input type="number" class="form-control input-bg-color" placeholder="" name="invoice_no">
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">Stock received:</label>
            <input type="number" class="form-control input-bg-color" placeholder="" name="recieved_stock">
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">Actual received weight:</label>
            <input type="number" class="form-control input-bg-color" placeholder="" name="actual_stock">
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">Return:</label>
            <input type="number" class="form-control input-bg-color" placeholder="" name="return_stock">
        </div>
        <div class="form-group col-4">
            <label for="exampleInputPassword1" class="label-color">Description:</label>
            <input type="text" class="form-control input-bg-color" placeholder="" name="description">
        </div>
        <div class="col-4">
            <button type="submit" class="d-block btn btn-sm submit-button-color">Submit</button>
        </div>
    </div>
    </form>
</div>


@endsection