@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div>
  <div class="d-flex justify-content-between ml-5 mr-5 mb-3 mt-3">
      <div class="">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded mr-1 input-bg-color" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0 search-box-icon" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </div>

      <div class="add_vendor_button">
        <a class="btn submit-button-color btn-block font-weight-bold" href="{{ Route('addmaterial') }}">Add Material</a>
      </div>

    </div>
    
    <div class="ml-5 mr-5 mb-3 mt-3">

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