
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

#testimonials{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width:100%;
}
.testimonial-heading{
    letter-spacing: 1px;
    margin: 30px 0px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.testimonial-heading span{
    font-size: 1.3rem;
    color: #252525;
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.testimonial-box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width:100%;
}
.testimonial-box{
    width:500px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    background-color: #ffffff;
    padding: 20px;
    margin: 15px;
    cursor: pointer;
}
.profile-img{
    width:50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}
.profile-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.profile{
    display: flex;
    align-items: center;
}
.name-user{
    display: flex;
    flex-direction: column;
}
.name-user strong{
    color: #3d3d3d;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}
.name-user span{
    color: #979797;
    font-size: 0.8rem;
}
.reviews{
    color: #f9d71c;
}
.box-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.client-comment p{
    font-size: 0.9rem;
    color: #4b4b4b;
}
.testimonial-box:hover{
    transform: translateY(-10px);
    transition: all ease 0.3s;
}
 
@media(max-width:1060px){
    .testimonial-box{
        width:45%;
        padding: 10px;
    }
}
@media(max-width:790px){
    .testimonial-box{
        width:100%;
    }
    .testimonial-heading h1{
        font-size: 1.4rem;
    }
}
@media(max-width:340px){
    .box-top{
        flex-wrap: wrap;
        margin-bottom: 10px;
    }
    .reviews{
        margin-top: 10px;
    }
}
::selection{
    color: #ffffff;
    background-color: #252525;
}

.cat-nav a:hover{
  color:#041690!important;
}


</style>
@extends('landing_layout')
@section('customer_content')
<form action="{{route('add_to_cart')}}" method="POST">
      @CSRF
@foreach($books as $book)
<!-- description card -->
<div class="py-3 mb-4 shadow-sm border-top cat-nav" style="background-color: #C0C0C0;">
  <div class="container">
    <h6 class="mb-0" style="text-transform: capitalize;">Books / <a href="{{route($book->categoryName)}}" style="color:black; text-decoration:none">{{$book->categoryName}}</a> / <a href="{{ route('book_category',['id'=>$book->category_ID,'name'=>$book->categoryName])}}" style="color:black; text-decoration:none">{{$book->categoryType}}</a> / {{$book->book_title}}</h6>
  </div>
</div>

<div class="container">
  <div class="card shadow">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 border-right">
          <img src="{{asset('images/')}}/{{$book->book_image}}" class="w-100" alt="">
        </div>

        <div class="col-md-8">
          <h2 class="mb-0">
            {{$book->book_title}}
            
          </h2>

          <hr>
          <input type="hidden" name="ISBN" value="{{$book->book_ISBN}}">
          <input type="hidden" name="type" value="book">

          <label class="me-3"><b>Author(s):</b> {{$book->book_author}}</label><br>
          <label class="me-3"><b>Publisher:</b> {{$book->book_publisher}}</label><br>
          <label class="me-3"><b>Price:</b> RM{{number_format($book->book_price, 2)}}</label><br>
          <label class="me-3"><b>ISBN:</b> {{$book->book_ISBN}}</label>
          <b><p class="mt-3">
            Product Description
          </p></b>
       
          <p>{{$book->book_description}}</p>

          <div class = "product-detail">
        
        <ul>
          <li>Pages: <span>{{$book->book_pages}}</span></li>
          <li>Language: <span>{{$book->book_language}}</span></li>
          <li>Format: <span>{{$book->book_format}}</span></li>
        </ul>
      </div>

          <hr>
            @if($book->book_quantity > 0)
          <label class="badge bg-success">In Stock</label>
            @else
            <label class="badge bg-danger">Out Stock</label>
            @endif
        
          <!-- <label class="badge bg-danger">Out of Stock</label> -->
  
          @if($book->book_quantity > 0)
          <div class="row mt-2">
            <div class="col-md-4">
              <label for="Quantity">Quantity</label>
              <input type="hidden" name="limit" class="limit" value="{{$book->book_quantity}}">
              <div class="input-group text-center mb-3 qty-button">
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
      //
      var limit=$('.limit').val();
      
      //
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
