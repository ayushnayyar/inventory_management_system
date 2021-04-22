@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div>

        <h4 class="aligns mt-5">Update Material</h4>

        <form  action="{{ Route('material.update', [$material->id]) }}" method="POST">
            @csrf
            <div class="form-group col-4">
                <label class='mt-3' for="name">Item Name</label>
                <input type="text" class="form-control input-back-color" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name" value="{{ $material->material_name }}">
            </div>
            <div class="form-group col-4">
                <label class='mt-3' for="name">Item type</label>
                <input type="text" class="form-control input-back-color" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type" value="{{ $material->material_type }}">
            </div>
            <div class="col-4">
                <button type="submit" class="d-block btn submit-button-color">Submit</button>
            </div>
        </form>
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Material</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form  action="{{ Route('material.update', [$material->id]) }}" method="POST">
                        @csrf
                        <div class="form-group col-4">
                            <label class='mt-3' for="name">Item Name</label>
                            <input type="text" class="form-control input-back-color" id="exampleInputEmail1" placeholder="Enter Material Name" name="material_name" value="{{ $material->material_name }}">
                        </div>
                        <div class="form-group col-4">
                            <label class='mt-3' for="name">Item type</label>
                            <input type="text" class="form-control input-back-color" id="exampleInputEmail1" placeholder="Enter Material Type" name="material_type" value="{{ $material->material_type }}">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="d-block btn submit-button-color">Submit</button>
                </div>
              </div>
            </div>
          </div> --}}
    </div>
</div>
@endsection