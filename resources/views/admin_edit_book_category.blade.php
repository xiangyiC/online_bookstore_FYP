<head>
    <link href="{{ url('css/admin_add_book_category.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
     $(function() {
       $("select").each(function (index, element) {
                const val = $(this).data('value');
                if(val !== '') {
                    $(this).val(val);
                }
        });
    })
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
                <div class="book-add-form-row selectbox mb-2">
                    <label for="book_category" class="book-category-add-content-title">Book Category &nbsp;</label>
                    <input type="hidden" name="category_ID" id="category_ID" value="{{$category->category_ID}}">
                    <select name="book_category" id="book_category" class="" data-value="{{ $category ? $category->category_name : old('book_category') }}" required >
                        <option value="fiction">Fiction</option>
                        <option value="nonfiction">Non-Fiction</option>
                        <option value="children">Children</option>
                    </select>
                </div>
                
                <div class="book-category-add-form-row">
                    <label for="book_category_type" class="book-category-add-content-title">Book Category Type</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book_category_type" name="book_category_type" value="{{$category->category_type}}" required>
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