<head>
    <link href="{{ url('css/admin_add_book.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<div class="container-fluid edit-profile">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 edit-profile-content">
            <form action="{{route('add_book_category')}}" method="POST" name="edit-profile_form">
                @CSRF
                <h4 class="edit-profile-title">Edit Profile</h4>
                <div class="edit-profile-row">
                    <label for="book_category" class="book-category-add-content-title">Book Category</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book_category" name="book_category" placeholder="Eg: fiction">
                </div>
                
                <div class="book-category-add-form-row">
                    <label for="book_category_type" class="book-category-add-content-title">Book Category Type</label>
                    <input type="text" class="book-category-add-content-inputbox" id="book_category_type" name="book_category_type" placeholder="Eg: fantasy">
                </div>
                <div class="book-category-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection