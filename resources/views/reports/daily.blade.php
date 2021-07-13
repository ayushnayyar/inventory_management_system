@extends('layouts.app')
@section('content')
<div class='ml-5 mr-5 mb-3 mt-3' id="layoutSidenav_content">
    <div class="m-2">
        <table id="report" class='table table-dark table-hover table-responsive-sm'>
            <tr>
                <th>SR</th>
                <th>Date </th>
                <th>Opening Stock</th>
                <th>Cone Stock</th>
                <th>Beam Machine</th>
                <th>Beam Floor</th>
                <th> Weft</th>
                <th>Fabric Stock</th>
            </tr>
            <?php $count = 1 ?>
            @foreach ($dailies as $daily)
            <tr class='table-active'>
                <td> {{ $count }} </td>
                <td class="timestamp">{{ $daily->created_at }}</td>
                <td>{{ $daily->opening_Stock }}</td>
                <td>{{ $daily->cone_stock }}</td>
                <td>{{ $daily->beam_machine }}</td>
                <td>{{ $daily->beam_floor}}</td>
                <td>{{ $daily->weft }}</td>
                <td>{{ $daily->fabric_stock }}</td>
                <?php $count = $count + 1  ?>
                @endforeach
            </tr>
        </table>
        <br />
        <button onclick="exportTableToCSV('daily.csv')" class="btn btn-primary">Export</button>
    </div>
</div>

@endsection