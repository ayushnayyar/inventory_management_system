@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <form  action="{{ Route('material.update', [$material->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label class='mt-3' for="name">Item Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name" value="{{ $material->material_name }}">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Item type</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type" value="{{ $material->material_type }}">
        </div>
            <input type="submit" class="btn btn-primary mt-3" name="submit">
    </form>
</div>
@endsection