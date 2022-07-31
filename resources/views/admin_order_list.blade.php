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

    function status(s){
        var v= s.value;
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(v) > -1)
        });

    }

</script>
<div class="container-fluid order-list table-responsive mt-5">
    <div class="row justify-content-between top mx-0">
        <div class="col-md-4">
            <h5 class="order-list-title">Order List</h5>
        </div>
        <div class="col-md-3">
            <select class="form-select" aria-label="Default select example" id="status" onchange="status(this)">
                <option value="pending" selected>Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
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
                <tbody id="myTable">
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>999999991</td>
                        <td>RM79.00</td>
                        <td>Done</td>
                        <td>08/07/22</td>
                        <td>Pending</td>
                        <td><button type="button" class="btn btn-info delete">Delete</button><a href="{{route('admin_order_details')}}"><button type="button" class="btn btn-dark view">View</button></a></td>
                        <?php
                            $i++;
                        ?>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection