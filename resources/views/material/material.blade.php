@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary mb-3" href="{{ Route('addmaterial') }}">Add Material</a>
<table id="customers" class='table table-dark table-hover table-responsive-sm'>
      <tr>
        <th>Material Type</th>
        <th>Material Name</th>
      </tr>
      @foreach($materials as $material)
      <tr class='table-active'>
        <td>{{ $material->material_name }}</td>
        <td>{{ $material->material_type }}</td>
        <td><a href="{{ Route('material.edit', [$material->id]) }}" class="btn btn-warning">Update</a></td>
        <td><a href="{{ Route('material.delete', [$material->id]) }}" class="btn btn-warning">Delete</a></td>
      </tr>
      @endforeach
  </table>
</div>
@endsection