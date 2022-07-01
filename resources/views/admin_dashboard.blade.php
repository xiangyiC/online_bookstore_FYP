<head>
    <link href="{{ url('css/admin_dashboard.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<div class="container-fluid sales-information">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 sales-information-content">
            <p class="sales-information-content-title">Order</p>
            <p class="sales-information-content-number">100</p>
            <p class="sales-information-content-subtitle">This Month</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 sales-information-content">
            <p class="sales-information-content-title">Total Order</p>
            <p class="sales-information-content-number">100</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 sales-information-content">
            <p class="sales-information-content-title">Revenue</p>
            <p class="sales-information-content-number">RM100</p>
            <p class="sales-information-content-subtitle">This Month</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 sales-information-content">
            <p class="sales-information-content-title">Total Revenue</p>
            <p class="sales-information-content-number">RM100</p>
        </div>
    </div>
</div>
@endsection