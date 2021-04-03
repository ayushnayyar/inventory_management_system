@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">
<div style="margin-left: 40%;">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a type="button" href="{{ Route('mrn.others') }}" class="btn btn-info border border-dark">Others</a>
        <a type="button" href="{{ Route('mrn.yarn') }}" color='white' class="btn btn-info border border-dark">Yarn</a>
 
    </div>


@endsection