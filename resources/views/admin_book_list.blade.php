<head>
    <link href="{{ url('css/admin_book_list.css') }}" rel="stylesheet" type="text/css">
    <link href="" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-book-list").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-book-list").removeClass("sidebar-dropdown-sublink-active");
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
            <h5 class="category-list-title">Book List</h4>
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
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Image</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Language</th>
                        <th scope="col">Format</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                    $i = 1;
                ?>
                <tbody id="myTable">
                    @foreach($books as $book)
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td class="ISBN">{{$book->book_ISBN}}</td>
                        <td>{{$book->book_title}}</td>
                        <td>{{$book->book_price}}</td>
                        <td>{{$book->book_quantity}}</td>
                        <td><img src="{{asset('images/')}}/{{$book->book_image}}" width="80" class="img-fluid"></td>
                        <td>{{$book->book_author}}</td>
                        <td>{{$book->book_publisher}}</td>
                        <td>{{$book->book_pages}}</td>
                        <td>{{$book->book_language}}</td>
                        <td>{{$book->book_format}}</td>
                        <td class="description">{{$book->book_description}}</td>
                        <td>{{$book->categoryName}}-{{$book->categoryType}}</td>
                        <td><a href="{{ route('admin_edit_book',['book_ISBN'=>$book->book_ISBN])}}"><button><i class="bi bi-pencil-square"></i></button></a>&ensp;<a href="{{ route('admin_delete_book',['book_ISBN'=>$book->book_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button><i class="bi bi-x-square"></i></button></a></td>
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
            {{$books->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>

@endsection