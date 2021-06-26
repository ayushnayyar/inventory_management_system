@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">
  <div>
    <div class="mt-2">
      <ol class="breadcrumb ml-2 mr-2">
        <li class="breadcrumb-item active font-weight-bold" style="color: #c6c6c6;"><span id="breadcrumb-item">Material Received Note</span></li>
      </ol>
    </div>
    <div class="bg-color-content" id="menu">
      <div class="menu bg-color-content" id="menu">
        <div class="card bg-color-content">
          <div class="card-header shadow p-2 mb-2 rounded">
            <div class="ml-5 mr-5 d-flex justify-content-center">
              <div class="col-6 text-center text-dark btn active m-1 submit-button-color" id="myyarn" onclick="headingYarn()">
                Yarn
              </div>
              <div class="col-6 text-center text-dark btn view-btn-color m-1" id="myother" onclick="headingOther()">
                Other
              </div>
            </div>
          </div>
          <!-- yarn form -->
          <div class="card-body shadow p-2 mb-4 rounded active bg-color-content" id="yarn">
            <form method="POST" action="{{ Route('mrnyarn.store') }}" class="">
              @csrf
              <div class="row ml-4 mr-4" style="border: 1px solid #6EDAC5 ;">
                <div class="form-group col-3">
                  <label for="exampleInputEmail1" class="label-color">MRN Number</label>
                  <input type="number" class="form-control input-bg-color" id="mrn_number" placeholder="" name="mrn_no">
                </div>
                <div class="form-group col-3">
                  <label class="mt-3" for="name" class="label-color label-color-change">Select Vendor </label>
                  <select name="vendor_name" class="btn btn-secondary btn-sm dropdown-toggle ml-1" style="width: 50%;">
                    @foreach($vendors as $vendor)
                    <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-3">
                  <label class="mt-3" for="name" class="label-color">Select Material </label>
                  <select name="item_name" class='form-select btn btn-sm btn-secondary dropdown-toggle ml-1' style="width: 50%;">
                    @foreach($materials as $material)
                    <option value="{{ $material->material_name }}">{{ $material->material_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Actually Received From</label>
                  <input type="text" class="form-control input-bg-color" placeholder="" name="actual_recieved_from">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Shade</label>
                  <input type="text" class="form-control input-bg-color" placeholder="" name="shade">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Type / Count</label>
                  <input type="string" class="form-control input-bg-color" placeholder="" name="type">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Invoice Number</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name="invoice_no">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Stock Received</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name="recieved_stock">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">No Of Boxes</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name="no_of_boxes">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Actual Received Weight</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name="actual_stock">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Return</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name="return_stock">
                </div>
                <div class="form-group col-3">
                  <label for="exampleInputPassword1" class="label-color">Description</label>
                  <input type="text" class="form-control input-bg-color" placeholder="" name="description">
                </div>
              <div class='mt-5 mb-2'>
                <div class="col-4">
                  <button type="submit" class="btn btn-sm submit-button-color">Submit</button>
                </div>
              </div>
              </div>
            </form>
          </div>

          <!-- Other than yarn form-->
          <div class="card-body shadow p-2 mb-4 rounded bg-color-content" id="other">
            <form class="" method="POST" action="{{ Route('mrnothers.store') }}">
              @csrf
              <div class="row ml-4 mr-4" style="border: 1px solid #F2EA9D ;">
                <div class="form-group col-4">
                  <label class="label-color" for="exampleInputEmail1">MRN Number</label>
                  <input type="number" class="form-control input-bg-color" id="mrn_number" placeholder="" name='mrn_no'>
                </div>
                <div class="form-group col-4">
                  <label class="label-color" for="exampleInputPassword1">Vendor Name</label>
                  <input type="text" class="form-control input-bg-color" placeholder="" name='vendor_name'>
                </div>
                <div class="form-group col-4">
                  <label class="label-color" for="exampleInputPassword1">Item Name</label>
                  <input type="text" class="form-control input-bg-color" placeholder="" name="item_name">
                </div>
                <div class="form-group col-4">
                  <label class="label-color" for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control input-bg-color" placeholder="" name='description'>
                </div>
                <div class="form-group col-4">
                  <label class="label-color" for="exampleInputPassword1">Invoice Number</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name='invoice_no'>
                </div>
                <div class="form-group col-4">
                  <label class="label-color" for="exampleInputPassword1">Quantity</label>
                  <input type="number" class="form-control input-bg-color" placeholder="" name='quantity'>
                </div>
                <div class="col-4 mb-3">
                  <button type="submit" class="btn btn-sm view-btn-color">Submit</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- <div class="float-right p-2">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a type="button" href="{{ Route('mrn.others') }}" class="btn btn-info border border-dark mr-1">Others</a>
            <a type="button" href="{{ Route('mrn.yarn') }}" color='white' class="btn btn-info border border-dark mr-1">Yarn</a>

        </div>
    </div> -->
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
      <div>
        <table id="orders" class='search-table table table-dark table-hover table-responsive-sm'>
          <tr>
            <th>Item Name</th>
            <th>Vendor Name</th>
            <th>Stock Recieved</th>
            <th>Current Stock</th>
            <th>Dispatched</th>
          </tr>
          @foreach($mrns as $mrn)
          <tr class='table-active'>
            <td>{{ $mrn->item_name }} </td>
            <td>{{ $mrn->vendor_name }}</td>
            <td>{{ $mrn->invoice_no }}</td>
            <td>{{ $mrn->quantity }}</td>
            <td>{{ $mrn->description }}</td>
            <td><a href="{{ Route('order.delete',[$mrn->id]) }}" class="btn btn-sm delete-btn-color">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
<script>
  function headingOther(){
    document.querySelector("#breadcrumb-item").innerHTML = "Other"
  }
  function headingYarn(){
    document.querySelector("#breadcrumb-item").innerHTML = "Yarn"
  }
  $(document).ready(function() {
    $("#mydrink").click(function() {
      $("#drink").css("display", "block")
      $("#eat").css("display", "none")
    })
    $("#myeat").click(function() {
      $("#drink").css("display", "none")
      $("#eat").css("display", "block")
    })
    document.getElementById("myeat").click();


  });
</script>
@endsection