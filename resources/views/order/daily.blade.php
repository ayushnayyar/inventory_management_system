@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <div class="">
        <h4 class="heading-color"> Daily Stocks</h4>
        <form action="{{ Route('order.updateDaily', [$order->id])  }}" method="POST">
            @csrf
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Beam Machine</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="beam_machine" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Beam Floor</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="beam_floor" value="">
                </div>
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Weft</label>
                    <input type="text" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="weft" value="">
                </div>
            </div>
            <div class="row ml-4 mr-4">
                <div class="form-group col-4">
                    <label class='mt-3 label-color' for="name">Fabric Stock</label>
                    <input type="number" class="form-control input-bg-color" id="exampleInputEmail1" placeholder="Kg" name="fabric_stock" value="">
                </div>
            </div>
            <input type="submit" class="btn submit-button-color mt-3 ml-4" name="submit">
        </form>
        <br />
        
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
                <table id="report" class='search-table table table-dark table-hover table-responsive-sm'>
                    <tr>
                        <th>Date</th>
                        <th>Opening Stock</th>
                        <th>Cone Stock</th>
                        <th>Beam Machine</th>
                        <th>Beam Floor</th>
                        <th>Weft</th>
                        <th>Fabric Stock</th>
                    </tr>
                    @foreach($dailies as $daily)
                    <tr class='table-active'>
                        <td>{{ $daily->created_at  }}</td>
                        <td>{{ $daily->opening_stock  }}</td>
                        <td>{{ $daily->cone_stock  }}</td>
                        <td>{{ $daily->beam_machine  }}</td>
                        <td>{{ $daily->beam_floor  }}</td>
                        <td>{{ $daily->weft  }}</td>
                        <td>{{ $daily->fabric_stock  }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <button onclick="exportTableToCSV('daily.csv')" class="btn btn-primary ml-4 mb-2">Export</button>
    </div>
</div>

@endsection