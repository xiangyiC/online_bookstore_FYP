<head>
    <link href="{{ url('css/admin_order_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('landing_layout')
@section('customer_content')
<script>

    function status(s){
        var v= s.value;
        if(v=="all"){
            var $rows = $('#myTable tr');
            $rows.show();

        }else{
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(v) > -1)
            });
        }

    }

</script>
<div class="container-fluid order-list table-responsive mt-5">
    <div class="row justify-content-between top mx-0">
        <div class="col-md-4">
            <h5 class="order-list-title">Order List</h5>
        </div>
        <div class="col-md-3">
            <select class="form-select" aria-label="Default select example" id="status" onchange="status(this)">
                <option value="all" selected>All</option>
                <option value="pending">Pending</option>
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
                    @foreach($orders as $order)
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>{{$order->id}}</td>
                        <td>RM{{number_format($order->order_amount, 2)}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->order_status}}</td>
                        <td><a href="{{route('order_details',['id'=>$order->id])}}"><button type="button" class="btn btn-dark view">View</button></a></td>
                        <?php
                            $i++;
                        ?>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection