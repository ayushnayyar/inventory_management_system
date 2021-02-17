@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary mb-3" href="{{ Route('addmaterial') }}">Add item</a>
<table id="customers">
      <tr>
        <th>Material type</th>
        <th>material name</th>
      </tr>
      @foreach($materials as $material)
      <tr>
        <td>{{ $material->material_name }}</td>
        <td>{{ $material->material_type }}</td>
        <td><a href="{{ Route('material.edit', [$material->id]) }}" class="btn btn-warning">Update</a></td>
        <td><a href="{{ Route('material.delete', [$material->id]) }}" class="btn btn-warning">Delete</a></td>
      </tr>
      @endforeach
  </table>
</div>
@endsection