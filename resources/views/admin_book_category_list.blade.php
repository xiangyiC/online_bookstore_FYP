<head>
    <link href="{{ url('css/admin_category_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-book-category-list").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-book-category-list").removeClass("sidebar-dropdown-sublink-active");
    });

    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<div class="container-fluid category-list mt-5">
    <div class="row justify-content-between top mx-0">
        <div class="col-md-4">
            <h5 class="category-list-title">Book Category List</h4>
        </div>
        <div class="col-md-4">
            <div class="input-group rounded searchbox">
                <input type="search" class="form-control rounded" id="myInput" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="bi bi-search"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="row table-responsive">
        <div class="col-md-12">
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
                <tbody id="myTable">
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>{{$category->category_ID}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->category_type}}</td>
                        <td><a href="{{ route('admin_edit_book_category',['category_ID'=>$category->category_ID])}}"><button><i class="bi bi-pencil-square"></i></button></a>&ensp;<a href="{{ route('admin_delete_book_category',['category_ID'=>$category->category_ID])}}" onClick="return confirm('Are you confirm to delete?')"><button><i class="bi bi-x-square"></i></button></a></td>
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

@endsection