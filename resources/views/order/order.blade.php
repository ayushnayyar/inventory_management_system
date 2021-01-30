@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary mb-3" href="{{ Route('addorder') }}">Add Order</a>
<table id="customers">
      <tr>
        <th>Item ID</th>
        <th>Vendor ID</th>
        <th>Party name</th>
        <th>Item type</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany item</td>
        <td>Germany jsjf</td>

        <td><a href="" class="btn btn-warning">Update</a></td>
        <td><a href="" class="btn btn-success">View</a></td>
        <td><a href="" class="btn btn-danger">Delete</a></td>
      </tr>
  </table>
</div>
@endsection