<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foodies - Restaurant Category Responsive Web Template - Home : W3Layouts</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <style>
        .dropbtn {
          background-color: #4CAF50;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
          background-color: #3e8e41;
        }

        #myInput {
          box-sizing: border-box;
          background-image: url('searchicon.png');
          background-position: 14px 12px;
          background-repeat: no-repeat;
          font-size: 16px;
          padding: 14px 20px 12px 45px;
          border: none;
          border-bottom: 1px solid #ddd;
        }

        #myInput:focus {outline: 3px solid #ddd;}

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f6f6f6;
          min-width: 230px;
          overflow: auto;
          border: 1px solid #ddd;
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
        </style>
    <link rel="stylesheet" href="{{ asset('foodies/') }}/assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <i class="fa fa-cutlery" aria-hidden="true"></i> Foodies
                    </a>
                </h1>
                <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="{{ (Request::segment(1) == '') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">A <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="{{ (Request::segment(1) == 'restaurant') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('restaurant.list') }}">Restoranlar <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us <span class="sr-only">(current)</span></a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in" style="color:green" aria-hidden="true"></i> Giriş <span class="sr-only">(current)</span></a>
                        </li>
                        @endguest
                    </ul>
                </div>
                <!-- search button -->
                <div class="search-right">
                    <a href="#search" title="search"><span class="fa fa-search fa-2x" style="color:green" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Here Your Favourite Food
                            </h4>
                            <form action="{{ route('restaurant.search') }}" method="GET" class="search-box">
                                <div class="input-search"> <span class="fa fa-search mr-2"
                                        aria-hidden="true"></span>
                                        <input type="search" placeholder="Enter Keyword"
                                        name="search" id="search" required="required" autofocus="">
                                </div>
                                <br>
                                <button type="submit" class="btn button-style">Search</button>
                            </form>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>

                    <!-- //search popup -->
                </div>
                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li class="nav-item">
                        <a class="nav-link"><button style="border-radius: 15px;border: 2px" class="btn btn-default"><i class="fa fa-sign-out" style="color: red" aria-hidden="true"></i> Çıxış</button> <span class="sr-only">(current)</span></a>
                    </li>
                </form>
                    @endauth
                <!-- //search button -->
            </nav>
        </div>
    </header>
    <!--//header-->
