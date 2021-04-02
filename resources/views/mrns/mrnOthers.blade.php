@extends('layouts.app')
@section('content')

<div class="">
<form class="mt-4">
    <div class="row">
        <div class="form-group col-6">
            <label for="exampleInputEmail1">MRN number:</label>
            <input type="number" class="form-control" id="mrn_number" placeholder="">

        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Recieved from:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Item name:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Description:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Invoice number:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Quantity:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection