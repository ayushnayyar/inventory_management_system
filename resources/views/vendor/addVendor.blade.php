@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="" class="post">
        <label for="name">party name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="party_name">
        <label for="name">GST No</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter number" name="gst_no">
        <label for="name">Party Address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter address" name="party_address">
        <input type="submit" class="btn btn-primary mt-3" name="submit">
        </form>
    </div>
@endsection