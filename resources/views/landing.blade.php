<!DOCTYPE html>
<html lang= "en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <title>Destiny Bookstore</title>



<!-- css for landing page nav bar -->
    <link href="{{ url('css/landingNavBar.css') }}" rel="stylesheet" type="text/css">
<!-- end css nav bar -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">



    </head>

    

    <style>

    .font {
      font-family: 'Mukta Vaani', sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #FFFFFF;
    }

    .topnav a {
      float: right;
      display: block;
      color: #0C090A;
      text-align: center;
      padding: 1px 14px;
      text-decoration: none;
      font-size: 17px;
}

    .searchbar {
      padding-left: 550px;

    }

    .priceCart {
      float:right;
      padding: 0.5em;
    }

    .vl {
      border-right: 2px solid black;
      position: absolute;
      height: 100px;
      left: 50%;
      margin-left: -3px;
      bottom: 0;
    }


    * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}

a {
 text-decoration: none;
}
li {
 list-style: none;
}

.navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color: #0D1B2A;
 color: #FAF5EF;
 
}
.nav-links a {
 color: #FAF5EF;
}
/* LOGO */
.logo {
 font-size: 1.5rem;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}

.menu li {
 padding: 5px 14px;
}
/* DROPDOWN MENU */
.services {
 position: relative;
}
.dropdown {
 background-color: #566D7E;
 padding: 1em 0;
 position: absolute; /*WITH RESPECT TO PARENT*/
 display: none;
 border-radius: 8px;
 top: 35px;
 z-index: 10;
}
.dropdown li + li {
 margin-top: 10px;
}
.dropdown li {
 padding: 0.5em 1em;
 width: 8em;
 text-align: center;
}
.dropdown li:hover {
 background-color: #646D7E;
}
.services:hover .dropdown {
 display: block;
}

input[type=checkbox]{
 display: none;
}

/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 user-select: none;
}



@media (max-width: 780px) and (min-width: 150px) {
.menu {
 display:none;
 position: absolute;
 background-color:#728FCE;
 right: 0;
 left: 0;
 text-align: center;
 padding: 16px 0;
}

.menu li + li {
 margin-top: 12px;
}
input[type=checkbox]:checked ~ .menu{
 display: block;
}
.hamburger {
 display: block;
}
.dropdown {
 left: 50%;
 top: 30px;
 transform: translateX(35%);
}
.dropdown li:hover {
 background-color: #646D7E;
}


}

/*.search-bar input,
.search-btn,
.search-btn:before,
.search-btn:after {
	transition: all 0.3s ease-out;
}
.search-bar input,
.search-btn {
	width: 3em;
	height: 3em;
}
.search-bar input:invalid:not(:focus),
.search-btn {
	cursor: pointer;
}
.search-bar,
.search-bar input:focus,
.search-bar input:valid  {
	width: 60%;
}
.search-bar input:focus,
.search-bar input:not(:focus) + .search-btn:focus {
	outline: transparent;
}
.search-bar {
  float: left;
	padding: 0.5em;
	max-width: 100em;
}
.search-bar input {
	background: transparent;
	border-radius: 1.5em;
	box-shadow: 0 0 0 0.4em #171717 inset;
	padding: 0.75em;
	transform: translate(0.5em,0.5em) scale(0.5);
	transform-origin: 100% 0;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}
.search-bar input::-webkit-search-decoration {
	-webkit-appearance: none;
}
.search-bar input:focus,
.search-bar input:valid {
	background: #fff;
	border-radius: 0.375em 0 0 0.375em;
	box-shadow: 0 0 0 0.1em #d9d9d9 inset;
	transform: scale(1);
}
.search-btn {
	background: #171717;
	border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
	padding: 0.75em;
	position: relative;
	transform: translate(0.25em,0.25em) rotate(45deg) scale(0.25,0.125);
	transform-origin: 0 50%;
}
.search-btn:before,
.search-btn:after {
	content: "";
	display: block;
	opacity: 0;
	position: absolute;
}
.search-btn:before {
	border-radius: 50%;
	box-shadow: 0 0 0 0.2em #f1f1f1 inset;
	top: 0.75em;
	left: 0.75em;
	width: 1.2em;
	height: 1.2em;
}
.search-btn:after {
	background: #f1f1f1;
	border-radius: 0 0.25em 0.25em 0;
	top: 51%;
	left: 51%;
	width: 0.75em;
	height: 0.25em;
	transform: translate(0.2em,0) rotate(45deg);
	transform-origin: 0 50%;
}
.search-btn span {
	display: inline-block;
	overflow: hidden;
	width: 1px;
	height: 1px;
}

 Active state 
.search-bar input:focus + .search-btn,
.search-bar input:valid + .search-btn {
	background: #2762f3;
	border-radius: 0 0.375em 0.375em 0;
	transform: scale(1);
}
.search-bar input:focus + .search-btn:before,
.search-bar input:focus + .search-btn:after,
.search-bar input:valid + .search-btn:before,
.search-bar input:valid + .search-btn:after {
	opacity: 1;
}
.search-bar input:focus + .search-btn:hover,
.search-bar input:valid + .search-btn:hover,
.search-bar input:valid:not(:focus) + .search-btn:focus {
	background: #0c48db;
}
.search-bar input:focus + .search-btn:active,
.search-bar input:valid + .search-btn:active {
	transform: translateY(1px);
}
*/
@media screen and (prefers-color-scheme: dark) {

	.search-bar input {
		box-shadow: 0 0 0 0.4em #f1f1f1 inset;
	}
	.search-bar input:focus,
	.search-bar input:valid {
		background: #3d3d3d;
		box-shadow: 0 0 0 0.1em #3d3d3d inset;
	}
	.search-btn {
		background: #f1f1f1;
	}
}

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;

}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}



@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}



.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}



/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


.searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 250px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }

    </style>

    <body>

      <!-- top -->

      <nav class="navbar">
        <!-- logo and name -->

        <div class="logo">Destiny Bookstore</div>

        <!-- all nav bar -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          
          <!-- nav bar -->
          <div class="menu">
            <li>

            <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>

            </li>
            <li class="services">
              <a href="#">BOOKS <i class="bi bi-caret-down-fill"></i></a>

              <div class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">FICTION</a>
              <a class="dropdown-item" href="#">NON-FICTION</a>
              <a class="dropdown-item" href="#">CHILDREN BOOK</a>
              <a class="dropdown-item" href="#">REVISION BOOK</a>
            </div>
              <!-- book drop
              <ul class="dropdown">
                <li><a href="#">FICTION</a></li>
                <li><a href="#">NON-FICTION</a></li>
                <li><a href="#">CHILDREN BOOK</a></li>
                <li><a href="#">REVISION BOOK</a></li>
              </ul>-->
            </li>

            <li><a href="#">STATIONARY</a></li>
            <li><a href="#">NEW ARRIVALS </a></li>
            <li><a href="#">LOG IN/ SIGN UP <i class="bi bi-person-circle"></i></a></li>


          </div>
        </ul>
      </nav>

      <!--shopping cart -->
    <div class="priceCart">
        <p class="totalPrice" style="font-size:15px">RM 12.50  <i class="bi bi-cart-fill" style="font-size:30px" href="#"></i></p>
      </div>
    <!--end shopping cart -->

      <!-- search bar -->

      <form action="" class="search-bar">
        <input type="search" name="search" pattern=".*\S.*" required placeholder="">
        <button class="search-btn" type="submit">

          <span>Search</span>

    </button>

  </form>

  <!-- end search -->

<!-- end of top -->

<br>
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/add_category_wallpaper.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/add_stationery_category_wallpaper.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/add_category_wallpaper.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<br>

<!-- slide card -->
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h3 class="mb-3">NEW ARRIVALS</h3>
      </div>
      <div class="col-6 text-right">
        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
          <i class="fa fa-arrow-left"></i>
        </a>
        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
          <i class="fa fa-arrow-right"></i>
        </a>
      </div>
      <div class="col-12">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>


                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            
            <div class="carousel-item">
              <div class="row">

                                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            
            <div class="carousel-item">
              <div class="row">
                           <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      <!--button -->
                      <button type="button" class="responsive-content btn btn-primary">Test Add cart</button>
                      <!-- end button -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<!-- end slide card -->



<!-- footer -->
<div class="footer-dark">
      <footer>``
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4 item">
                      <h3>Operation Hour</h3>
                      <ul>
                          <li>Monday to Friday : 9am - 10pm</li>
                          <li>=Saturday to Sunday: 10am - 10pm</li>

                      </ul>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4 item">
                      <h3>Contact Us</h3>
                      <ul>
                          <li>xxxbookstore@gmail.com</li>
                          <li>+012345678</li>

                      </ul>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4 item">
                      <h3>About Us</h3>
                      <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                  </div>
                </div>

              <p class="copyright">Company Name © 2018</p>

            </div>
  </footer>
</div>
<!-- end footer -->

    </body>

</html>
