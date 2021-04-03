@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
<a class="btn btn-primary mb-3" href="{{ Route('addmaterial') }}">Add Material</a>
<table id="customers" class='table table-dark table-hover table-responsive-sm'>
      <tr>
        <th>Material Name</th>
        <th>Material Type</th>
      </tr>
      @foreach($materials as $material)
      <tr class='table-active'>
        <td>{{ $material->material_name }}</td>
        <td>{{ $material->material_type }}</td>
        <td><a href="{{ Route('material.edit', [$material->id]) }}" class="btn btn-warning">Update</a></td>
        <td><a href="{{ Route('material.delete', [$material->id]) }}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
  </table>
</div>
@endsection