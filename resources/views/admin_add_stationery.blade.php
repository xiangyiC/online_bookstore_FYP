<head>
    <link href="{{ url('css/admin_add_stationery.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-new-stationery").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-new-stationery").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid stationery-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <form action="{{route('add_stationery')}}" method="POST" name="stationery_add_form" enctype="multipart/form-data">
                @CSRF
                <div class="stationery-add-title">
                    <h4>New Stationery</h4>
                </div>
            
                <div class="stationery-add-form-row">
                    <label for="stationeryISBN" class="stationery-add-content-title">ISBN</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationeryISBN" name="stationeryISBN" placeholder="Eg: 122426" required>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryTitle" class="stationery-add-content-title">Name</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationeryTitle" name="stationeryTitle" placeholder="Eg: Faber-Castell Wax Crayon 24 Colour Clamshell" required>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryPrice" class="stationery-add-content-title">Price</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationeryPrice" name="stationeryPrice" placeholder="Eg: 8.50" min=0 step="any" required>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryQuantity" class="stationery-add-content-title">Quantity</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationeryQuantity" name="stationeryQuantity" placeholder="Eg: 25" min=0 required>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryPublisher" class="stationery-add-content-title">Publisher</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationeryPublisher" name="stationeryPublisher" placeholder="Eg: Faber-Castell" required>
                </div>

                <div class="stationery-add-form-row selectbox">
                    <label for="stationeryCategoryID" class="stationery-add-content-title">Category</label>
                    <select name="stationeryCategoryID" id="stationeryCategoryID" class="">
                        @foreach($categories as $category)
                        <option value="{{$category->category_ID}}">{{$category->category_name}} - {{$category->category_type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationeryImage" class="stationery-add-content-title">Image</label>
                    <input type="file" class="book-add-content-inputbox stationery-image" id="stationeryImage" name="stationeryImage" accept="image/*" required>
                </div>


                <div class="stationery-add-form-row-textarea">
                    <label for="stationeryDescription" class="stationery-add-content-title">Description</label><br>
                    <textarea id="stationeryDescription" name="stationeryDescription" rows="4" required></textarea>
                </div>

                <div class="stationery-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection