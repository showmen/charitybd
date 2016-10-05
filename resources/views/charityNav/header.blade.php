<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- <title>Home-Page 3 || Charity</title> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->        
        <link rel="shortcut icon" type="image/x-icon" href="img\favicon.ico">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- master CSS
		============================================ -->			
        <link rel="stylesheet" href="{{asset('master.css')}}">
		<!-- modernizr js -->
        <script src="{{asset('js\vendor\modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!-- header-area start -->
        <header class="header-area">
            <div class="header-top hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="top-social top-social-green">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="top-srch-bx">
                                <input type="text" placeholder="Text Search">
                                <div class="button_search">
                                    <button title="Search" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="account-login">
                                <div class="accounts-login accounts-login-green">
                                    <a href="#"><span>Login</span></a>
                                    <div class="login-form">
                                        <form action="#">
                                            <div class="form_wrapper_body">
                                                <p class="login-username">
                                                    <label>
                                                        User or Email
                                                    </label>
                                                    <input type="text" placeholder="User or Email"> 
                                                </p>
                                                <p class="login-password">
                                                    <label>
                                                        Password
                                                    </label>
                                                    <input type="text" placeholder="Password">
                                                </p>
                                            </div>
                                            <div class="form_wrapper_footer form_wrapper_footer_green">
                                                <input class="button" type="submit" value="Login">
                                                <a class="button" href="#">Register</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="contacts-top">
                                <div class="contacts-supports contacts-supports-green">
                                    <span class="spprt-phone">
                                        <i class="fa fa-phone"></i>
                                        01973833508
                                    </span>
                                    <span class="support-email support-email-green">
                                        <i class="fa fa-envelope"></i>
                                        admin@bootexperts.com
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="index.htm"><img src="img\logo\logo_turquoise.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs">
                            <div class="main-menu">
                                <nav>
                                    <ul class="greens-menu">
                                        <li><a href="{{url('home')}}">Home</a></li>
                                        <li><a href="{{url('cause')}}">Causes</a></li>
                                        <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{url('postLanding')}}">Posts</a></li>
                                        <!-- <li><a href="blog.htm">Blog</a></li>
                                        <li class="parent">
                                            <a href="#">Pages</a>
                                            <div class="mega-menu">
                                                <span>
                                                    <a class="mm-title" href="#">page set 1</a>
                                                    <a href="shopping-cart.htm">Cart</a>
                                                    <a href="shop-leftsidebar.htm">Shop left sidebar</a>
                                                    <a href="shop-rightsidebar.htm">Shop right sidebar</a>
                                                    <a href="shop-list.htm">Shop list</a>
                                                    <a href="shop-fullwidth.htm">Shop fullwidth</a>
                                                </span>
                                                <span>
                                                    <a class="mm-title" href="#">page set 2</a>
                                                    <a href="blog-details.htm">Blog details</a>
                                                    <a href="checkout.htm">Checkout</a>
                                                    <a href="contact-us.htm">Contact us</a>
                                                    <a href="gallery.htm">Gallery</a>
                                                    <a href="my-account.htm">My account</a>
                                                </span>
                                                <span>
                                                    <a class="mm-title" href="#">page set 3</a>
                                                    <a href="services.htm">Services</a>
                                                    <a href="single-product.htm">Single product</a>
                                                    <a href="team-member.htm">Team member</a>
                                                    <a href="wishlist.htm">Wishlist</a>
                                                    <a href="404.htm">404</a>
                                                </span>
                                            </div>
                                        </li>  --> 
                                        <li><a href="#"><span class="donate-tdy donate-tdy-green">Donate Today!</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>