<head>
    <link href="{{ url('css/search.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('landing_layout')
@section('customer_content')
<div class="container-fluid mt-5 search">
    <h4 class="result">SEARCH RESULT "{{session()->get('keyword') }}"</h4>
    <br>
</div>
<div class="container-fluid bookcategory">
    <div class="card">
        <div class="card-body">
            <div class="row">
            
                <div class="col-md-12">
                    
                        <ul class="cards">
                            @foreach($books as $book)      
                            <li class="cards_item">
                            <div class="card_">
                                <div class="card_image">
                                    <img src="{{asset('images/')}}/{{$book->book_image}}">
                                </div>
                                    <div class="card_content">
                                        <h2 class="card_title">{{$book->book_title}}</h2>
                                        <hr>
                                        
                                        <i><p class="card-text author" style="font-size:0.9em;">Publisher: {{$book->book_publisher}}</p></i>
                                        <p class="card-text price" style="font-size:0.9em;">RM{{number_format($book->book_price, 2)}}</p>

                                        <div class="cart-button mx-auto">
                                                <!--button -->
                                            <a href="{{ route('book_detail',['ISBN'=>$book->book_ISBN])}}"><button type="button" class="view">View Details</button></a>
                                                <!-- end button -->
                                        </div>
                                    </div>
                            </div>
                           
                        </li> 
                        @endforeach
                    </ul>
        
                </div>
            </div>
            
        </div>  

    </div>

</div>
@endsection
