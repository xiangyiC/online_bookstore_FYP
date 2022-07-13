<head>
    <link href="{{ url('css/admin_order_list.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <p style="float: right"><i class="bi bi-stopwatch"></i> Pending</p>
                    <h5 class="card-title">Order Item</h5>
                    <hr>
                    <table class="table" style="font-size: 0.9rem;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img class="img-fluid" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper"></td>
                                <td>111111111111<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit </td>
                                <td>1</td>
                                <td>RM39.00</td>
                                <td>RM39.00</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td><img class="img-fluid" src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" alt="bookstore-wallpaper"></td>
                                <td>111111111111<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit </td>
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
            </div>
            <br>
            <div class="container-fluid" style="background-color:white; padding:15px">
                <p style="float:left; padding-right:50px">Order Status:</p>
                <div class="form-check form-check-inline" style="padding-right:25px">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Pending</label>
                </div>
                <div class="form-check form-check-inline" style="padding-right:25px">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Completed</label>
                </div>
                <button type="button" class="btn btn-dark" style="margin-left: 20px; padding:auto 15px">Update</button>    
            </div>
            
        </div>
        
        <div class="col-md-5">
            <div class="card" style="font-size: 0.9rem;">
                <div class="card-body">
                    <h5 class="card-title">Order Details</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Order ID:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>xxxxxxxxxxxx</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Order Time:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>xxxxxxxxxxxx</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Payment Time:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>xxxxxxxxxxxx</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Customer Details</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Recipient:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>xxxxxxxxxxxx</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <p>Phone Number:</p>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <p>00000000000</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Shipping Address</h5>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              
            </div>
            <br>
        </div>
      
    </div>
</div>
<br><br>
@endsection