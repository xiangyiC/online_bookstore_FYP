<head>
    <link href="{{ url('css/admin_category_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-stationery-category-list").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-stationery-category-list").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid category-list table-responsive">
    <h4 class="category-list-title">Stationery Category List</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
            $i = 1;
        ?>
        <tbody>
            @foreach($categories as $category)
            <tr>
                
                <th scope="row"><?= $i ?></th>
                <td>{{$category->category_ID}}</td>
                <td>{{$category->category_name}}</td>
                <td>{{$category->category_type}}</td>
                <td><a href="{{ route('admin_edit_stationery_category',['category_ID'=>$category->category_ID])}}"><button><i class="bi bi-pencil-square"></i></button></a>&ensp;<a href="{{ route('admin_delete_stationery_category',['category_ID'=>$category->category_ID])}}" onClick="return confirm('Are you confirm to delete?')"><button><i class="bi bi-x-square"></i></button></a></td>
                <?php
                    $i++;
                ?>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection