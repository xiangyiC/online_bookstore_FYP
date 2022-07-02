<head>
    <link href="{{ url('css/admin_add_stationery.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<div class="container-fluid stationery-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <form action="" method="POST" name="stationery-add-form">
                @CSRF
                <div class="stationery-add-title">
                    <h4>New Stationery</h4>
                </div>
                <div class="stationery-add-form-row">
                    <label for="stationery-title" class="stationery-add-content-title">Stationery Name</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationery-title" name="stationery-title" placeholder="Eg: Faber-Castell Wax Crayon 24 Colour Clamshell">
                </div>
                
                <div class="stationery-add-form-row">
                    <label for="stationery-ISBN" class="stationery-add-content-title">ISBN</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationery-ISBN" name="stationery-ISBN" placeholder="Eg: 122426">
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery-price" class="stationery-add-content-title">Price</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationery-price" name="stationery-price" placeholder="Eg: 8.50" min=0>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery-quantity" class="stationery-add-content-title">Quantity</label>
                    <input type="number" class="stationery-add-content-inputbox" id="stationery-quantity" name="stationery-quantity" placeholder="Eg: 25" min=0>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery-publisher" class="stationery-add-content-title">Publisher</label>
                    <input type="text" class="stationery-add-content-inputbox" id="stationery-publisher" name="stationery-publisher" placeholder="Eg: Faber-Castell">
                </div>

                <div class="stationery-add-form-row selectbox">
                    <label for="stationery-category-ID" class="stationery-add-content-title">Category</label>
                    <select name="stationery-category-ID" id="stationery-category-ID" class="">
                        <option>1</option>
                    </select>
                </div>

                <div class="stationery-add-form-row">
                    <label for="stationery-image" class="stationery-add-content-title">Image</label>
                    <input type="file" class="stationery-add-content-inputbox stationery-image" id="stationery-image" name="stationery-image" multiple accept="image/*">
                </div>

                <div class="stationery-add-form-row-textarea">
                    <label for="stationery-description" class="stationery-add-content-title">Description</label>
                    <textarea id="stationery-description" name="stationery-description" rows="4"></textarea>
                </div>

                <div class="stationery-add-button">
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection