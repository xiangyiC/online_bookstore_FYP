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
                <th scope="col">Category Name</th>
                <th scope="col">Category Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Art & Craft</td>
                <td>Colour Material</td>
                <td><button><i class="bi bi-pencil-square"></button></i>&ensp;<button><i class="bi bi-x-square"></i></button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Art & Craft</td>
                <td>Colour Material</td>
                <td><button><i class="bi bi-pencil-square"></button></i>&ensp;<button><i class="bi bi-x-square"></i></button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Art & Craft</td>
                <td>Colour Material</td>
                <td><button><i class="bi bi-pencil-square"></button></i>&ensp;<button><i class="bi bi-x-square"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection