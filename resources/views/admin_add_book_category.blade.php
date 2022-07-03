<head>
    <link href="{{ url('css/admin_add_book_category.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-new-book-category").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-new-book-category").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid book-category-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 book-category-add-content-img">
            <img class="img-fluid book-category-add-img" src="{{asset('images/add_category_wallpaper.jpg')}}" alt="bookstore-wallpaper">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 book-category-add-content">
            <form action="" method="POST" name="book-category-add-form">
                @CSRF
                <h4 class="book-category-add-title">New Book Category</h4>
                <div class="book-category-add-form-row">
                    <label for="book-category" class="book-category-add-content-title">Book Category</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book-category" name="book-category" placeholder="Eg: Fiction">
                </div>
                
                <div class="book-category-add-form-row">
                    <label for="book-category-type" class="book-category-add-content-title">Book Category Type</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book-category-type" name="book-category-type" placeholder="Eg: Fantasy">
                </div>
                <div class="book-category-add-button">
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection