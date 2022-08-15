<head>
    <link href="{{ url('css/search.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('landing_layout')
@section('customer_content')
<div class="container-fluid mt-5">
    <h4>SEARCH RESULT "{{session()->get('keyword') }}"</h4>
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$book->book_image}}">
                    <div class="title" style="height: 60px;">
                        <h4 class="card-title">{{$book->book_title}}</h4>
                      </div>
                      <p class="card-text" style="font-style: italic; color: gray">{{$book->book_author}}</p>
                      <p class="card-text price">RM{{number_format($book->book_price, 2)}}</p>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <a href="{{ route('book_detail',['ISBN'=>$book->book_ISBN])}}"><button type="button" class="view">View Details</button></a>
                        <!-- end button -->
                      </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection