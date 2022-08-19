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
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12 book-category-add-content-img" style="text-align:center">
            <img class="img-fluid book-category-add-img" src="{{asset('images/add_category_wallpaper.jpg')}}" alt="bookstore-wallpaper">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 book-category-add-content">
            <form action="{{route('add_book_category')}}" method="POST" name="book_category_add_form">
                @CSRF
                <h4 class="book-category-add-title">New Book Category</h4>
                
                <div class="book-add-form-row selectbox mb-2">
                    <label for="book_category" class="book-category-add-content-title">Book Category &nbsp;</label>
                    <select name="book_category" id="book_category" class="" required>
                        <option value="fiction">Fiction</option>
                        <option value="nonfiction">Non-Fiction</option>
                        <option value="children">Children</option>
                    </select>
                </div>
                
                <div class="book-category-add-form-row">
                    <label for="book_category_type" class="book-category-add-content-title">Book Category Type</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book_category_type" name="book_category_type" placeholder="Eg: fantasy/horror/lifestyle" required>
                </div>
                <div class="book-category-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection