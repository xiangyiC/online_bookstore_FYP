<head>
    <link href="{{ url('css/admin_book_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-stationery-list").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-stationery-list").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid category-list table-responsive">
    <h4 class="category-list-title">Stationery List</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Publisher</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
            $i = 1;
        ?>
        <tbody>
            @foreach($stationeries as $stationery)
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>{{$stationery->stationery_ISBN}}</td>
                <td>{{$stationery->stationery_title}}</td>
                <td>{{$stationery->stationery_price}}</td>
                <td>{{$stationery->stationery_quantity}}</td>
                <td><img src="{{asset('images/')}}/{{$stationery->stationery_image}}" width="80" class="img-fluid"></td>
                <td>{{$stationery->stationery_publisher}}</td>
                <td>{{$stationery->stationery_description}}</td>
                <td>{{$stationery->categoryName}}-{{$stationery->categoryType}}</td>
                <td><a href="{{ route('admin_edit_stationery',['stationery_ISBN'=>$stationery->stationery_ISBN])}}"><button><i class="bi bi-pencil-square"></button></a></i><a href="{{ route('admin_delete_stationery',['stationery_ISBN'=>$stationery->stationery_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button><i class="bi bi-x-square"></i></button></a></td>
                <?php
                    $i++;
                ?>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection