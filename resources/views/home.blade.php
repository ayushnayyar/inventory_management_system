@extends('layouts.app')

@section('content')
<div class="container">
    <div class='heading'>
        <h1 class='ml-3'>Dashboard</h1>
    </div>

        <div class='row'>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Vendor Details</h5>
                    <p class="card-text">Registered Vendors: 12</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="#" class="btn btn-primary">View Vendors</a></div>
            </div>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Material Details</h5>
                    <p class="card-text">Available Materials: 15</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="#" class="btn btn-primary">View Materials</a></div>
            </div>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Order Details</h5>
                    <p class="card-text">Orders yet to be fulfilled: 2</p>
                    <p class="card-text">Orders completed: 20</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="#" class="btn btn-primary">View Orders</a></div>
            </div>
            <div class="card border-primary ml-3 mr-3 mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Transactions</h5>
                    <p class="card-text">Transactions today: 3</p>
                </div>
                <div class='card-footer border-primary bg-transparent'>
                <a href="#" class="btn btn-primary">View Transaction Log</a></div>
            </div>
        </div>
</div>
@endsection
