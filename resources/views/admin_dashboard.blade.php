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
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-2 col-sm-3 sales-information-content">
            <p class="sales-information-content-title">Order</p>
            <p class="sales-information-content-number">100</p>
            <p class="sales-information-content-subtitle">This Month</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 sales-information-content">
            <p class="sales-information-content-title">Total Order</p>
            <p class="sales-information-content-number">100</p>
            <p class="sales-information-content-subtitle">Until <?php echo date('Y-m-d');?></p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 sales-information-content">
            <p class="sales-information-content-title">Revenue</p>
            <p class="sales-information-content-number">RM100</p>
            <p class="sales-information-content-subtitle">This Month</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 sales-information-content">
            <p class="sales-information-content-title">Total Revenue</p>
            <p class="sales-information-content-number">RM100</p>
            <p class="sales-information-content-subtitle">Until <?php echo date('Y-m-d');?></p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mx-3">
        <div class="col-md-6 my-4">
            <div class="card">
              <div>
                <canvas id="line-chart"></canvas>
              </div>
            </div>
        </div>
        <div class="col-md-6 my-4">
            <div class="card">
              <div>
                <canvas id="line-chart-sales"></canvas>
              </div>
            </div>
        </div>
    </div>
</div>
<br>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<script>
  var datas=<?php echo json_encode($datas)?>;

  new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ["JAN","FEB","MAC","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"],
    datasets: [{ 
        //data: [86,114,106,106,107,111,133,221,783,2478],
        data: datas,
        label: "Order",
        borderColor: "#3eb489",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Total Order (in months)'
    }
  }
});
</script>


<script>
  var totals=<?php echo json_encode($totals)?>;

  new Chart(document.getElementById("line-chart-sales"), {
  type: 'line',
  data: {
    labels: ["JAN","FEB","MAC","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"],
    datasets: [{ 
        //data: [86,114,106,106,107,111,133,221,783,2478],
        data: totals,
        label: "Sales",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Total Sales (in months)'
    }
  }
});
</script>


@endsection