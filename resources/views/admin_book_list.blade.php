<head>
    <link href="{{ url('css/admin_book_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-book-list").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-book-list").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid category-list table-responsive">
    <h4 class="category-list-title">Book List</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">ISBN</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Pages</th>
                <th scope="col">Format</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>The little Prince</td>
                <td>9780141185620</td>
                <td>RM39.90</td>
                <td>612</td>
                <td>De Saint-Exupery, Antoine</td>
                <td>Penguin Books</td>
                <td>300</td>
                <td>Paperback</td>
                <td>The little Prince</td>
                <td>The little Prince</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td><button><i class="bi bi-pencil-square"></button></i><button><i class="bi bi-x-square"></i></button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Fiction</td>
                <td>Horror</td>
                <td><button><i class="bi bi-pencil-square"></button></i>&ensp;<button><i class="bi bi-x-square"></i></button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Fiction</td>
                <td>Horror</td>
                <td><button><i class="bi bi-pencil-square"></button></i>&ensp;<button><i class="bi bi-x-square"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection