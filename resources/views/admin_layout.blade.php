<!DOCTYPE html>
    <html lang="en">
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
        <script>
            $(document).ready(function(){
                
                var book_open = localStorage.getItem('bookDropdownWasOpen')
                var stationery_open = localStorage.getItem('stationeryDropdownWasOpen')

                $(".dashboard").click(function(){
                    localStorage.removeItem("bookDropdownWasOpen");   
                    localStorage.removeItem("stationeryDropdownWasOpen");
                });

                $(".order").click(function(){
                    localStorage.removeItem("bookDropdownWasOpen");   
                    localStorage.removeItem("stationeryDropdownWasOpen");
                });

                $(".customer").click(function(){
                    localStorage.removeItem("bookDropdownWasOpen");   
                    localStorage.removeItem("stationeryDropdownWasOpen");
                });

                if(book_open){
                    $(".sidebar-submenu-show-book").toggleClass("sidebar-submenu-show-show-book");
                    $(".sidebar-dropdown-link-book").toggleClass("sidebar-dropdown-link-active-book");
                    $('.sidebar-submenu-show-show-stationery').removeClass('sidebar-submenu-show-show-stationery');
                    $('.sidebar-dropdown-link-active-stationery').removeClass('sidebar-dropdown-link-active-stationery');
                    
                }if(stationery_open){
                    $(".sidebar-submenu-show-stationery").toggleClass("sidebar-submenu-show-show-stationery");
                    $(".sidebar-dropdown-link-stationery").toggleClass("sidebar-dropdown-link-active-stationery");
                    $('.sidebar-submenu-show-show-book').removeClass('sidebar-submenu-show-show-book');
                    $('.sidebar-dropdown-link-active-book').removeClass('sidebar-dropdown-link-active-book');
                }
                
                $(".sidebar-dropdown-link-book").click(function(){
                    $(".sidebar-submenu-show-book").toggleClass("sidebar-submenu-show-show-book");
                    $(".sidebar-dropdown-link-book").toggleClass("sidebar-dropdown-link-active-book");
                    $('.sidebar-submenu-show-show-stationery').removeClass('sidebar-submenu-show-show-stationery');
                    $('.sidebar-dropdown-link-active-stationery').removeClass('sidebar-dropdown-link-active-stationery');
                    localStorage.setItem('bookDropdownWasOpen', 'true');
                    localStorage.removeItem("stationeryDropdownWasOpen");
                });
                $(".sidebar-dropdown-link-stationery").click(function(){
                    $(".sidebar-submenu-show-stationery").toggleClass("sidebar-submenu-show-show-stationery");
                    $(".sidebar-dropdown-link-stationery").toggleClass("sidebar-dropdown-link-active-stationery");
                    $('.sidebar-submenu-show-show-book').removeClass('sidebar-submenu-show-show-book');
                    $('.sidebar-dropdown-link-active-book').removeClass('sidebar-dropdown-link-active-book');
                    localStorage.setItem('stationeryDropdownWasOpen', 'true');
                });

                $(".sidebar-show").click(function(){
                    $(".sidebar").toggleClass("sidebar-hide");   
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
                                <a class="sidebar-link dashboard" href="{{ route('admin_dashboard') }}">
                                <i class="bi bi-columns"></i><span class="align-middle"> Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-item sidebar-dropdown">
                                <a class="sidebar-link sidebar-dropdown-link-book">
                                <i class="bi bi-book"></i> <span class="align-middle">Book</span>
                                    <i class="bi bi-caret-down-fill book-arrow-down"></i>
                                </a>
                                
                                <div class="sidebar-submenu">
                                    <ul class="sidebar-submenu-show-book">
                                        <li>
                                            <a href="{{ route('admin_add_book_category') }}" class="sidebar-link droplink-new-book-category"><i class="bi bi-plus-circle"></i> New Category</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_book_category_list') }}" class="sidebar-link droplink-book-category-list"><i class="bi bi-list-ul"></i> Category List</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_add_book') }}" class="sidebar-link droplink-new-book"><i class="bi bi-plus-square"></i> New Book</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_book_list') }}" class="sidebar-link droplink-book-list"><i class="bi bi-list-ol"></i> Book List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="sidebar-item sidebar-dropdown">
                                <a class="sidebar-link sidebar-dropdown-link-stationery">
                                <i class="bi bi-brush"></i><span class="align-middle"> Stationery</span>
                                    <i class="bi bi-caret-down-fill stationery-arrow-down"></i>
                                </a>
                                
                                <div class="sidebar-submenu">
                                    <ul class="sidebar-submenu-show-stationery">
                                        <li>
                                            <a href="{{ route('admin_add_stationery_category') }}" class="sidebar-link droplink-new-stationery-category"><i class="bi bi-plus-circle"></i> New Category</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_stationery_category_list') }}" class="sidebar-link droplink-stationery-category-list"><i class="bi bi-list-ul"></i> Category List</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_add_stationery') }}" class="sidebar-link droplink-new-stationery"><i class="bi bi-plus-square"></i> New Stationery</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_stationery_list') }}" class="sidebar-link droplink-stationery-list"><i class="bi bi-list-ol"></i> Stationery List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link order" href="index.html">
                                <i class="bi bi-card-heading"></i> <span class="align-middle">Order</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link customer" href="index.html">
                                <i class="bi bi-card-heading"></i> <span class="align-middle">Customer</span>
                                </a>
                            </li>    
                        </ul>

                    </div>
                </nav>

                <!--Navigation Bar-->
                <div class="main">
                    <nav class="navbar navbar-expand navbar-light navbar-bg">
                        <a class="sidebar-toggle sidebar-show">
                            <i class="bi bi-list hamburger"></i>
                        </a>

                        <div class="navbar-collapse collapse">
                            <ul class="navbar-nav navbar-align">
                                <li class="nav-item">
                                    <a class="nav-link home">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block user rounded me-1" href="#" data-bs-toggle="dropdown">
                                        <img src="{{asset('images/hexiao.jpg')}}" class="avatar img-fluid rounded me-1" alt="user" /> <span class="text-dark username">He Xiao</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end about-user">
                                        <a class="dropdown-item" href=""><i class="bi bi-person-bounding-box"></i>	Profile</a>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#user-manual"><i class="bi bi-book"></i>	User Mannual</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i>{{ __('Logout') }}</a>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}

                    </div>
                    @elseif(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}

                    </div>
                    @endif
                    
                    @yield('content')
                </div>
               

            </div>    
        </body>
    <html>