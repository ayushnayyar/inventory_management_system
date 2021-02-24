@extends('layouts.app')
@section('content')
<div class="container">
    <h4>update order</h4>
    <form action="{{ Route('order.update',[$order->id])}}" method="POST">
    @csrf
        <div class="form-group">
            <label class='mt-3' for="name">Enter Stock recieved</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="stock" value="{{$order->stock}}">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Weight on beam</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="beam" value="{{$order->beam}}">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Weight dispatched</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Kg" name="dispatched" value="{{$order->dispatched}}">
        </div>
        <input type="submit" class="btn btn-primary mt-3" name="submit">
    </form>
</div>
@endsection