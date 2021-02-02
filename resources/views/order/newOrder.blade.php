@extends('layouts.app')
@section('content')
<div class="container">
    <h4>new order</h4>
    <form action="" method="POST">
    @csrf
        <div class="form-group">
            <label class='mt-3' for="name">Item Name</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Stock recieved" name="stock">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Item type</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="current_stock">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Weight beam</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="beam">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Weight dispatched</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="dispatched">
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">select party</label>
            <select name="party_id">
                <option value="party_id">some_party</option>
                <option value="party_id">some_party</option>
            </select>
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">select material</label>
            <select name="material_id">
                <option value="material_id">some_material</option>
                <option value="material_id">some_material</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary mt-3" name="submit">
    </form>
</div>
@endsection