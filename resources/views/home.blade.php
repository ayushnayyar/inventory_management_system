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
            <h1 class="mt-3 mb-2 text-center text-white">Vatan Textiles</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item justify-content-center active">Dashboard</li>
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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </main>
    @endsection