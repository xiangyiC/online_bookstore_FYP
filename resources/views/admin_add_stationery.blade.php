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
        <form action="" method="POST" name="stationery_add_form">
                @CSRF
                <div class="stationery-add-title">
                    <h4>New Stationery</h4>
                </div>
                <div class="stationery-add-form-row">
                    <label for="stationery_title" class="stationery-add-content-title">Stationery Name</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationery_title" name="stationery_title" placeholder="Eg: Faber-Castell Wax Crayon 24 Colour Clamshell">
                </div>
                
                <div class="stationery-add-form-row">
                    <label for="stationery_ISBN" class="stationery-add-content-title">ISBN</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationery_ISBN" name="stationery_ISBN" placeholder="Eg: 122426">
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery_price" class="stationery-add-content-title">Price</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationery_price" name="stationery_price" placeholder="Eg: 8.50" min=0>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery_quantity" class="stationery-add-content-title">Quantity</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationery_quantity" name="stationery_quantity" placeholder="Eg: 25" min=0>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery_publisher" class="stationery-add-content-title">Publisher</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationery_publisher" name="stationery_publisher" placeholder="Eg: Faber-Castell">
                </div>

                <div class="stationery-add-form-row selectbox">
                    <label for="stationery_category_ID" class="stationery-add-content-title">Category</label>
                    <select name="stationery_category_ID" id="stationery_category_ID" class="">
                        <option>1</option>
                    </select>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery_image" class="stationery-add-content-title">Image</label>
                    <input type="file" class="stationery-add-content-inputbox stationery-image" id="stationery_image" name="stationery_image" multiple accept="image/*">
                </div>

                <div class="stationery-add-form-row-textarea">
                    <label for="stationery_description" class="stationery-add-content-title">Description</label>
                    <textarea id="stationery_description" name="stationery_description" rows="4"></textarea>
                </div>

                <div class="stationery-add-button">
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection