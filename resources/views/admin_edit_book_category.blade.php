<head>
    <link href="{{ url('css/admin_add_book_category.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
 
</script>

<div class="container-fluid book-category-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 book-category-add-content-img">
            <img class="img-fluid book-category-add-img" src="{{asset('images/add_category_wallpaper.jpg')}}" alt="bookstore-wallpaper">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 book-category-add-content">
            <form action="{{route('admin_update_book_category')}}" method="POST" name="book_category_add_form">
                @CSRF
                <h4 class="book-category-add-title">Edit Book Category</h4>
                @foreach($categories as $category)
                <div class="book-category-add-form-row">
                    <label for="book_category" class="book-category-add-content-title">Book Category</label>
                    <input type="hidden" name="category_ID" id="category_ID" value="{{$category->category_ID}}">
                    <input type="text" class="book-category-add-content-inputbox" id="book_category" name="book_category" value="{{$category->category_name}}">
                </div>
                
                <div class="book-category-add-form-row">
                    <label for="book_category_type" class="book-category-add-content-title">Book Category Type</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book_category_type" name="book_category_type" value="{{$category->category_type}}">
                </div>
                @endforeach
                <div class="book-category-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection