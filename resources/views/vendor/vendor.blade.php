@extends('layouts.app')
@section('content')
  <div class="container">
    <a class="btn btn-primary mb-3" href="{{ Route('addvendor') }}">Add Vendor</a>
    <table id="customers">
      <tr>
        <th>Name</th>
        <th>GST No</th>
        <th>Address</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td><a href="" class="btn btn-warning">Update</a></td>
      </tr>
  </table>
  </div>
@endsection