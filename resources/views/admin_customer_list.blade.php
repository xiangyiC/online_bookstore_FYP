<head>
    <link href="{{ url('css/admin_order_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".customer").toggleClass("sidebar-dropdown-link-active-book");
    $(".sidebar-link").click(function(){
        $(".customer").removeClass("sidebar-dropdown-link-active-book");
    });
</script>
<div class="container-fluid order-list table-responsive">
    <h4 class="order-list-title">Customer List</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
            $i = 1;
        ?>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->created_at}}</td>
                <td><button type="button" class="btn btn-info delete">Delete</button></td>
                <?php
                    $i++;
                ?>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection