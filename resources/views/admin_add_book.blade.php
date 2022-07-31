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
        <form action="{{route('add_book')}}" method="POST" name="book_add_form" enctype="multipart/form-data">
                @CSRF
                <div class="book-add-title">
                    <h4>New Book</h4>
                </div>

                <div class="book-add-form-row">
                    <label for="bookISBN" class="book-add-content-title">ISBN</label>
                    <input type="text" class="book-add-content-inputbox" id="bookISBN" name="bookISBN" placeholder="Eg: 9780141185620">
                </div>

                <div class="book-add-form-row">
                    <label for="bookTitle" class="book-add-content-title">Book Title</label>
                    <input type="text" class="book-add-content-inputbox" id="bookTitle" name="bookTitle" placeholder="Eg: The Little Prince">
                </div>

                <div class="book-add-form-row">
                    <label for="bookPrice" class="book-add-content-title">Price</label>
                    <input type="number" class="book-add-content-inputbox" id="bookPrice" name="bookPrice" placeholder="Eg: 39.00" min=0 step=".01" onchange="this.value = Math.round(this.value * 100) / 100).toFixed(2)">
                </div>

                <div class="book-add-form-row">
                    <label for="bookQuantity" class="book-add-content-title">Quantity</label>
                    <input type="number" class="book-add-content-inputbox" id="bookQuantity" name="bookQuantity" placeholder="Eg: 25" min=0>
                </div>

                <div class="book-add-form-row">
                    <label for="bookAuthor" class="book-add-content-title">Author</label>
                    <input type="text" class="book-add-content-inputbox" id="bookAuthor" name="bookAuthor" placeholder="Eg: De Saint-Exupery, Antoine">
                </div>

                <div class="book-add-form-row">
                    <label for="bookPublisher" class="book-add-content-title">Publisher</label>
                    <input type="text" class="book-add-content-inputbox" id="bookPublisher" name="bookPublisher" placeholder="Eg: Penguin Books">
                </div>

                <div class="book-add-form-row">
                    <label for="bookPages" class="book-add-content-title">Pages</label>
                    <input type="number" class="book-add-content-inputbox" id="bookPages" name="bookPages" placeholder="Eg: 300" min=1>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="bookLanguage" class="book-add-content-title">Language</label>
                    <select name="bookLanguage" id="bookLanguage" class="">
                        <option value="malay">Malay</option>
                        <option value="english">English</option>
                        <option value="chinese">Chinese</option>
                    </select>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="bookFormat" class="book-add-content-title">Format</label>
                    <select name="bookFormat" id="bookFormat" class="">
                        <option value="paperback">Paperback</option>
                        <option value="hardcover">Hardcover</option>
                        <option value="boxset">Boxset</option>
                    </select>
                </div>
               

                <div class="book-add-form-row selectbox">
                    <label for="category_ID" class="book-add-content-title">Category</label>
                    <select name="category_ID" id="category_ID" class="">
                    @foreach($category_ID as $category)
                        <option value="{{$category->category_ID}}">{{$category->category_name}} - {{$category->category_type}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="book-add-form-row">
                    <label for="bookImage" class="book-add-content-title">Image</label>
                    <input type="file" class="book-add-content-inputbox book-image" id="bookImage" name="bookImage" accept="image/*">
                </div>

                <div class="book-add-form-row-textarea">
                    <label for="bookDescription" class="book-add-content-title">Description</label><br>
                    <textarea id="bookDescription" name="bookDescription" rows="4"></textarea>
                </div>
                
                <div class="book-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection