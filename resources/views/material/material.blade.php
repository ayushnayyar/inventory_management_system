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
        <td><a href="" class="btn btn-warning">Update</a></td>
      </tr>
      @endforeach
  </table>
</div>
@endsection