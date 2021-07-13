@extends('layouts.app')
@section('content')
<div class='ml-5 mr-5 mb-3 mt-3' id="layoutSidenav_content">
    <div class="m-2">
        <table id="report" class='table table-dark table-hover table-responsive-sm'>
            <tr>
                <th>SR</th>
                <th>Dispatched Date</th>
                <th>Quality</th>
                <th>Design</th>
                <th>Length</th>
                <th>Dispatched Quantity</th>
                <th>No of Bales</th>
            </tr>
            <?php $count = 1 ?>
            @foreach ($dispatched as $dispatch)
            <tr class='table-active'>
                <td> {{ $count }} </td>
                <td class="timestamp">{{ $dispatch->created_at }}</td>
                <td>{{ $dispatch->quality }}</td>
                <td>{{ $dispatch->design }}</td>
                <td>{{ $dispatch->length }}</td>
                <td>{{ $dispatch->dispatched}}</td>
                <td>{{ $dispatch->no_of_bales }}</td>
                <?php $count = $count + 1  ?>
                @endforeach
            </tr>
        </table>
        <br />
        <button onclick="exportTableToCSV('dispatched.csv')" class="btn btn-primary">Export</button>
    </div>
</div>

@endsection