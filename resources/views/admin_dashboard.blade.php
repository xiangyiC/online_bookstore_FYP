<head>
    <link href="{{ url('css/admin_dashboard.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".dashboard").toggleClass("sidebar-dropdown-link-active-book");
    $(".sidebar-link").click(function(){
        $(".dashboard").removeClass("sidebar-dropdown-link-active-book");
    });
</script>

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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div>
                <canvas id="doughnut-chart"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <canvas id="line-chart"></canvas>
            </div>
        </div>
    </div>
</div>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<script>
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Book", "Stationery"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2"],
          data: [2478,5267]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Total Sales'
      }
    }
});
</script>
<script>
  new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ["JAN","FEB","MAC","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});
</script>

@endsection