@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="heading-color">Update Order</h4>
        <form action="{{ Route('order.update',[$order->id])}}" method="POST">
            @csrf
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Cone stock</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="cone_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Weight on beam floor</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="beam_floor" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Weight on beam machine</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="beam_machine" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Weft</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="weft" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Fabric stock</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="fabric_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Weight dispatched</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="dispatched" value="">
                </div>
            </div>
            <input type="submit" class="btn submit-button-color mt-3 ml-4" name="submit">
        </form>
    </div>
</div>

@endsection