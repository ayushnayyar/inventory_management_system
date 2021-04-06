@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div>
        <h4 class="text-white">New Order</h4>
        <form action="{{ Route('order.store')}}" method="POST">
            @csrf
            <div class="row ml-4 mr-4">

                <div class="form-group col-4">
                    <label class="label-color" for="name"> Recieved Stock</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="recieved_stock">
            </div>
            <div class="form-group col-4">
                <label class="label-color" for="name">Actual Stock</label>
                <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="actual_stock">
            </div>
            <div class="form-group col-4">
                <label class="label-color" for="name">Actual Recieved From</label>
                <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="vendor name" name="actual_recieved_from">
            </div>
            <div class="form-group col-4">
                <label class="label-color" for="name">Return Stock</label>
                <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="return_stock">
            </div>
            <div class="form-group col-4">
                <label class="label-color" for="name">Select Vendor</label>
                <select name="party_id">
                    @foreach($vendors as $vendor)
                    <option value="{{ $vendor->id }}">{{$vendor->party_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-4">
                <label class="label-color" for="name">Select Material</label>
                <select name="material_id" class='form-select'>
                    @foreach($materials as $material)
                    <option value="{{ $material->id }}">{{ $material->material_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-4">
                <label class="label-color" for="name">Select Shade</label>
                <select name="shade" class='form-select'>
                    <option value="green">Green</option>
                    <option value="red">Red</option>
                    <option value="yellow">yellow</option>
                </select>
            </div>
            
            <input type="submit" class="btn submit-button-color mt-3" name="submit">
        </div>
        </form>
    </div>
</div>
@endsection