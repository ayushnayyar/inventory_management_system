@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <h4>New Order</h4>
    <form action="{{ Route('order.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label class='mt-3' for="name"> Recieved Stock</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="recieved_stock">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Actual Stock</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="actual_stock">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Actual Recieved From</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="vendor name" name="actual_recieved_from">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Return Stock</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="return_stock">
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">Select Vendor</label>
            <select name="party_id">
                @foreach($vendors as $vendor)
                <option value="{{ $vendor->id }}">{{$vendor->party_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">Select Material</label>
            <select name="material_id" class='form-select'>
                @foreach($materials as $material)
                <option value="{{ $material->id }}">{{ $material->material_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">Select Shade</label>
            <select name="shade" class='form-select'>
               <option value="green">Green</option>
               <option value="red">Red</option>
               <option value="yellow">yellow</option>
            </select>
        </div>
       
        <input type="submit" class="btn btn-primary mt-3" name="submit">
    </form>
</div>
@endsection