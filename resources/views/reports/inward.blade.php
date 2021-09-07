@extends('layouts.app')
@section('content')
<div class='ml-5 mr-5 mb-3 mt-3' id="layoutSidenav_content">
    <div class="m-2">
        <table id="report" class='table table-dark table-hover table-responsive-sm'>
            <tr>
                <th>SR</th>
                <th>Received Date</th>
                <th>MRN</th>
                <th>Actual Received From</th>
                <th>Count</th>
                <th>Shade</th>
                <th>Received Stock</th>
                <th>Actual Stock</th>
                <th>No of Boxes</th>
            </tr>
            <?php $count = 1 ?>
            @foreach ($receives as $receive)
            <tr class='table-active'>
                <td> {{ $count }} </td>
                <td>{{ $receive->created_at }}</td>
                <td>{{ $receive->mrn_no }}</td>
                <td>{{ $receive->actual_recieved_from }}</td>
                <td>{{ $receive->type }}</td>
                <td>{{ $receive->shade }}</td>
                <td>{{ $receive->recieved_stock }}</td>
                <td>{{ $receive->actual_stock }}</td>
                <td>{{ $receive->no_of_boxes }}</td>
                <?php $count = $count + 1  ?>
                @endforeach
            </tr>
        </table>
        <br />
        <button onclick="exportTableToCSV('inward.csv')" class="btn btn-primary">Export</button>
    </div>
</div>

@endsection