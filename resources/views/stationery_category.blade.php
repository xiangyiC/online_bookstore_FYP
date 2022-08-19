
<head>
    <link href="{{ url('css/landing.css') }}" rel="stylesheet" type="text/css">
</head>

<style>
.main{
  max-width: 1200px;
  margin: 0 auto;
}


.bookcategory img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
  object-fit:cover;
}

@media (min-width: 1200px) {
    .bookcategory img {
        max-height: 390px;
        max-width: 260px;
        vertical-align: middle;
        object-fit:cover;
    }
}



.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card_ {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  
}

.card_title {
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.category_menu{
    text-decoration: none;
    color:black;
}

.cart-button a{
    text-decoration: none;
}
.bookcategory{
    min-height:300px;
}
</style>
@extends('landing_layout')
@section('customer_content')

<div class="container-fluid bookcategory">
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-md-3">
                    <a href="{{route('stationery')}}" class="category_menu"><h3 class="mt-3">Stationery</h3></a>
                    @foreach($category_type as $type)
                    <div class="col-md-12">
                        <a href="{{ route('stationery_category',['id'=>$type->category_ID])}}" class="category_menu">{{$type->category_name}}-{{$type->category_type}}</a>
                    </div>
                    @endforeach
                </div>
                @php
                $item=0;
                @endphp
                <div class="col-md-9">
                    <h3 class="mt-3 mx-3">{{session()->get('category') }}</h3>
                        <ul class="cards">
                            @foreach($categories as $category)      
                            <li class="cards_item">
                            <div class="card_">
                                <div class="card_image">
                                    <img src="{{asset('images/')}}/{{$category->stationery_image}}">
                                </div>
                                    <div class="card_content">
                                        <h2 class="card_title">{{$category->stationery_title}}</h2>
                                        <hr>
                                        
                                        <i><p class="card-text author">Publisher: {{$category->stationery_publisher}}</p></i>
                                        <p class="card-text price">RM{{number_format($category->stationery_price, 2)}}</p>

                                        <div class="cart-button mx-auto">
                                                <!--button -->
                                            <a href="{{ route('stationery_details',['ISBN'=>$category->stationery_ISBN])}}"><button type="button" class="add-to-cart">View Details</button></a>
                                                <!-- end button -->
                                        </div>
                                    </div>
                            </div>
                            @php
                            $item++;
                            @endphp
                        </li> 
                        @endforeach
                        @if($item == 0)
                        <p class="mx-3">There is no item in this category.</p>
                        @endif
                    </ul>
        
                </div>
            </div>
            
        </div>  

    </div>

</div>
@endsection