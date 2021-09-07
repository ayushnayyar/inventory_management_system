@extends('layouts.app')

@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-3 mb-2 text-center text-white">Vatan Textiles</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item justify-content-center active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-vendors dashboard-text mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Vendors</div>
                            <div> {{ DB::table('vendors')->get()->count() }}</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="{{ Route('vendor') }}">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-materials dashboard-text mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Materials</div>
                            <div>{{ DB::table('materials')->get()->count() }}</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="{{ Route('material') }}">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-orders dashboard-text mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Orders</div>
                            <div>{{ DB::table('orders')->get()->count() }}</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="{{ Route('order') }}">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-transaction dashboard-text mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Mrns</div>
                            <div>{{ DB::table('mrns')->get()->count() }}</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="{{ Route('mrn') }}">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- charts and bar graph -->
            <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart 
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart 
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
            @if (!Auth::guest())
            <div class="card mb-4" style="border: none;">
                <div class="d-flex justify-content-between bg-dark">
                    <div>
                        <div class="card-header text-white bg-dark">
                            <i class="fas fa-table mr-1"></i>
                            Table
                        </div>
                    </div>
                    <div>
                        <div class="input-group rounded p-2">
                            <input type="search" class="form-control rounded mr-1 input-bg-color" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <span class="ml-2 input-group-text border-0 search-box-icon" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-dark">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover table-responsive-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>MRN No</th>
                                    <th>Item</th>
                                    <th>Item</th>
                                    <th>Invoice No</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($mrns as $mrn)
                                <tr>
                                    <td>{{ $mrn->created_at }}</td>
                                    <td>{{ $mrn->mrn_no }}</td>
                                    <td>{{ $mrn->item_name }}</td>
                                    <td>{{ $mrn->vendor_name }}</td>
                                    <td>{{ $mrn->invoice_no }}</td>
                                    <td>{{ $mrn->quantity }}</td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </main>
    @endsection