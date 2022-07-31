<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Destiny Bookstore</title>
            <link href="{{ url('css/admin_sidebar.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ url('css/admin_navbar.css') }}" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

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
    @media screen and (max-width: 400px){
    .sm-screen{
      display: inline-block!important;
    }
  }

</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mx-4">MY CART</h5>
                    <hr>
                    <div class="row align-items-center product-data">
                        <div class="col-md-1 col-sm-1" style="margin-right: -25px;">
                            <input type="checkbox" id="cid[]" name="cid[]" value="" onclick="cal()"><input type="hidden" name="subtotal[]" id="subtotal[]" value="19.9">
                        </div> 
                        <div class="col-md-3 col-sm-3">
                            <img class="img-fluid" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper" style="">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h5 class="card-title" style="font-size: 0.95em">Product Name</h5>
                            <p class="card-text" style="font-size: 0.7em; color: grey">RM 19.90 (single unit)</p>
                            <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="1" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn"><i class="bi bi-plus-square"></i></button></p>
                            
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <h6 class="card-title" style="font-size: 0.90em; color: #60a189">RM 19.90</h5>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <button style="border: none; background-color: transparent; font-size: 0.80em; color:#ed3273" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center product-data">
                        <div class="col-md-1 col-sm-1" style="margin-right: -25px;">
                            <input type="checkbox" id="cid[]" name="cid[]" value="" onclick="cal()"><input type="hidden" name="subtotal[]" id="subtotal[]" value="19.9">
                        </div> 
                        <div class="col-md-3 col-sm-3">
                            <img class="img-fluid" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper" style="">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h5 class="card-title" style="font-size: 0.95em">Product Name</h5>
                            <p class="card-text" style="font-size: 0.7em; color: grey">RM 19.90 (single unit)</p>
                            <p style="font-size: 0.85em">Qty: &nbsp;<button style="border: none; background-color: transparent;" class="decrement-btn"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="1" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn"><i class="bi bi-plus-square"></i></button></p>
                            
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <h6 class="card-title" style="font-size: 0.90em; color: #60a189">RM 19.90</h5>
                        </div>
                        <div class="col-md-2 align-self-center col-sm-2">
                            <button style="border: none; background-color: transparent; font-size: 0.8em; color:#ed3273" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title align-self-center">CART SUMMARY</h5>
                    <hr>
                    <div class="row mx-3">
                        <div class="col-md-6 col-sm-6">
                            <p>TOTAL AMOUNT: </p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <p style="text-align:right" id="sub"></p>
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
            <div class="row">
                <div class="column left align-self-center" style="">
                    <input type="checkbox" id="cid[]" name="cid[]" value="" onclick="cal()"><input type="hidden" name="subtotal[]" id="subtotal[]" value="19.9">
                </div>    
                <div class="column center align-self-center" style="position: relative; bottom:20px;">
                    <img class="img-fluid" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper" style="max-width:100px;">
                </div>
                <div class="column right" style="">
                    <h5 class="card-title" style="font-size: 0.9em">Product Name</h5>
                    <p class="card-text" style="font-size: 0.7em; color: grey">RM 19.90 (single unit)</p>
                    <p style="font-size: 0.8em"><button style="border: none; background-color: transparent;"><i class="bi bi-dash-square"></i></button> &nbsp; <input type="text" name="quantity" class="qty-input" value="1" style="width: 30px; text-align:center;"> &nbsp; <button style="border: none; background-color: transparent;" class="increment-btn"><i class="bi bi-plus-square"></i></button></p>
                    <hr>
                    <button style="border: none; background-color: transparent; font-size: 0.8em; color:#ed3273; float: right;" ><i class="bi bi-x" style="font-size: 1.2em"> </i>REMOVE</button>
                    <h5 class="card-title" style="font-size:.9em;">Total: RM 19.90</h5>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>

<script>
        /*function add(){
            var inc_value=$('.qty-input').val();
            var value=parseInt(inc_value,10);
            if (isNaN(value)){
                $('.qty-input').val(1);
            } 
            if(value < 100){
                value++;
                $('.qty-input').val(value);
            }

        }*/

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

</script>
