@extends('layouts.app')

@section('content')
@php
use Illuminate\Support\Facades\DB;
$vendors = DB::table('vendors')->get();
$vendorsCount = $vendors->count();
$materials = DB::table('materials')->get();
$materialsCount = $materials->count();
$orders = DB::table('orders')->get();
$ordersCount = $orders->count();
$transactions = DB::table('transactions')->get();
$transactionsCount = $transactions->count();
@endphp

<div class="container">
    <div class='heading'>
        <h1 class='ml-3'>Dashboard</h1>
    </div>

        <div class='row'>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Vendor Details</h5>
                    <p class="card-text">Registered Vendors: {{ $vendorsCount }}</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="{{ Route('vendor') }}" class="btn btn-primary">View Vendors</a></div>
            </div>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Material Details</h5>
                    <p class="card-text">Available Materials: {{ $materialsCount }}</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="{{ Route('material') }}" class="btn btn-primary">View Materials</a></div>
            </div>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Order Details</h5>
                    <p class="card-text">Orders completed: {{ $ordersCount }}</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="{{ Route('order') }}" class="btn btn-primary">View Orders</a></div>
            </div>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Transactions</h5>
                    <p class="card-text"> All Transactions: {{ $transactionsCount }}</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="{{ Route('transaction') }}" class="btn btn-primary">View Transaction Log</a></div>
            </div>
        </div>
</div>
@endsection
