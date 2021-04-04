@extends('layouts.app')

@section('content')
<!-- @php
use Illuminate\Support\Facades\DB;
$vendors = DB::table('vendors')->get();
$vendorsCount = $vendors->count();
$materials = DB::table('materials')->get();
$materialsCount = $materials->count();
$orders = DB::table('orders')->get();
$ordersCount = $orders->count();
$transactions = DB::table('transactions')->get();
$transactionsCount = $transactions->count();
@endphp -->

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4 text-white">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-vendors dashboard-text mb-4">
                    <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Vendors</div>
                            <div>00</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="#">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-materials dashboard-text mb-4">
                    <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Materials</div>
                            <div>00</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="#">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-orders dashboard-text mb-4">
                    <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Orders</div>
                            <div>00</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="#">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card dashboard-card-transaction dashboard-text mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>Transactions</div>
                            <div>00</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small dashboard-text stretched-link" href="#">View Details</a>
                            <div class="small dashboard-text"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
                        </div>
        </div>
    </main>
    @endsection