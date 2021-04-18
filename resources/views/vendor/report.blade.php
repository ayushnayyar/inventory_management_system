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

<div id="layoutSidenav_content">
  <div class="m-2">
      <table id="report" class='table table-dark table-hover table-responsive-sm'>
        <tr>
          <th>Invoide No</th>
          <th>Invoide Date</th>
          <th>Vendor Name</th>
          <th>Item returned</th>
          <th>Recieved Stock</th>
          <th>Short</th>
          <th>Current Stock</th>
          <th>Dispatched</th>
        </tr>
        @foreach ($orders as $order)
        <tr class='table-active'>
          <td>{{ $order->invoice_no }}</td>
          <td>{{ $order->created_at }}</td>
          <td>{{$order->party_name}}</td>
          <td>{{ $order->item_name }}</td>
          <td>{{ $order->recieved_stock }}</td>
          <td>{{ $order->short_stock }}</td>
          <td>{{$order->current_stock}}</td>
          <td>{{$order->dispatched}}</td>
        @endforeach
        </tr>
        <tr>
          <td>Total Yarn In Stock:{{ $totalInStock }}</td>
          <td>Total Yarn Returned:{{ $totalYarnReturned }}</td>
        </tr>
      </table>
      <button onclick="exportTableToCSV('orders.csv')" class="btn btn-success">Export</button>
    </div>
</div>

@endsection