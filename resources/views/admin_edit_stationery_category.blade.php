<head>
    <link href="{{ url('css/admin_add_stationery_category.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    
</script>

<div class="container-fluid stationery-category-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 stationery-category-add-content-img">
            <img class="img-fluid stationery-category-add-img" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 stationery-category-add-content">
            <form action="{{route('admin_update_stationery_category')}}" method="POST" name="stationery_category_add_form">
                @CSRF
                <h4 class="stationery-category-add-title">New Stationery Category</h4>
                @foreach($categories as $category)
                <div class="stationery-category-add-form-row">
                    <label for="stationery_category" class="stationery-category-add-content-title">Book Category</label>
                    <input type="hidden" name="category_ID" id="category_ID" value="{{$category->category_ID}}">
                    <input type="text" class="stationery-category-add-content-inputbox" id="stationery_category" name="stationery_category" value="{{$category->category_name}}">
                </div>
                
                <div class="stationery-category-add-form-row">
                    <label for="stationery_category_type" class="stationery-category-add-content-title">Book Category Type</label>
                    <input type="text" class="stationery-category-add-content-inputbox" id="stationery_category_type" name="stationery_category_type" value="{{$category->category_type}}">
                </div>
                @endforeach
                <div class="stationery-category-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection