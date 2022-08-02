<head>
    <link href="{{ url('css/landing.css') }}" rel="stylesheet" type="text/css">
</head>

@extends('landing_layout')
@section('customer_content')
<!-- start image show -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/R.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/test1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/test2.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end image show -->
<div class="landing-content">

<!-- slide card new arrival lg-screen-->
<section class="pt-5 pb-5 new-arrival-lg">
  <div class="container-fluid">
    <div class="row mx-3">
      <div class="col-6">
        <h3 class="mb-3">NEW ARRIVALS</h3>
      </div>
      <form action="{{route('add_to_cart')}}" method="POST">
      @CSRF
      <div class="col-md-12">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($news->chunk(6) as $newCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($newCollections as $new)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <input type="hidden" name="ISBN" value="{{$new->book_ISBN}}">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="type" value="book">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$new->book_image}}">
                    <div class="card-body">
                      <div class="title">
                        <h4 class="card-title">{{$new->book_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($new->book_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>

         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:170px; filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:170px; filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </form>
    </div>
  </div>
</section>

<!-- slide card -->
<section class="pt-5 pb-5  new-arrival-md">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <h3 class="mb-3">NEW ARRIVALS</h3>
      </div>
      <div class="col-md-12">
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($news->chunk(4) as $newCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($newCollections as $new)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$new->book_image}}">
                    <div class="card-body">
                    <div class="title">
                        <h4 class="card-title">{{$new->book_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($new->book_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>
        
         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:90px;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:90px;"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>


<!-- slide card new arrival sm screen -->
<section class="pt-5 pb-5 new-arrival-sm mx-auto"style="width:300px;">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-3">NEW ARRIVALS</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($news->chunk(1) as $newCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($newCollections as $new)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$new->book_image}}" style="height:300px;">
                    <div class="card-body">
                    <div class="title">
                        <h4 class="card-title">{{$new->book_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($new->book_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>
        
         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:50px; filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:50px; filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>

<!--Book carousel-->
<!-- slide card Book carousel lg-screen-->
<section class="pt-5 pb-5 new-arrival-lg">
  <div class="container-fluid">
    <div class="row mx-3">
      <div class="col-6">
        <h3 class="mb-3">BOOKS</h3>
      </div>
      <div class="col-md-12">
        <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($books->chunk(6) as $bookCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($bookCollections as $book)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$book->book_image}}">
                    <div class="card-body">
                    <div class="title">
                        <h4 class="card-title">{{$book->book_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($book->book_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>

         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:170px; filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:170px; filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>

<!-- slide card -->
<section class="pt-5 pb-5  new-arrival-md">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <h3 class="mb-3">BOOKS</h3>
      </div>
      <div class="col-md-12">
        <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($books->chunk(4) as $bookCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($bookCollections as $book)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$book->book_image}}">
                    <div class="card-body">
                    <div class="title">
                        <h4 class="card-title">{{$book->book_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($book->book_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>
        
         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:90px;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:90px;"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>


<!-- slide card new arrival sm screen -->
<section class="pt-5 pb-5 new-arrival-sm mx-auto"style="width:300px;">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-3">BOOKS</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($books->chunk(1) as $bookCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($bookCollections as $book)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$book->book_image}}" style="height:300px;">
                    <div class="card-body">
                    <div class="title">
                        <h4 class="card-title">{{$book->book_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($book->book_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>
        
         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:50px; filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:50px; filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>
<!--end book carousel-->

<!--Stationery carousel-->
<!-- slide card Stationery carousel lg-screen-->
<section class="pt-5 pb-5 new-arrival-lg">
  <div class="container-fluid">
    <div class="row mx-3">
      <div class="col-6">
        <h3 class="mb-3">STATIONERIES</h3>
      </div>
      <div class="col-md-12">
        <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($stationeries->chunk(6) as $stationeryCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($stationeryCollections as $stationery)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$stationery->stationery_image}}">
                    <div class="card-body">
                    <div class="title" style="height: 60px;">
                        <h4 class="card-title">{{$stationery->stationery_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($stationery->stationery_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>

         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators8" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:170px; filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators8" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:170px; filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>

<!-- slide card -->
<section class="pt-5 pb-5  new-arrival-md">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <h3 class="mb-3">STATIONERIES</h3>
      </div>
      <div class="col-md-12">
        <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($stationeries->chunk(4) as $stationeryCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($stationeryCollections as $stationery)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$stationery->stationery_image}}">
                    <div class="card-body">
                    <div class="title" style="height: 60px;">
                        <h4 class="card-title">{{$stationery->stationery_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($stationery->stationery_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>
        
         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators9" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:90px;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators9" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:90px;"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>


<!-- slide card new arrival sm screen -->
<section class="pt-5 pb-5 new-arrival-sm mx-auto"style="width:300px;">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-3">STATIONERIES</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="carouselExampleIndicators10" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($stationeries->chunk(1) as $stationeryCollections)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">         
              <div class="row justify-content-center">
                @foreach($stationeryCollections as $stationery)
                <div class="col-lg-2 col-md-3 mb-3 col-sm-12">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="{{asset('images/')}}/{{$stationery->stationery_image}}" style="height:300px;">
                    <div class="card-body">
                    <div class="title" style="height: 60px;">
                        <h4 class="card-title">{{$stationery->stationery_title}}</h4>
                      </div>
                      <p class="card-text price">RM{{number_format($stationery->stationery_price, 2)}}</p>
                      <div class = "product-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="cart-button mx-auto">
                        <!--button -->
                        <button type="submit" class="add-to-cart">Add To Cart</button>
                        <!-- end button -->
                      </div>
                    </div>
                  </div>
                </div>

                
                @endforeach

              </div>
            
            </div>
            @endforeach
          </div>

        </div>
        
         <!--Controls-->
         <a class="carousel-control-prev" href="#carouselExampleIndicators10" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style=" position: absolute;right:50px; filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators10" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style=" position: absolute;left:50px; filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
    </div>
  </div>
</section>

<!--end Stationery carousel-->


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<!-- end slide card -->

<!-- category logo -->
<div class="container-fluid mx-auto category">
  <div class="row justify-content-center">
    <div class="col-md-2 col-xs-2">
      <a href="#"><img src="{{asset('images/bk.png')}}" alt="" class="icon img-fluid" style=""></a><br>
      <p class="icontext">FICTION</p>
    </div>
    <div class="col-md-2 col-xs-2" >
      <a href="#"><img src="{{asset('images/al.png')}}" alt="" class="icon img-fluid" style=""></a><br>
      <p class="icontext">NON-FICTION</p>
    </div>
    <div class="col-md-2 col-xs-2">
      <a href="#"><img src="{{asset('images/dn.png')}}" class="icon img-fluid"style=""></a><br>
      <p class="icontext">CHILDREN BOOKS</p>
    </div>
    <div class="col-md-2 col-xs-2">
      <a href="#"><img src="{{asset('images/sc.png')}}" class="icon img-fluid"style=""></a><br>
      <p class="icontext">REVISION BOOKS</p>
    </div>
    <div class="col-md-2 col-xs-2">
      <a href="#"><img src="{{asset('images/cr.png')}}" class="icon img-fluid"style=""></a><br>
      <p class="icontext">STATIONERY</p>
    </div>
  </div>
</div>

<!-- end category logo -->
</div>

<!-- end landing-content -->
@endsection

