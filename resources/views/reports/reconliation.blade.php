@extends('layouts.app')
@section('content')
<div class='ml-5 mr-5 mb-3 mt-3' id="layoutSidenav_content">
    <div class="m-2">
        <table id="report" class='table table-dark table-hover table-responsive-sm'>
            <tr>
                <th>Yarn inward</th>
                <th>Yarn Stock</th>
                <th>Dispatch</th>
                <th>Beam Floor</th>
                <th>Beam Machine</th>
                <th>Fabric Stock</th>
            </tr>
            <?php $count = 1 ?>
            <tr class='table-active'>
                <td>{{ $receives[0]->received_stock }}</td>
                <td>{{ $receives[0]->actual_stock }}</td>
                <td>{{ $dispatched[0]->dispatched }}</td>
                <td>{{ $dailies[0]->beam_floor }}</td>
                <td>{{ $dailies[0]->beam_machine }}</td>
                <td>{{ $dailies[0]->fabric_stock }}</td>
            </tr>
        </table>
        <br />
        <button onclick="exportTableToCSV('reconciliation.csv')" class="btn btn-primary">Export</button>
    </div>
</div>


@endsection