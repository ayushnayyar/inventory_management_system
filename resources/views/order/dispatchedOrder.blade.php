@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="heading-color"> Dispatched Material</h4>
        <form action="" method="POST">
            @csrf
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Quality</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="quality" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Design</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="design" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Length</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="length in meters" name="length" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Bales</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="no of bales" name="no_of_bales" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Dispatched Quantity</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="dispatched" value="">
                </div>
            </div>  
            <input type="submit" class="btn submit-button-color mt-3 ml-4" name="submit">
        </form>
    </div>
</div>

@endsection