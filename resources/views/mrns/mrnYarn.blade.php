@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">

    <form class="mt-4" method="POST" action="{{ Route('mrnyarn.store') }}">
        @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="exampleInputEmail1">MRN number:</label>
            <input type="number" class="form-control" id="mrn_number" placeholder="" name="mrn_no">
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">Select Vendor</label>
            <select name="vendor_name">
                @foreach($vendors as $vendor)
                <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Actually received from:</label>
            <input type="text" class="form-control" placeholder="" name="actual_recieved_from">
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">Select Material</label>
            <select name="item_name" class='form-select'>
                @foreach($materials as $material)
                <option value="{{ $material->material_name }}">{{ $material->material_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">shade:</label>
            <input type="text" class="form-control" placeholder="" name="shade">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Invoice number:</label>
            <input type="number" class="form-control" placeholder="" name="invoice_no">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Stock received:</label>
            <input type="number" class="form-control" placeholder="" name="recieved_stock">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Actual received weight:</label>
            <input type="number" class="form-control" placeholder="" name="actual_stock">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Return:</label>
            <input type="number" class="form-control" placeholder="" name="return_stock">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Description:</label>
            <input type="text" class="form-control" placeholder="" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>


@endsection