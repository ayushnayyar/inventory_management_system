@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="heading-color"> Dispatched Material</h4>
        <form action="{{ Route('order.addDispatched', [$order->id]) }}" method="POST">
            @csrf
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Quality</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="quality" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Design</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" name="design" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Length</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="length in meters" name="length" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Bales</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="no of bales" name="no_of_bales" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Dispatched Quantity (fabric stock {{abs($order->fabric_stock - $order->dispatched)}})</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="dispatched" value="" required >
                </div>
            </div>  
            <input type="submit" class="btn submit-button-color mt-3 ml-4" name="submit">
        </form>

        v class="mt-2 mb-2 card bg-dark ml-5 mr-5" style="border: none;">
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
            <th>Quality</th>
            <th>Design</th>
            <th>Length</th>
            <th>No Of bales</th>
            <th>Dispatched Quantity</th>
          </tr>
          @foreach($dispatched as $dispatch)
          <tr class='table-active'>
            <td  class="timestamp">{{ $dispatch->created_at  }}</td>
            <td>{{ $dispatch->quality  }}</td>
            <td>{{ $dispatch->design  }}</td>
            <td>{{ $dispatch->length  }}</td>
            <td>{{ $dispatch->no_of_bales  }}</td>
            <td>{{ $dispatch->dispatched  }}</td>
          </tr>
          @endforeach
        </table>
        {{ $dispatched->links("pagination::bootstrap-4") }}
      </div>
    </div>
    </div>
</div>

@endsection