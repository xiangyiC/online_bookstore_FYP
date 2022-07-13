<head>
    <link href="{{ url('css/admin_order_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".order").toggleClass("sidebar-dropdown-link-active-book");
    $(".sidebar-link").click(function(){
        $(".order").removeClass("sidebar-dropdown-link-active-book");
    });
</script>
<div class="container-fluid order-list table-responsive">
    <h4 class="order-list-title">Order List</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Order ID</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
            $i = 1;
        ?>
        <tbody>
         
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>999999991</td>
                <td>RM79.00</td>
                <td>Done</td>
                <td>08/07/22</td>
                <td>Pending</td>
                <td><button type="button" class="btn btn-info">Delete</button><a href="{{route('admin_order_details')}}"><button type="button" class="btn btn-dark">View</button></a></td>
                <?php
                    $i++;
                ?>
            </tr>
            
        </tbody>
    </table>
</div>
@endsection