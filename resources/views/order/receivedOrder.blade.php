@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="heading-color"> Received Material</h4>
        <form action="{{ Route('order.addreceived', [$order->id])  }}" method="POST">
            @csrf
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Actually Received From</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="actual_recieved_from" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Shade</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="shade" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Type / Count</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="type" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Received Weight</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="recieved_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Actual Stock Received</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="actual_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">No Of Boxes</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="no_of_boxes" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Return Stock</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="return_stock" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Mrn No</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="mrn_no" value="">
                </div>
            </div>
            <input type="submit" class="btn submit-button-color mt-3 ml-4" name="submit">
        </form>

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
            <th>Date</th>
            <th>Actual received from</th>
            <th>Stock Recieved</th>
            <th>actual stock</th>
            <th>No Of boxes</th>
            <th>return stock</th>
            <th>short stock</th>
          </tr>
          @foreach($receives as $receive)
          <tr class='table-active'>
            <td>{{ $receive->created_at  }}</td>
            <td>{{ $receive->actual_recieved_from  }}</td>
            <td>{{ $receive->recieved_stock  }}</td>
            <td>{{ $receive->actual_stock  }}</td>
            <td>{{ $receive->no_of_boxes  }}</td>
            <td>{{ $receive->return_stock  }}</td>
            <td>{{ $receive->short_stock  }}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    </div>
</div>

@endsection