<head>
    <link href="{{ url('css/admin_profile.css') }}" rel="stylesheet" type="text/css">
</head>
@extends('admin_layout')
@section('content')
<div class="container-fluid profile">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 about-me" >
            <img src="{{asset('images/hexiao.jpg')}}" class="img-fluid" alt="">
            <h6 class="about-me-title">About Me</h6>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 user-information" >
            <div class="basic-information">
                <a class="edit-profile">Edit Profile</a>
                <h5>User Name</h5>
                <p class="role">Admin</p>
                <p class="birthday">2002.11.06 <i class="bi bi-gift"></i></p>
            </div>
            <div class="contact">
                <h6 class="contact-title">Contact Information</h6>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" >
                        <p class="bold">Email: </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8" >
                        <p>xxx@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" >
                        <p class="bold">Phone Number: </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8" >
                        <p>012-3456789</p>
                    </div>
                </div>
            </div>

            <div class="address">
                <h6 class="address-title">Address</h6>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" >
                        <p class="bold">Street: </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8" >
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" >
                        <p class="bold">City: </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8" >
                        <p>Gelang patah</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" >
                        <p class="bold">State: </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8" >
                        <p>Johor</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12" >
                        <p class="bold">Zip Code: </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12" >
                        <p>Gelang patah</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection