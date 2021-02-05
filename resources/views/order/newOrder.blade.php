@extends('layouts.app')
@section('content')
<div class="container">
    <h4>new order</h4>
    <form action="{{ Route('order.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label class='mt-3' for="name">Enter Stock recieved</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="stock">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Weight on beam</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="beam">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Weight dispatched</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="dispatched">
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">select party</label>
            <select name="party_id">
                @foreach($vendors as $vendor)
                <option value="{{ $vendor->id }}">{{$vendor->party_name}}</option>
                
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="mt-3" for="name">select material</label>
            <select name="material_id">
                @foreach($materials as $material)
                <option value="{{ $material->id }}">{{ $material->material_name }}</option>
                
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary mt-3" name="submit">
    </form>
</div>
@endsection