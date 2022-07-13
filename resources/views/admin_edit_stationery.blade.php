<head>
    <link href="{{ url('css/admin_edit_stationery.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')

<div class="container-fluid stationery-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <form action="{{route('admin_update_stationery')}}" method="POST" name="stationery_add_form" enctype="multipart/form-data">
                @CSRF
                <div class="stationery-add-title">
                    <h4>Edit Stationery</h4>
                </div>
                @foreach($stationeries as $stationery)
                <div class="stationery-add-form-row">
                    <label for="stationeryISBN" class="stationery-add-content-title ISBN">ISBN</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationeryISBN" name="stationeryISBN" value="{{$stationery->stationery_ISBN}}" readonly>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryTitle" class="stationery-add-content-title">Name</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationeryTitle" name="stationeryTitle" value="{{$stationery->stationery_title}}">
                </div>
                

                <div class="stationery-add-form-row">
                    <label for="stationeryPrice" class="stationery-add-content-title">Price</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationeryPrice" name="stationeryPrice" value="{{$stationery->stationery_price}}" min=0 step="any">
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryQuantity" class="stationery-add-content-title">Quantity</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationeryQuantity" name="stationeryQuantity" min=0 value="{{$stationery->stationery_quantity}}">
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryPublisher" class="stationery-add-content-title">Publisher</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationeryPublisher" name="stationeryPublisher" value="{{$stationery->stationery_publisher}}">
                </div>

                <div class="stationery-add-form-row selectbox">
                    <label for="stationeryCategoryID" class="stationery-add-content-title">Category</label>
                    <select name="stationeryCategoryID" id="stationeryCategoryID" class="">
                        @foreach($category_ID as $category)
                        <option value="{{$category->category_ID}}">{{$category->category_name}} - {{$category->category_type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryImage" class="stationery-add-content-title">Image</label><br>
                    <img src="{{asset('images/')}}/{{$stationery->stationery_image}}" width="200" class="img-fluid"><br>
                    <input type="file" class="book-add-content-inputbox stationery-image" id="stationeryImage" name="stationeryImage" accept="image/*">
                </div>


                <div class="stationery-add-form-row-textarea">
                    <label for="stationeryDescription" class="stationery-add-content-title">Description</label><br>
                    <textarea id="stationeryDescription" name="stationeryDescription" rows="4">{{$stationery->stationery_description}}</textarea>
                </div>
                @endforeach
                <div class="stationery-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection