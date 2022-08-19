
<style>

.product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}

.cat-nav a:hover{
  color:#041690!important;
}

</style>
@extends('landing_layout')
@section('customer_content')
<form action="{{route('add_to_cart')}}" method="POST">
      @CSRF
@foreach($stationeries as $stationery)
<!-- description card -->
<div class="py-3 mb-4 shadow-sm border-top" style="background-color: #C0C0C0;">
  <div class="container cat-nav">
    <h6 class="mb-0" style="text-transform: capitalize;"><a href="route('stationery')" style="color:black;text-decoration:none;">Stationeries</a> / <a href="{{ route('stationery_category',['id'=>$stationery->stationery_category_ID])}}" style="color:black; text-decoration:none">{{$stationery->categoryName}}-{{$stationery->categoryType}}</a> / {{$stationery->stationery_title}}</h6>
  </div>
</div>

<div class="container">
  <div class="card shadow">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 border-right">
          <img src="{{asset('images/')}}/{{$stationery->stationery_image}}" class="w-100" alt="">
        </div>

        <div class="col-md-8">
          <h2 class="mb-0">
            {{$stationery->stationery_title}}
            
          </h2>

          <hr>
          <input type="hidden" name="ISBN" value="{{$stationery->stationery_ISBN}}">
          <input type="hidden" name="type" value="stationery">

          <label class="me-3"><b>Publisher:</b> {{$stationery->stationery_publisher}}</label><br>
          <label class="me-3"><b>Price:</b> RM{{number_format($stationery->stationery_price, 2)}}</label><br>
          <label class="me-3"><b>ISBN:</b> {{$stationery->stationery_ISBN}}</label>
          <b><p class="mt-3">
            Product Description
          </p></b>
       
          <p>{{$stationery->stationery_description}}</p>

          <div class = "product-detail">
        
      </div>

          <hr>
            @if($stationery->stationery_quantity > 0)
          <label class="badge bg-success">In Stock</label>
            @else
            <label class="badge bg-danger">Out Stock</label>
            @endif
        
          <!-- <label class="badge bg-danger">Out of Stock</label> -->
  
          @if($stationery->stationery_quantity > 0)
          <div class="row mt-2">
            <div class="col-md-4">
              <input type="hidden" name="limit" class="limit" value="{{$stationery->stationery_quantity}}">
              <label for="Quantity">Quantity</label>
              <div class="input-group text-center mb-3">
                <button class="input-group-text decrement-btn">-</button>
                    <input type="text" name="quantity" value="1" class="form-control qty-input" style="max-width: 45px; text-align: center">
                <button class="input-group-text increment-btn">+</button> 
              </div>
              <p class="left_item"></p>
            </div>

            <div class="col-md-8">
              <br>
              <button type="submit" class="btn btn-primary me-3 float-start">Add to Cart</button>
            </div>
          </div>
          @else
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<!-- end of description card --> 
@endforeach
<br>
</form>

<script>
  $(document).ready(function(){
    $('.increment-btn').click(function(e){
      e.preventDefault();

      var inc_value = $('.qty-input').val();
      var value = parseInt(inc_value, 10);
      value = isNaN(value) ? 0 : value;
      var limit=$('.limit').val();
      
      if(value < limit){

        value++;
        $('.qty-input').val(value);

      }

      if(value==limit){
        $(".left_item").text("There is only " + limit + " item(s) left in stock" );
      }
    });

    $('.decrement-btn').click(function(e){
      e.preventDefault();

      var dec_value = $('.qty-input').val();
      var value = parseInt(dec_value, 10);
      value = isNaN(value) ? 0 : value;
      if(value > 1){

        value--;
        $('.qty-input').val(value);

      }
    });

  });

</script>
@endsection
