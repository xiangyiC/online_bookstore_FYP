<head>
    <link href="{{ url('css/admin_add_stationery_category.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<div class="container-fluid stationery-category-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 stationery-category-add-content-img">
            <img class="img-fluid stationery-category-add-img" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 stationery-category-add-content">
            <form action="" method="POST" name="stationery-category-add-form">
                @CSRF
                <h4 class="stationery-category-add-title">New Stationery Category</h4>
                <div class="stationery-category-add-form-row">
                    <label for="stationery-category" class="stationery-category-add-content-title">Book Category</label>
                    <input type="text" class="stationery-category-add-content-inputbox" id="stationery-category" name="stationery-category" placeholder="Eg: Art & Craft">
                </div>
                
                <div class="stationery-category-add-form-row">
                    <label for="stationery-category-type" class="stationery-category-add-content-title">Book Category Type</label>
                    <input type="text" class="stationery-category-add-content-inputbox" id="stationery-category-type" name="stationery-category-type" placeholder="Eg: Colour Pencil">
                </div>
                <div class="stationery-category-add-button">
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection