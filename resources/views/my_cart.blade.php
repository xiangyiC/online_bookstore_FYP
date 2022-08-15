<head>        
    <!--<meta name="csrf-token" content="{{ csrf_token() }}" />-->    
</head>
@extends('landing_layout')
@section('customer_content')

<style>
    .column {
        float: left;
    }

    .left{
        width: 30%;
    }

    .right {
        width: 70%;
    }

    .cart-btn button{
        width:100%;
    }

    @media screen and (max-width: 992px) and (min-width: 768px) {
        .subprice, .title, .qty, .remove, .checkbox {
            font-size: 0.7em!important;
        }
        .price{
            font-size: 0.6em!important;
        }

        .subprice{
            white-space:  nowrap;
        }

        .qty button{
            margin:-5px;
        }

        .book-img{
           position: relative;
           left:13px;
        }

        
    }

    @media screen and (max-width: 576px) {
        .cart-container{
            display:none;
        }
    }

    @media screen and (max-width: 768px){
        .subprice{
            white-space:  nowrap;
        }
    }


    @media screen and (min-width: 576px) {
        .sm-screen{
            display:none;
        }
    }

</style>

<div class="container cart-container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mx-0">MY CART</h5>
                    <hr class="mx-0">
                    @if(session()->get('cartItem') == 0)
                    <div class="empty-cart" style="text-align:center; background-color: whitesmoke;">
                        <img class="img-fluid" src="{{asset('images/emptycart.png')}}" alt="empty cart">
                    </div>
                    @endif
                    <?php
                        $total = 0;
                    ?>
                    @foreach($my_cart as $cart)
                    @if($cart->type == "book")
                    <div class="row align-items-center product-data">
                        <div class="col-md-3 col-sm-3">
                            <img class="img-fluid book-img" src="{{asset('images/')}}/{{$cart->books->book_image}}" alt="bookstore-wallpaper" style="">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="hidden" name="ISBN" class="ISBN" value="{{$cart->books->book_ISBN}}">
                            <h5 class="card-title title" style="font-size: 0.95em">{{$cart->books->book_title}}</h5>
                            <p class="card-text price" style="font-size: 0.7em; color: grey">RM{{number_format($cart->books->book_price, 2)}} (single unit)</p>
                            <p style="font-size: 0.85em" class="qty">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity q" class="qty-input" value="{{$cart->quantity}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                            <input type="hidden" name="limit" class="limit" value="{{$cart->books->book_quantity}}">
                            <p class="left_item"></p>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <h6 class="card-title subprice" style="font-size: 0.90em; color: #60a189">RM{{number_format($cart->books->book_price*$cart->quantity, 2)}}</h5>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <a href="{{ route('delete_cart',['ISBN'=>$cart->books->book_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273" class="remove"><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                        </div>
                    </div>
                    <br>
                 
                    @elseif($cart->type == "stationery")
                    <div class="row align-items-center product-data">
                        <div class="col-md-3 col-sm-3">
                            <img class="img-fluid" src="{{asset('images/')}}/{{$cart->stationeries->stationery_image}}" alt="stationery" style="">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="hidden" name="ISBN" class="ISBN" value="{{$cart->stationeries->stationery_ISBN}}">
                            <h5 class="card-title" style="font-size: 0.95em">{{$cart->stationeries->stationery_title}}</h5>
                            <p class="card-text" style="font-size: 0.7em; color: grey">RM{{number_format($cart->stationeries->stationery_price, 2)}} (single unit)</p>
                            <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="{{$cart->quantity}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p> 
                            <input type="hidden" name="limit" class="limit" value="{{$cart->stationeries->stationery_quantity}}">
                            <p class="left_item"></p>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <h6 class="card-title" style="font-size: 0.90em; color: #60a189">RM{{number_format($cart->stationeries->stationery_price*$cart->quantity, 2)}}</h5>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <a href="{{ route('delete_cart',['ISBN'=>$cart->stationeries->stationery_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273" class="remove"><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                        </div>
                    </div>
                    @endif
                    <?php
                        if($cart->type == "stationery"){
                            $total += $cart->stationeries->stationery_price*$cart->quantity;
                        }elseif($cart->type == "book"){
                            $total += $cart->books->book_price*$cart->quantity;
                        }
                    ?>
                    @endforeach

                </div>
            </div>
            
        </div>
        
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title align-self-center mx-4">CART SUMMARY</h5>
                    <hr class="mx-4">
                    <div class="row mx-3">
                        <div class="col-md-6 col-sm-6">
                            <p>TOTAL AMOUNT: </p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <p style="text-align:right" id="sub">RM{{number_format($total, 2)}}</p>
                        </div>
                    </div>
                    <div class="row mx-3 cart-btn">
                        @if(session()->get('cartItem') > 0)
                        <div class="d-grid gap-2 mb-3">
                            <a href="{{ route('to_checkout')}}"><button type="button" class="btn btn-dark checkout">CHECK OUT</button></a>
                        </div>
                        @endif
                        <div class="d-grid gap-2">
                            <a href="{{ route('landing') }}"><button type="button" class="btn btn-dark">CONTINUE SHOPPING</button></a>
                        </div>
                    </div>
                </div>    
                
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container sm-screen" style="max-width: 400px;">
  <div class="card">
        <div class="card-body">
        <h5 class="card-title mx-0">MY CART</h5>
        <hr class="mx-0">
        @if(session()->get('cartItem') == 0)
            <div class="empty-cart" style="text-align:center; background-color: whitesmoke;">
                <img class="img-fluid" src="{{asset('images/emptycart.png')}}" alt="empty cart">
            </div>
        @endif
            @foreach($my_cart as $cart)
            @if($cart->type == "book")
            <div class="row align-items-center product-data">  
                <div class="column left align-self-center" style="position: relative; bottom:10px;">
                    <img class="img-fluid" src="{{asset('images/')}}/{{$cart->books->book_image}}" alt="product" style="max-width:80px;">
                </div>
                <div class="column right" style="">
                    <input type="hidden" name="ISBN" class="ISBN" value="{{$cart->books->book_ISBN}}">
                    <h5 class="card-title" style="font-size: 0.9em">{{$cart->books->book_title}}</h5>
                    <p class="card-text" style="font-size: 0.7em; color: grey">RM{{number_format($cart->books->book_price, 2)}} (single unit)</p>
                    <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="{{$cart->quantity}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                    <input type="hidden" name="limit" class="limit" value="{{$cart->books->book_quantity}}">
                    <p class="left_item"></p>
                    <hr>
                    <a href="{{ route('delete_cart',['ISBN'=>$cart->books->book_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273; float:right; position:relative; bottom:5px;" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                    <h5 class="card-title" style="font-size:.9em;">Total: RM{{number_format($cart->books->book_price*$cart->cartQTY, 2)}}</h5>
                </div>
            </div>
            <br>

            @elseif($cart->type == "stationery")
            <div class="row align-items-center product-data">
                <div class="column left align-self-center" style="position: relative; bottom:10px;">
                    <img class="img-fluid" src="{{asset('images/')}}/{{$cart->stationeries->stationery_image}}" alt="product" style="max-width:80px;">
                </div>
                <div class="column right" style="">
                    <input type="hidden" name="ISBN" class="ISBN" value="{{$cart->stationeries->stationery_ISBN}}">
                    <h5 class="card-title" style="font-size: 0.9em">{{$cart->stationeries->stationery_title}}</h5>
                    <p class="card-text" style="font-size: 0.7em; color: grey">RM{{number_format($cart->stationeries->stationery_price, 2)}} (single unit)</p>
                    <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="{{$cart->quantity}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                    <input type="hidden" name="limit" class="limit" value="{{$cart->stationeries->stationery_quantity}}">
                    <p class="left_item"></p>
                    <hr>
                    <a href="{{ route('delete_cart',['ISBN'=>$cart->stationeries->stationery_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273; float:right; position:relative; bottom:5px;" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>
                    <h5 class="card-title" style="font-size:.9em;">Total: RM{{number_format($cart->stationeries->stationery_price*$cart->cartQTY, 2)}}</h5>
                </div>
            </div>
            <br>
            @endif
            @endforeach

        </div>
        <div class="card-footer">
            <p style="float:right" id="sub">RM{{number_format($total, 2)}}</p>
            <p>TOTAL AMOUNT: </p>
                <div class="row  cart-btn">
                    @if(session()->get('cartItem') > 0)
                    <div class="d-grid gap-2 mb-3">
                        <a href="{{ route('to_checkout')}}"><button type="button" class="btn btn-dark checkout">CHECK OUT</button></a>
                    </div>
                    @endif
                    <div class="d-grid gap-2">
                        <a href="{{ route('landing') }}"><button type="button" class="btn btn-dark">CONTINUE SHOPPING</button></a>
                    </div>
                </div>
        </div>
    </div>
</div>

<br><br>

<script>
        $('.increment-btn').click(function (e) {
            
            e.preventDefault();
            var inc_value=$(this).closest('.product-data').find('.qty-input').val();

            var limit=$(this).closest('.product-data').find('.limit').val();
            
            var value=parseInt(inc_value,10);
            if (isNaN(value)){
                $(this).closest('.product-data').find('.qty-input').val(1);
            } 
          
            if(value < limit){
                value++;
                $(this).closest('.product-data').find('.qty-input').val(value);
            }

            if(value==limit){
                $(".left_item").text("There is only " + limit + " item(s) left in stock" );
            }
        });

        $('.decrement-btn').click(function (e) {
            
            e.preventDefault();
            var inc_value=$(this).closest('.product-data').find('.qty-input').val();

            var limit=$(this).closest('.product-data').find('.limit').val();

            var value=parseInt(inc_value,10);
            if (isNaN(value)){
                $(this).closest('.product-data').find('.qty-input').val(1);
            } 
            if(value <= limit && value >= 1){
                value--;
                $(this).closest('.product-data').find('.qty-input').val(value);
            }
        });

        function cal(){
            var names=document.getElementsByName('subtotal[]');
            var subtotal=0;
            var cboxes=document.getElementsByName('cid[]');
            var len=cboxes.length; //get number  of cid[] checkbox inside the page
            var product=[];
            for(var i=0;i<len;i++){
                if(cboxes[i].checked){  //calculate if checked
                    subtotal=parseFloat(names[i].value)+parseFloat(subtotal);
                    product.push(cboxes[i].value);
                }
            }
            alert(product);
            $(this).closest('.product-data').find('.product').val(product);
            document.getElementById('sub').innerHTML="RM"+subtotal.toFixed(2);
       
        }

        function smcal(){
            var names=document.getElementsByName('smsubtotal[]');
            var subtotal=0;
            var cboxes=document.getElementsByName('smcid[]');
            var len=cboxes.length; //get number  of cid[] checkbox inside the page
            for(var i=0;i<len;i++){
                if(cboxes[i].checked){  //calculate if checked
                    subtotal=parseFloat(names[i].value)+parseFloat(subtotal);
                }
            }
            document.getElementById('smsub').innerHTML="RM"+subtotal.toFixed(2);
       
        }


        $('.changeQuantity').click(function (e){
            e.preventDefault();
            var ISBN=$(this).closest('.product-data').find('.ISBN').val(); 
            var quantity=$(this).closest('.product-data').find('.qty-input').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            data={
                'ISBN':ISBN,
                'quantity':quantity, 
            }
            $.ajax({
                method:"POST",
                url:"update_cart",
                data:data,
                success:function(response){
                    window.location.reload();
                }
            });
        });


</script>
@endsection
