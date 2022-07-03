<head>
    <link href="{{ url('css/admin_add_book.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
    $(".droplink-new-book").toggleClass("sidebar-dropdown-sublink-active");
    $(".sidebar-link").click(function(){
        $(".droplink-new-book").removeClass("sidebar-dropdown-sublink-active");
    });
</script>

<div class="container-fluid book-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <form action="" method="POST" name="book-add-form">
                @CSRF
                <div class="book-add-title">
                    <h4>New Book</h4>
                </div>
                <div class="book-add-form-row">
                    <label for="book-title" class="book-add-content-title">Book Title</label>
                    <input type="text" class="book-add-content-inputbox" id="book-title" name="book-title" placeholder="Eg: The Little Prince">
                </div>
                
                <div class="book-add-form-row">
                    <label for="book-ISBN" class="book-add-content-title">ISBN</label>
                    <input type="text" class="book-add-content-inputbox" id="book-ISBN" name="book-ISBN" placeholder="Eg: 9780141185620">
                </div>

                <div class="book-add-form-row">
                    <label for="book-price" class="book-add-content-title">Price</label>
                    <input type="number" class="book-add-content-inputbox" id="book-price" name="book-price" placeholder="Eg: 39.00" min=0>
                </div>

                <div class="book-add-form-row">
                    <label for="book-quantity" class="book-add-content-title">Quantity</label>
                    <input type="number" class="book-add-content-inputbox" id="book-quantity" name="book-quantity" placeholder="Eg: 25" min=0>
                </div>

                <div class="book-add-form-row">
                    <label for="book-author" class="book-add-content-title">Author</label>
                    <input type="text" class="book-add-content-inputbox" id="book-author" name="book-author" placeholder="Eg: De Saint-Exupery, Antoine">
                </div>

                <div class="book-add-form-row">
                    <label for="book-publisher" class="book-add-content-title">Publisher</label>
                    <input type="text" class="book-add-content-inputbox" id="book-publisher" name="book-publisher" placeholder="Eg: Penguin Books">
                </div>

                <div class="book-add-form-row">
                    <label for="book-pages" class="book-add-content-title">Pages</label>
                    <input type="number" class="book-add-content-inputbox" id="book-pages" name="book-pages" placeholder="Eg: 300" min=1>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="book-format" class="book-add-content-title">Format</label>
                    <select name="book-format" id="book-format" class="book-format">
                        <option>Paperback</option>
                        <option>Hardcover</option>
                        <option>Boxset</option>
                    </select>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="category-ID" class="book-add-content-title">Category</label>
                    <select name="category-ID" id="category-ID" class="">
                        <option>1</option>
                    </select>
                </div>

                <div class="book-add-form-row">
                    <label for="book-image" class="book-add-content-title">Image</label>
                    <input type="file" class="book-add-content-inputbox book-image" id="book-image" name="book-image" placeholder="Eg: Fiction" multiple accept="image/*">
                </div>

                <div class="book-add-form-row-textarea">
                    <label for="book-description" class="book-add-content-title">Description</label>
                    <textarea id="book-description" name="book-description" rows="4"></textarea>
                </div>

                <div class="book-add-button">
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection