<head>        
    <!--<meta name="csrf-token" content="{{ csrf_token() }}" />-->    
</head>
@extends('landing_layout')
@section('customer_content')

<style>
    .column {
        float: left;
    }

    .left {
        width: 5%;
    }

    .center{
        width: 30%;
    }

    .right {
        width: 60%;
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

        .checkbox{
            width: 10px;
            height: 10px;
        }

        
    }

    @media screen and (max-width: 576px), (max-width: 992px) and (min-width: 768px) {
        .cart-container{
            display:none;
        }
    }

    @media screen and (max-width: 768px){
        .subprice{
            white-space:  nowrap;
        }
    }


    @media screen and (min-width: 576px) and (max-width: 768px), (min-width: 991px) {
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
                    <h5 class="card-title mx-4">MY CART</h5>
                    <hr class="mx-4">
                    @if(session()->get('cartItem') == 0)
                    <div class="empty-cart" style="text-align:center; background-color: whitesmoke;">
                    <img class="img-fluid" src="{{asset('images/emptycart.png')}}" alt="empty cart">
                    </div>
                    @endif

                    @if(session()->get('book_count') > 0)
                    @foreach($books as $book)
                    <div class="row align-items-center product-data">
                        <div class="col-md-1 col-sm-1" style="margin-right: -25px;">
                            <input type="checkbox" id="cid[]" name="cid[]" class="checkbox" value="{{$book->cid}}" onclick="cal()"><input type="hidden" name="subtotal[]" id="subtotal[]" value="{{$book->book_price*$book->cartQTY}}">
                            <input type="hidden" name="ISBN" class="ISBN" value="{{$book->book_ISBN}}">
                        </div> 
                        <div class="col-md-3 col-sm-3">
                            <img class="img-fluid book-img" src="{{asset('images/')}}/{{$book->book_image}}" alt="bookstore-wallpaper" style="">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h5 class="card-title title" style="font-size: 0.95em">{{$book->book_title}}</h5>
                            <p class="card-text price" style="font-size: 0.7em; color: grey">RM{{number_format($book->book_price, 2)}} (single unit)</p>
                            <p style="font-size: 0.85em" class="qty">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity q" class="qty-input" value="{{$book->cartQTY}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <h6 class="card-title subprice" style="font-size: 0.90em; color: #60a189">RM{{number_format($book->book_price*$book->cartQTY, 2)}}</h5>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <a href="{{ route('delete_cart',['ISBN'=>$book->book_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273" class="remove"><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                        </div>
                    </div>
                    <br>
                    @endforeach
                    @endif
                </div>
            </div>
           
            @if(session()->get('stationery_count') > 0)
            @foreach($stationeries as $stationery)
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center product-data">
                        <div class="col-md-1 col-sm-1" style="margin-right: -25px;">
                            <input type="checkbox" id="cid[]" name="cid[]" value="{{$stationery->cid}}" onclick="cal()"><input type="hidden" name="subtotal[]" id="subtotal[]" value="{{$stationery->stationery_price*$stationery->cartQTY}}">
                            <input type="hidden" name="ISBN" value="{{$stationery->stationery_ISBN}}">
                        </div> 
                        <div class="col-md-3 col-sm-3">
                            <img class="img-fluid" src="{{asset('images/')}}/{{$stationery->stationery_image}}" alt="stationery" style="">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h5 class="card-title" style="font-size: 0.95em">{{$stationery->stationery_title}}</h5>
                            <p class="card-text" style="font-size: 0.7em; color: grey">RM{{number_format($stationery->stationery_price, 2)}} (single unit)</p>
                            <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="{{$stationery->cartQTY}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                            
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <h6 class="card-title" style="font-size: 0.90em; color: #60a189">RM{{number_format($stationery->stationery_price*$stationery->cartQTY, 2)}}</h5>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <a href="{{ route('delete_cart',['ISBN'=>$stationery->stationery_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
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
                            <p style="text-align:right" id="sub">RM 0.00</p>
                        </div>
                    </div>
                    <div class="row mx-3">
                        <div class="d-grid gap-2 mb-3">
                            <button type="button" class="btn btn-dark">CHECK OUT</button>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-dark">CONTINUE SHOPPING</button>
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
            @if(session()->get('book_count') > 0)
            @foreach($books as $book)
            <div class="row align-items-center product-data">
                <div class="column left align-self-center" style="">
                    <input type="checkbox" id="smcid[]" name="smcid[]" value="{{$book->cid}}" onclick="smcal()"><input type="hidden" name="smsubtotal[]" id="smsubtotal[]" value="{{$book->book_price*$book->cartQTY}}">
                    <input type="hidden" name="ISBN" class="ISBN" value="{{$book->book_ISBN}}">
                </div>    
                <div class="column center align-self-center" style="position: relative; bottom:10px;">
                    <img class="img-fluid" src="{{asset('images/')}}/{{$book->book_image}}" alt="product" style="max-width:80px;">
                </div>
                <div class="column right" style="">
                    <h5 class="card-title" style="font-size: 0.9em">{{$book->book_title}}</h5>
                    <p class="card-text" style="font-size: 0.7em; color: grey">RM{{number_format($book->book_price, 2)}} (single unit)</p>
                    <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="{{$book->cartQTY}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                    <hr>
                    <a href="{{ route('delete_cart',['ISBN'=>$book->book_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273; float:right; position:relative; bottom:5px;" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                    <h5 class="card-title" style="font-size:.9em;">Total: RM{{number_format($book->book_price*$book->cartQTY, 2)}}</h5>
                </div>
            </div>
            <br>
            @endforeach
            @endif

            @if(session()->get('stationery_count') > 0)
            @foreach($stationeries as $stationery)
            <div class="row align-items-center product-data">
                <div class="column left align-self-center" style="">
                    <input type="checkbox" id="smcid[]" name="smcid[]" value="{{$stationery->cid}}" onclick="smcal()"><input type="hidden" name="smsubtotal[]" id="smsubtotal[]" value="{{$stationery->stationery_price*$stationery->cartQTY}}">
                    <input type="hidden" name="ISBN" class="ISBN" value="{{$stationery->stationery_ISBN}}">
                </div>    
                <div class="column center align-self-center" style="position: relative; bottom:10px;">
                    <img class="img-fluid" src="{{asset('images/')}}/{{$stationery->stationery_image}}" alt="product" style="max-width:80px;">
                </div>
                <div class="column right" style="">
                    <h5 class="card-title" style="font-size: 0.9em">{{$stationery->stationery_title}}</h5>
                    <p class="card-text" style="font-size: 0.7em; color: grey">RM{{number_format($stationery->stationery_price, 2)}} (single unit)</p>
                    <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn changeQuantity"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="{{$stationery->cartQTY}}" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn changeQuantity"><i class="bi bi-plus-square"></i></button></p>
                    <hr>
                    <a href="{{ route('delete_cart',['ISBN'=>$stationery->stationery_ISBN])}}" onClick="return confirm('Are you confirm to delete?')"><button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273; float:right; position:relative; bottom:5px;" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button></a>  
                    <h5 class="card-title" style="font-size:.9em;">Total: RM{{number_format($stationery->stationery_price*$stationery->cartQTY, 2)}}</h5>
                </div>
            </div>
            <br>
            @endforeach
            @endif
        </div>
        <div class="card-footer">
            <p style="float:right" id="smsub">RM 0.00</p>
            <p>TOTAL AMOUNT: </p>
            <div class="d-grid gap-2 mb-3">
                            <button type="button" class="btn btn-dark">CHECK OUT</button>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-dark">CONTINUE SHOPPING</button>
                        </div>
        </div>
    </div>
</div>

<br><br>

<script>
        $('.increment-btn').click(function (e) {
            
            //e.preventDefault();
            var inc_value=$(this).closest('.product-data').find('.qty-input').val();
            var value=parseInt(inc_value,10);
            if (isNaN(value)){
                $(this).closest('.product-data').find('.qty-input').val(1);
            } 
            if(value < 100){
                value++;
                $(this).closest('.product-data').find('.qty-input').val(value);
            }
        });

        $('.decrement-btn').click(function (e) {
            
            //e.preventDefault();
            var inc_value=$(this).closest('.product-data').find('.qty-input').val();
            var value=parseInt(inc_value,10);
            if (isNaN(value)){
                $(this).closest('.product-data').find('.qty-input').val(1);
            } 
            if(value <= 100 && value > 1){
                value--;
                $(this).closest('.product-data').find('.qty-input').val(value);
            }
        });

        function cal(){
            var names=document.getElementsByName('subtotal[]');
            var subtotal=0;
            var cboxes=document.getElementsByName('cid[]');
            var len=cboxes.length; //get number  of cid[] checkbox inside the page
            for(var i=0;i<len;i++){
                if(cboxes[i].checked){  //calculate if checked
                    subtotal=parseFloat(names[i].value)+parseFloat(subtotal);
                }
            }
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
