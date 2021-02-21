@extends('layouts.app')
@section('content')
<div class="container">
<h1>Transaction</h1>
<table id="customers" class='table table-dark table-hover table-responsive-sm'>
      <tr>
        <th>Item ID</th>
        <th>Vendor ID</th>
        <th>Initial Stock</th>
        <th>Current Stock</th>
        <th>Beam</th>
        <th>Dispatch</th>
      </tr>
      <tr class='table-activer'>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany item</td>
        <td>Germany jsjf</td>
        <td>Germany sdffgssfg</td>
        <td>Germany dd</td>
        <td><a href="" class="btn btn-warning">Update</a></td>
      </tr>
  </table>
</div>
@endsection