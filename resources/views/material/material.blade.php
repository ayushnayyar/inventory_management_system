@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
  <div>
    <div class="d-flex justify-content-between ml-5 mr-5 mb-3 mt-3">
      <div class=""></div>
      <div class="add_vendor_button">
        <button type="button" class="btn submit-button-color btn-block font-weight-bold" data-toggle="modal" data-target="#materialModal">Add Material</button>
      </div>
    </div>

    <div class="mt-2 mb-2 card bg-dark ml-5 mr-5" style="border: none;">
      <div class="d-flex justify-content-between bg-dark">
        <div>
          <div class="card-header text-white bg-dark">
            <i class="fas fa-table mr-1"></i>
            Table
          </div>
        </div>
        <div>
          <div>
            <div class="input-group rounded mt-2">
              <input type="search" data-table=".search-table" data-count="#count" class="form-control rounded mr-1 input-bg-color" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="ml-2 input-group-text border-0 search-box-icon mr-1" id="search-addon">
                <i class="fas fa-search "></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <table id="customers" class='search-table table table-dark table-hover table-responsive-sm'>
          <tr>
            <th>Material Name</th>
            <th>Material Type</th>
          </tr>
          @foreach($materials as $material)
          <tr class='table-active'>
            <td>{{ $material->material_name }}</td>
            <td>{{ $material->material_type }}</td>
            <td><button class="btn btn-sm update-btn-color" data-toggle="modal" data-target="#exampleModal-{{ $material->id }}">Update</button></td>
            <!-- update material modal -->
            <div class="modal fade" id="exampleModal-{{ $material->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-bg">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Material</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ Route('material.update', [$material->id]) }}" method="POST">
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
                </div>
              </div>
            </div>
            <td><a href="{{ Route('material.delete', [$material->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <!-- add material modal -->
    <div class="modal fade" id="materialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ Route('material.store') }}" method="POST">
            @csrf
            <div class="">
                <div class="form-group">
                    <label class='mt-3 label-color' for="name">Material Name</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name">
                </div>
                <div class="form-group">
                    <label class='mt-3 label-color' for="name">Material Type</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type">
                </div>
            </div>
            <div class="modal-footer">
                <div class='form-group'>
                    <input type="submit" class="d-flex btn submit-button-color mt-3" name="submit">
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
@endsection