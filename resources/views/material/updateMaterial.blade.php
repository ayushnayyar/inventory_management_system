@extends('layouts.app')
@section('content')
<div class='ml-5 mr-5 mt-3 mb-3' id="layoutSidenav_content">
    <form  action="{{ Route('material.update', [$material->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label class='mt-3 label-color' for="name">Item Name</label>
            <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name" value="{{ $material->material_name }}">
        </div>
        <div class="form-group">
            <label class='mt-3 label-color' for="name">Item type</label>
            <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type" value="{{ $material->material_type }}">
        </div>
            <input type="submit" class="btn submit-button-color mt-3" name="submit">
    </form>
</div>
@endsection