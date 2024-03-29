<head>
    <link href="{{ url('css/admin_add_stationery_category.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-new-stationery-category").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-new-stationery-category").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid stationery-category-add">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12 stationery-category-add-content-img">
            <img class="img-fluid stationery-category-add-img" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 stationery-category-add-content">
            <form action="{{route('add_stationery_category')}}" method="POST" name="stationery_category_add_form">
                @CSRF
                <h4 class="stationery-category-add-title">New Stationery Category</h4>
                
                <div class="stationery-category-add-form-row selectbox">
                    <label for="stationery_category" class="stationery-category-add-content-title">Stationery Category &nbsp;</label>
                    <select name="stationery_category" id="stationery_category" class="" required>
                        <option value="art_and_craft">Art & Craft</option>
                        <option value="office_stationery">Office Stationery</option>
                        <option value="printer_ink">Printer Ink</option>
                    </select>
                </div>
                
                <div class="stationery-category-add-form-row">
                    <label for="stationery_category_type" class="stationery-category-add-content-title">Stationery Category Type</label>
                    <input type="text" class="stationery-category-add-content-inputbox" id="stationery_category_type" name="stationery_category_type" placeholder="Eg: colour material" required>
                </div>
                <div class="stationery-category-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection