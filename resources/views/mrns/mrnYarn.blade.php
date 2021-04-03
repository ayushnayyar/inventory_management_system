@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">

    <form class="mt-4">
    <div class="row">
        <div class="form-group col-6">
            <label for="exampleInputEmail1">MRN number:</label>
            <input type="number" class="form-control" id="mrn_number" placeholder="">

        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Party name:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Actually received from:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Item name:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">shade:</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Invoice number:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Stock received:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Actual received weight:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Beam on machine:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Beam on floor:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Current stock:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Weft:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Fabric:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Cone:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Return:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputPassword1">Dispatch:</label>
            <input type="number" class="form-control" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>


@endsection