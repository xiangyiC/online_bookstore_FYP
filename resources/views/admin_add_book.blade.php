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
        <form action="" method="POST" name="book_add_form">
                @CSRF
                <div class="book-add-title">
                    <h4>New Book</h4>
                </div>
                <div class="book-add-form-row">
                    <label for="book_title" class="book-add-content-title">Book Title</label>
                    <input type="text" class="book-add-content-inputbox" id="book_title" name="book_title" placeholder="Eg: The Little Prince">
                </div>
                
                <div class="book-add-form-row">
                    <label for="book_ISBN" class="book-add-content-title">ISBN</label>
                    <input type="text" class="book-add-content-inputbox" id="book_ISBN" name="book_ISBN" placeholder="Eg: 9780141185620">
                </div>

                <div class="book-add-form-row">
                    <label for="book_price" class="book-add-content-title">Price</label>
                    <input type="number" class="book-add-content-inputbox" id="book_price" name="book_price" placeholder="Eg: 39.00" min=0>
                </div>

                <div class="book-add-form-row">
                    <label for="book_quantity" class="book-add-content-title">Quantity</label>
                    <input type="number" class="book-add-content-inputbox" id="book_quantity" name="book_quantity" placeholder="Eg: 25" min=0>
                </div>

                <div class="book-add-form-row">
                    <label for="book_author" class="book-add-content-title">Author</label>
                    <input type="text" class="book-add-content-inputbox" id="book_author" name="book_author" placeholder="Eg: De Saint-Exupery, Antoine">
                </div>

                <div class="book-add-form-row">
                    <label for="book_publisher" class="book-add-content-title">Publisher</label>
                    <input type="text" class="book-add-content-inputbox" id="book_publisher" name="book_publisher" placeholder="Eg: Penguin Books">
                </div>

                <div class="book-add-form-row">
                    <label for="book_pages" class="book-add-content-title">Pages</label>
                    <input type="number" class="book-add-content-inputbox" id="book_pages" name="book_pages" placeholder="Eg: 300" min=1>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="book_format" class="book-add-content-title">Format</label>
                    <select name="book_format" id="book_format" class="book-format">
                        <option value="paperback">Paperback</option>
                        <option value="hardcover">Hardcover</option>
                        <option value="boxset">Boxset</option>
                    </select>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="category_ID" class="book-add-content-title">Category</label>
                    <select name="category_ID" id="category_ID" class="">
                        <option>1</option>
                    </select>
                </div>

                <div class="book-add-form-row">
                    <label for="book_image" class="book-add-content-title">Image</label>
                    <input type="file" class="book-add-content-inputbox book-image" id="book_image" name="book_image" placeholder="Eg: Fiction" multiple accept="image/*">
                </div>

                <div class="book-add-form-row-textarea">
                    <label for="book_description" class="book-add-content-title">Description</label>
                    <textarea id="book_description" name="book_description" rows="4"></textarea>
                </div>

                <div class="book-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection