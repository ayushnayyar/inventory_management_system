@extends('layouts.app')
@section('content')
<script>
console.log('hello')
function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}

</script>

<div class='ml-5 mr-5 mb-3 mt-3' id="layoutSidenav_content">
  <div class="m-2">
      <table id="report" class='table table-dark table-hover table-responsive-sm'>
        <tr>
        <th>SR</th>
          <th>Invoice No</th>
         
          <th>Item returned</th>
          <th>Recieved Stock</th>
          <th>Dispatched</th>
          <th>Invoice Date</th>
          <th style="display: none;">Invoice Time</th>
        </tr>
        <?php $count = 1 ?>
        @foreach ($orders as $order)
        <tr class='table-active'>
          <td>{{ $count }}</td>
          <td>{{ $order->invoice_no }}</td>
          
          <td>{{ $order->item_name }}</td>
          <td>{{ $order->recieved_stock }}</td>
          <td>{{$order->dispatched}}</td>
          <?php $count = $count+1  ?>
          <td class="timestamp">{{ $order->created_at }}</td>
        @endforeach
        </tr>
      </table>
      <br/>
      <div class="m-2">
        <table id="report" class='table table-dark table-hover table-responsive-sm'>
        <h4>Total</h4>
        <tr>
          <th>Recieved</th>
          <th>Dispatched</th>
          <th>Returned</th>
          <th>In Stock</th>
          <th>short</th>
          <th>Beam Machine</th>
          <th>Beam Floor</th>
          <th>Fabric Stock</th>
          <th>Balance</th>
        </tr>
        <tr class='table-active'>
          <td>{{ $recieved }}</td>
          <td>{{ $dispatched }}</td>
          <td>{{ $yarnReturned }}</td>
          <td>{{ $currentStock }}</td>
          <td> {{ $short }}</td>
          <td>{{ $beamMachine }}</td>
          <td>{{ $beamFloor }}</td>
          <td>{{ $fabricStock }}</td>
          <td> {{ $recieved-($yarnReturned+$currentStock+$short+$dispatched+$beamFloor+$beamMachine+$fabricStock)  }} </td>
        </tr>
        </table>
      </div>
      <button onclick="exportTableToCSV('orders.csv')" class="btn btn-primary">Export</button>
    </div>
</div>

@endsection