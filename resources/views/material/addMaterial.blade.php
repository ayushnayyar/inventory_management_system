@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="text-white">Add Material</h4>
        <form action="{{ Route('material.store') }}" method="POST">
            @csrf
            <div class="row ml-2 mr-2">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Material Name</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Material Type</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type">
                </div>
            </div>
            <div class="row ml-4 mr-2">
                <input type="submit" class="d-flex btn btn-sm submit-button-color mt-3" name="submit">
            </div>
        </form>
    </div>
</div>
@endsection