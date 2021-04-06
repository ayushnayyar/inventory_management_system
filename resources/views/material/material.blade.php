@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div>
    <div class="ml-2 mr-2">
      <a class="btn submit-button-color mb-2 mt-2 btn-block font-weight-bold p-2" href="{{ Route('addmaterial') }}">Add Material</a>
    </div>
    <div class="m-2">

      <table id="customers" class='table table-dark table-hover table-responsive-sm'>
        <tr>
          <th>Material Name</th>
          <th>Material Type</th>
        </tr>
        @foreach($materials as $material)
        <tr class='table-active'>
          <td>{{ $material->material_name }}</td>
          <td>{{ $material->material_type }}</td>
          <td><a href="{{ Route('material.edit', [$material->id]) }}" class="btn btn-sm update-btn-color">Update</a></td>
          <td><a href="{{ Route('material.delete', [$material->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection