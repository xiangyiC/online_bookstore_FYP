@extends('landing_layout')
@section('customer_content')
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

.icon{
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow, transform;
  transition-property: box-shadow, transform;
  display: table-cell;
  vertical-align: middle;
  color: white;
  border-radius: 35px;
  width: 180px;
  height: 180px;
  text-align: center;
  /*background: #007991;  /* fallback for old browsers */
  /*background: -webkit-linear-gradient(to bottom, #78ffd6, #007991);  /* Chrome 10-25, Safari 5.1-6 */
  /*background: linear-gradient(to bottom, #78ffd6, #007991); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.icon:hover, .icon:focus, .icon:active {
  box-shadow: 0 50px 50px -50px rgba(0, 0, 0, 50);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}



.icontext{
  text-align: center;
  color: black;
  font-size: 30px;
  position: relative;
  right: 30px;
}



table {
  float:center;
    border-spacing: 60px;
    border-collapse: separate;
    
}


.carousel-fade .carousel-item{
  max-height:700px!important;
}

.carousel-fade .carousel-item img{
 object-fit:cover;
}


.checked {
  color: orange;
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

</style>
<form action="{{route('add_to_cart')}}" method="POST">
      @CSRF
@foreach($books as $book)
<!-- description card -->
<div class="py-3 mb-4 shadow-sm border-top" style="background-color: #C0C0C0;">
  <div class="container">
    <h6 class="mb-0">Books / {{$book->categoryName}} / {{$book->categoryType}} / {{$book->book_title}}</h6>
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
            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending</label>
          </h2>

          <hr>
          <input type="hidden" name="ISBN" value="{{$book->book_ISBN}}">
          <input type="hidden" name="type" value="book">

          <label class="me-3">Author(s): {{$book->book_author}}</label><br>
          <label class="me-3">Publisher: {{$book->book_publisher}}</label><br>
          <label class="me-3">Price: RM{{number_format($book->book_price, 2)}}</label><br>
          <label class="me-3">ISBN: {{$book->book_ISBN}}</label>
          <p class="mt-3">
            Product Description
          </p>
       
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
            <div class="col-md-2">
              <label for="Quantity">Quantity</label>
              <input type="hidden" name="limit" class="limit" value="{{$book->book_quantity}}">
              <div class="input-group text-center mb-3">
                <button class="input-group-text decrement-btn">-</button>
                    <input type="text" name="quantity" value="1" class="form-control qty-input" style="margin-left:-3px;">
                <button class="input-group-text increment-btn">+</button> 
              </div>
              <p class="left_item"></p>
            </div>
            <div class="col-md-10">
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
        alert(value);

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
