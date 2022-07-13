<html>
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
            <link href="{{ url('css/checkout.css') }}" rel="stylesheet" type="text/css">
        </head>
        <script>
            function format(input){
                if(input.value.length === 1){
                    input.value = "0" + input.value;
                }
            }
        </script>

<body>

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
                            <input type="text" class="form-control name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control phoneNumber" id="phoneNumber">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Shipping Address</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="street">Street</label>
                            <input type="text" class="form-control street" id="street">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control name" id="city">
                        </div>
                        <div class="col-md-4">
                        <label for="state">State</label>
                        <select class="form-select" id="state">
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
                            <input type="number" class="form-control name" id="zipcode" step="any">
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <h5 class="card-title">Payment Information</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cardName">Name On Credit Card</label>
                            <input type="text" class="form-control cardName" id="cardName">
                        </div>
                        <div class="col-md-6">
                            <label for="cardNumber">Credit Card Number</label>
                            <input type="text" class="form-control cardNumber" id="cardNumber" autocomplete='off'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="CVC">CVC</label>
                            <input autocomplete='off' class='form-control CVC' placeholder='ex. 311' id="CVC" type='text'>
                        </div>
                        <div class="col-md-4">
                            <label for="expireMonth">Expire Month</label>
                            <input type="number" class="form-control expireMonth" id="expireMonth" placeholder='MM' onchange="if(this.value.length < 2) this.value = '0' + this.value;" min="1" max="12" step="1">
                        </div>
                        <div class="col-md-4">
                            <label for="expireMonth">Expire Year</label>
                            <input type="number" class="form-control expireMonth" id="expireMonth" placeholder='YYYY' min="2022">
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
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </td>
                                <td>1</td>
                                <td>RM39.00</td>
                                <td>RM39.00</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div style="text-align: right; color: gray;">
                        <p class="card-text">Total 1 item(s)<p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4 class="card-title">Grand Total :</h4>
                        </div>
                        <div class="col-md-6 col-sm-6" style="text-align: right;">
                            <h4 class="card-title">RM39.90</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark">Place Order</button>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
<br><br>
</body>
</html>