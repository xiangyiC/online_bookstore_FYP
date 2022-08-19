
        <head>
            <link href="{{ url('css/checkout.css') }}" rel="stylesheet" type="text/css">
        </head>
        <script>
            function format(input){
                if(input.value.length === 1){
                    input.value = "0" + input.value;
                }
            }
            
            function shipping(){
   
                const select = document.getElementById("state");
                const state = select.value;

                if(state == "Sabah" || state == "Sarawak"){
                    $(".shipping").text("Shipping Fee (East Malaysia): ");
                    $(".fee").text("RM10.00");
                    var shippingfee = 10;
                    var total = document.getElementById("itemsub").value;
                    var newTotal = parseFloat(total) + shippingfee;
                    newTotal= newTotal.toFixed(2);
                    $("#total").text("RM" + newTotal);
                    $('#sub').val(newTotal);

                }else{
                    $(".shipping").text("Shipping Fee (West Malaysia): ");
                    $(".fee").text("RM7.00");

                    var shippingfee = 7;
                    var total = document.getElementById("itemsub").value;
                    var newTotal = parseFloat(total) + shippingfee;
                    newTotal= newTotal.toFixed(2);
                    $("#total").text("RM" + newTotal);
                    $('#sub').val(newTotal);
                }
            }

            function validateCheckOutForm() {

                const select = document.getElementById("state");
                const state = select.value;
                if(state=="select_state"){
                    alert("Please select state!");
                    $('#state').focus();
                    return false;
                }
                var postcode = document.forms["place_order"]["zip_code"].value;
                var re = /^[0-9]{5}$/;
                var valid= re.test(postcode);
                if(valid == false){
                    alert("Please enter correct zip code in 5 digit numbers!");
                    $('#zipcode').focus();
                    return false;
                }
                var expire_year = document.forms["place_order"]["card-expiry-year"].value;
                expire_year = parseFloat(expire_year);
                if(expire_year < 2022 || expire_year > 2050){
                    alert("Please enter correct expire year!");
                    $('.card-expiry-year').focus();
                    return false;
                }

            }
        </script>
        <style>

            .cart-btn button{
                width:100%;
            }

        </style>

@extends('landing_layout')
@section('customer_content')

<form action="{{route('place_order')}}" method="POST" name="place_order" onsubmit="return validateCheckOutForm()" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
@CSRF

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Information</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Recipient Name</label>
                            <input type="text" class="form-control name" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control phoneNumber" id="phoneNumber" name="phone" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Shipping Address</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="street">Street</label>
                            <input type="text" class="form-control street" id="street" name="street" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control name" id="city" name="city" required>
                        </div>
                        <div class="col-md-4">
                        <label for="state">State</label>
                        <select class="form-select" id="state" name="state" onchange="shipping()" required>
                            <option disabled selected value="select_state">Select State</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Malacca">Malacca</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="name">Zip Code</label>
                            <input type="number" class="form-control name" id="zipcode" step="any" name="zip_code" required>
                        </div>
                    </div>

                </div>
                <div class="card-body payment">
                    <h5 class="card-title">Payment Information</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cardName">Name On Credit Card</label>
                            <input type="text" class="form-control card-name" id="card-name"">
                        </div>
                        <div class="col-md-6">
                            <label for="cardNumber">Credit Card Number</label>
                            <input type="text" class="form-control card-number" id="card-number" autocomplete='off'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="CVC">CVC</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' id="card-cvc" type='text'>
                        </div>
                        <div class="col-md-4">
                            <label for="expireMonth">Expire Month</label>
                            <input type="text" class="form-control card-expiry-month" id="card-expiry-month" placeholder='MM' onchange="if(this.value.length < 2) this.value = '0' + this.value;">
                        </div>
                        <div class="col-md-4">
                            <label for="expireMonth">Expire Year</label>
                            <input type="text" class="form-control card-expiry-year" id="card-expiry-year" placeholder='YYYY'>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Order Details</h5>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <?php
                            $i = 1;
                            $total = 0;
                            $count = 0;
                        ?>
                        <tbody>
                        @if(session()->get('book_count') > 0)
                        @foreach($books as $book)
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>{{$book->book_title}}</td>
                                <td>{{$book->cartQTY}}</td>
                                <td>RM{{number_format($book->book_price, 2)}}</td>
                                <td>RM{{number_format($book->book_price*$book->cartQTY, 2)}}</td>
                            </tr>
                            <?php
                                $i++;
                                $total += $book->book_price*$book->cartQTY;
                                $count++;
                            ?>
                        @endforeach
                        @endif

                        @if(session()->get('stationery_count') > 0)
                        @foreach($stationeries as $stationery)
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>{{$stationery->stationery_title}}</td>
                                <td>{{$stationery->cartQTY}}</td>
                                <td>RM{{number_format($stationery->stationery_price, 2)}}</td>
                                <td>RM{{number_format($stationery->stationery_price*$stationery->cartQTY, 2)}}</td>
                            </tr>
                            <?php
                                $i++;
                                $total += $stationery->stationery_price*$stationery->cartQTY;
                                $count++;
                            ?>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    
                    <div style="text-align: right; color: gray;">
                        <p class="card-text">Total {{$count}} item(s)<p>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="">Product Price: </p>
                            <p class="shipping">Shipping Fee: </p>
                        </div>
                        <div class="col-md-4" style="text-align: right;">
                            <h6 class="card-title">RM{{number_format($total, 2)}}</h6>
                            <input type="hidden" name="itemsub" class="itemsub" id="itemsub" value="{{$total}}">
                            <h6 class="fee"></h6>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4 class="card-title">Grand Total :</h4>
                        </div>
                        <div class="col-md-6 col-sm-6" style="text-align: right;">
                            <h4 class="card-title" id="total">RM{{number_format($total, 2)}}</h4>
                            <input type="hidden" name="sub" class="sub" id="sub">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 cart-btn">
                        <a><button type="submit" class="btn btn-dark mb-2">Place Order</button></a>
                    </div>
                    <div class="d-grid gap-2 cart-btn">
                        <a href="{{ route('show_my_cart') }}"><button type="button" class="btn btn-dark">Back To Cart</button></a>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
<br><br>

</form>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form = $(".require-validation"),
    inputSelector = ['.payment input[type=email]', '.payment input[type=password]', '.payment input[type=text]', 'input[type=file]', 'textarea'].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-expiry-month').val(),
          exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
      if (response.error) {
          $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('.payment input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
      }
  }
});

</script>
@endsection