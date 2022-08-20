<head>
    <link href="{{ url('css/admin_add_book.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<script>
     $(function() {
       $("select").each(function (index, element) {
                const val = $(this).data('value');
                if(val !== '') {
                    $(this).val(val);
                }
        });
    })
</script>

<div class="container-fluid book-add">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <form action="{{route('admin_update_book')}}" method="POST" name="book_add_form" enctype="multipart/form-data">
                @CSRF
                <div class="book-add-title">
                    <h4>Edit Book</h4>
                </div>
                @foreach($books as $book)
                <div class="book-add-form-row">
                    <label for="bookISBN" class="book-add-content-title ISBN">ISBN</label>
                    <input type="text" class="book-add-content-inputbox" id="bookISBN" name="bookISBN" value="{{$book->book_ISBN}}" readonly>
                </div>

                <div class="book-add-form-row">
                    <label for="bookTitle" class="book-add-content-title">Book Title</label>
                    <input type="text" class="book-add-content-inputbox" id="bookTitle" name="bookTitle" value="{{$book->book_title}}" required>
                </div>

                <div class="book-add-form-row">
                    <label for="bookPrice" class="book-add-content-title">Price</label>
                    <input type="number" class="book-add-content-inputbox" id="bookPrice" name="bookPrice" min=0 value="{{$book->book_price}}" step="any" required>
                </div>

                <div class="book-add-form-row">
                    <label for="bookQuantity" class="book-add-content-title">Quantity</label>
                    <input type="number" class="book-add-content-inputbox" id="bookQuantity" name="bookQuantity" min=0 value="{{$book->book_quantity}}" required>
                </div>

                <div class="book-add-form-row">
                    <label for="bookAuthor" class="book-add-content-title">Author</label>
                    <input type="text" class="book-add-content-inputbox" id="bookAuthor" name="bookAuthor" value="{{$book->book_author}}" required>
                </div>

                <div class="book-add-form-row">
                    <label for="bookPublisher" class="book-add-content-title">Publisher</label>
                    <input type="text" class="book-add-content-inputbox" id="bookPublisher" name="bookPublisher" value="{{$book->book_publisher}}" required>
                </div>

                <div class="book-add-form-row">
                    <label for="bookPages" class="book-add-content-title">Pages</label>
                    <input type="number" class="book-add-content-inputbox" id="bookPages" name="bookPages" min=1 value="{{$book->book_pages}}" required>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="bookLanguage" class="book-add-content-title">Language</label>
                    <select name="bookLanguage" id="bookLanguage" class="" data-value="{{ $book ? $book->book_language : old('bookLanguage') }}">
                        <option value="malay">Malay</option>
                        <option value="english">English</option>
                        <option value="chinese">Chinese</option>
                    </select>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="bookFormat" class="book-add-content-title">Format</label>
                    <select name="bookFormat" id="bookFormat" class="" data-value="{{ $book ? $book->book_format : old('bookFormat') }}">
                        <option value="paperback">Paperback</option>
                        <option value="hardcover">Hardcover</option>
                        <option value="boxset">Boxset</option>
                    </select>
                </div>

                <div class="book-add-form-row selectbox">
                    <label for="categoryID" class="book-add-content-title">Category</label>
                    <select name="categoryID" id="categoryID" class="" data-value="{{ $book ? $book->category_ID : old('categoryID') }}">
                    @foreach($category_ID as $category)
                        <option value="{{$category->category_ID}}">{{$category->category_name}} - {{$category->category_type}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="book-add-form-row">
                    <label for="bookImage" class="book-add-content-title">Image</label>
                    <img src="{{asset('images/')}}/{{$book->book_image}}" width="100" class="img-fluid"><br>
                    <input type="file" class="book-add-content-inputbox book-image" id="bookImage" name="bookImage" accept="image/*">
                </div>

                <div class="book-add-form-row-textarea">
                    <label for="bookDescription" class="book-add-content-title">Description</label>
                    <textarea id="bookDescription" name="bookDescription" rows="4" required>{{$book->book_description}}</textarea>
                </div>
                @endforeach
                <div class="book-add-button">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection