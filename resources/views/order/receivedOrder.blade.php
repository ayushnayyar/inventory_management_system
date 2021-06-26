@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="heading-color"> Received Material</h4>
        <form action="" method="POST">
            @csrf
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Actually Received From</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="actual_received_from" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Shade</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="shade" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Type / Count</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="type" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Received Weight</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="recieved_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Actual Stock Received</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="actual_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">No Of Boxes</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="no_of_boxes" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
            <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Short Weight</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="short_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Return Stock</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="return_stock" value="">
                </div>
            </div>
            <input type="submit" class="btn submit-button-color mt-3 ml-4" name="submit">
        </form>
    </div>
</div>

@endsection