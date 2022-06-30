<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Destiny Bookstore</title>
            <link href="{{ url('css/admin_sidebar.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ url('css/hamburger.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ url('css/admin_navbar.css') }}" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        </head>
        <script>

            function openNav() {
                document.querySelector('.sidebar').style.display = 'block';
                document.querySelector('.hamburger').style.display = 'none';
            }

            function closeNav() {
                var sidebar = document.querySelector('.sidebar');
                sidebar.style.display = 'none';	
                document.querySelector('.hamburger').style.display = 'block';
            }

            $(document).ready(function(){
                $(".sidebar-dropdown-link").click(function(){
                    $(".sidebar-submenu-show").toggleClass("sidebar-submenu-show-show");
                    $(".sidebar-dropdown-link").toggleClass("sidebar-dropdown-link-active");
                });
            });

        </script>
        <body>
            <div class="wrapper">
                <nav id="sidebar" class="sidebar">
                    <div class="sidebar-content">
                        <div class="sidebar-brand">
                            <span class="align-middle">Destiny Bookstore</span>
                        </div>

                        <ul class="sidebar-nav">
                            <li class="sidebar-header">
                                Pages
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                <i class="bi bi-card-heading"></i> <span class="align-middle">Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-item sidebar-dropdown">
                                <a class="sidebar-link sidebar-dropdown-link">
                                <i class="bi bi-tag"></i></i> <span class="align-middle">Book</span>
                                    <i class="bi bi-caret-down-fill book-arrow-down"></i>
                                </a>
                                
                                <div class="sidebar-submenu">
                                    <ul class="sidebar-submenu-show">
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-plus-circle"></i> Add Book Category</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-x-circle"></i> Delete Book Category</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Edit Book Category</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Add Book</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Delete Book</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Edit Book</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="sidebar-item sidebar-dropdown">
                                <a class="sidebar-link sidebar-dropdown-link">
                                <i class="bi bi-tag"></i></i> <span class="align-middle">Stationery</span>
                                    <i class="bi bi-caret-down-fill stationery-arrow-down"></i>
                                </a>
                                
                                <div class="sidebar-submenu">
                                    <ul class="sidebar-submenu-show">
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-plus-square"></i> Add Stationery Category</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-x-square"></i> Delete Stationery Category</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Edit Stationery Category</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Add Stationery</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Delete Stationery</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-link"><i class="bi bi-pencil"></i> Edit Stationery</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                <i class="bi bi-card-heading"></i> <span class="align-middle">Order</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                <i class="bi bi-card-heading"></i> <span class="align-middle">Customer</span>
                                </a>
                            </li>    
                        </ul>

                    </div>
                </nav>
            </div>    
        </body>

    <html>