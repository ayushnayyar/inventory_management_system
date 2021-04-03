@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
        <h4>Add Material</h4>
        <form action="{{ Route('material.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class='mt-3' for="name">Material Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name">
        </div>
        <div class="form-group">
            <label class='mt-3' for="name">Material Type</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type">
        </div>
            <input type="submit" class="btn btn-primary mt-3" name="submit">
        </form>
    </div>
@endsection