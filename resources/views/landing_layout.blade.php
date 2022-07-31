<!DOCTYPE html>
<html lang= "en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Destiny Bookstore</title>
  <!-- css for landing page nav bar -->
      <link href="{{ url('css/landing_navbar.css') }}" rel="stylesheet" type="text/css">
  <!-- end css nav bar -->
      <link href="{{ url('css/landing_footer.css') }}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">DESTINY BOOKSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">

            <div class="box">
            <form name="search">
                <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
            </form>
            <i class="bi bi-search"></i>
            </div>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                BOOKS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">FICTION</a></li>
                <li><a class="dropdown-item" href="#">NON-FICTION</a></li>
                <li><a class="dropdown-item" href="#">CHILDREN BOOK</a></li>
                <li><a class="dropdown-item" href="#">REVISION BOOK</a></li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">STATIONERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">LOG IN / SIGN UP</a>
            </li>
            <li class="nav-item cart">
              <a class="nav-link" href="#"><i class="bi bi-cart-fill" style="font-size: 1.2em"></i> <i class="bi bi-circle-fill cart-count" style="font-size: 0.7em"><span class="cart-num">1</span></i> <span style="font-size: 0.8em" class="price">RM19.90</span></a>
            </li>
            
          </ul>
        </div>
    </div>
  </nav>

<!-- end of top -->
<br>
<br>

@yield('customer_content')

<!-- footer -->
<div class="footer-dark">
      <footer>
          <div class="container-fluid">
              <div class="row  mx-3">
                  <div class="col-lg-4 col-sm-12 col-md-4 item">
                      <h3>Operation Hour</h3>
                      <ul>
                          <li>Monday to Friday : 9am - 10pm</li>
                          <li>Saturday to Sunday: 10am - 10pm</li>

                      </ul>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4 item">
                      <h3>Contact Us</h3>
                      <ul>
                          <li>DestinyBookstore@gmail.com</li>
                          <li>012-3456789</li>

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
