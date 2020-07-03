<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Marabou store</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('/img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::to('\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\meanmenu.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\meanmenu.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\slick.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\default.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('\css\responsive.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<!-- header start -->
<header>
    <div class="header-area header-3 pt-35 pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3 col-md-3 col-7 d-none d-lg-block d-flex align-items-center d-xs-disable">
                    <div class="basic-bar info-bar">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-4 col-5">
                    <div class="logo text-left text-md-center">
                        <a href="index.html"><img src="{{ URL::to('\img\logo_bg_free.PNG') }}" alt=""
                                                  style="width: 150px;"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 col-7 pl-0">
                    <div class="header-right header-right-3 f-right">
                        <ul>
                            <li class="search-btn">
                                <a class="search-btn nav-search search-trigger" href="#"><i
                                            class="fas fa-search"></i></a>
                            </li>
                            <li class="login-btn"><a href="login.html"><i class="far fa-user"></i></a></li>
                            <li class="d-shop-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span
                                            class="cart-count">3</span></a>
                                <ul class="minicart">
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html">
                                                <img src="img/product/pro1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="cart-content">
                                            <h3>
                                                <a href="product-details.html">Black & White Shoes</a>
                                            </h3>
                                            <div class="cart-price">
                                                <span class="new">$ 229.9</span>
                                                <span>
                                                            <del>$239.9</del>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="del-icon">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html">
                                                <img src="img/product/pro2.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="cart-content">
                                            <h3>
                                                <a href="product-details.html">Black & White Shoes</a>
                                            </h3>
                                            <div class="cart-price">
                                                <span class="new">$ 229.9</span>
                                                <span>
                                                            <del>$239.9</del>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="del-icon">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html">
                                                <img src="img/product/pro3.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="cart-content">
                                            <h3>
                                                <a href="product-details.html">Black & White Shoes</a>
                                            </h3>
                                            <div class="cart-price">
                                                <span class="new">$ 229.9</span>
                                                <span>
                                                            <del>$239.9</del>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="del-icon">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="total-price">
                                            <span class="f-left">Total:</span>
                                            <span class="f-right">$300.0</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkout-link">
                                            <a href="cart.html">Shopping Cart</a>
                                            <a class="red-color" href="checkout.html">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-xl-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-sep" data-background="img/bg/header-sep.png"></div>

    <!-- side menu -->
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side">
            <h2>
                <a href="{{ route('home') }}">
                    Marabou
                </a>
            </h2>
        </div>
        <div class="side-info mb-30">
            <div class="main-menu side-menu">
                <nav id="mobile-menu-3">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="mega-menu">
                            <a href="shop.html">Shop <i class="flaticon-right-arrow"></i></a>
                            <ul class="submenu ">
                                <li>
                                    <a href="#">Category View</a>
                                    <ul class="submenu  level-1">
                                        <li>
                                            <a href="shop.html">Shop 2 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-filter.html">Shop Filter Style</a>
                                        </li>
                                        <li>
                                            <a href="shop-full.html">Shop Full</a>
                                        </li>
                                        <li>
                                            <a href="shop-3-col.html">Shop 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-list.html">List View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Category View</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="shop-left-sidebar.html">Sidebar Left</a>
                                        </li>
                                        <li>
                                            <a href="shop-sidebar-right.html">Sidebar Right</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">My Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Products Types</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="product-simple.html">Simple Product</a>
                                        </li>
                                        <li>
                                            <a href="product-variable.html">Variable Product</a>
                                        </li>
                                        <li>
                                            <a href="product-upcoming.html">Product Upcoming</a>
                                        </li>
                                        <li>
                                            <a href="product-up-thumb.html">Thumb Top Product</a>
                                        </li>
                                        <li>
                                            <a href="product-sidebar.html">Product Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop.html">Products <i class="flaticon-right-arrow"></i></a>
                        </li>
                        <li>
                            <a href="blog.html">Blog <i class="flaticon-right-arrow"></i></a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog-2-col.html">Blog 2 Column</a>
                                </li>
                                <li>
                                    <a href="blog-2-col-mas.html">Blog 2 Col Masonry</a>
                                </li>
                                <li>
                                    <a href="blog-3-col.html">Blog 3 Column</a>
                                </li>
                                <li>
                                    <a href="blog-3-col-mas.html">Blog 3 Col Masonry</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                                <li>
                                    <a href="blog-details-audio.html">Blog Details Audio</a>
                                </li>
                                <li>
                                    <a href="blog-details-video.html">Blog Details Video</a>
                                </li>
                                <li>
                                    <a href="blog-details-gallery.html">Blog Details Gallery</a>
                                </li>
                                <li>
                                    <a href="blog-details-left-sidebar.html">Details Left Sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages <i class="flaticon-right-arrow"></i></a>
                            <ul class="submenu">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li>
                                    <a href="login.html">login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="cart.html">Shoping Cart</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact <i class="flaticon-right-arrow"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="side-info-bottom">
            <div class="side-cta">
                <p>info@maraboustore.com</p>
                <h4>(509) 3739 68 10</h4>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</header>
<style>
    .logo-side a{
        font-family: 'Rubik', sans-serif;
        color: #ffffff;
    }

</style>
<!-- header end -->