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

    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<div class="container-fluid category-list table-responsive mt-5">
    <div class="row justify-content-between top mx-0">
        <div class="col-md-4">
            <h5 class="category-list-title">Stationery List</h4>
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
                <tbody id="myTable">
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
    </div>
</div>

<div class="container-fluid mx-5 pagination">
    <div class="row justify-content-center">
        <div class="col-md-4">
            {{$stationeries->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>
@endsection