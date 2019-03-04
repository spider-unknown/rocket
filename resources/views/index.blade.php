<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Wordsmith</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('app/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<!-- header
================================================== -->
<header class="s-header header">

    <div class="header__logo">
        <a class="logo" href="index.html">
            <img src="{{asset('app/images/logo.svg')}}" alt="Homepage">
        </a>
    </div> <!-- end header__logo -->

    <a class="header__search-trigger" href="#0"></a>
    <div class="header__search">

        <form role="search" method="get" class="header__search-form" action="#">
            <label>
                <span class="hide-content">Search for:</span>
                <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>

        <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

    </div>  <!-- end header__search -->

    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="current"><a href="index.html" title="">Home</a></li>
            <li class="has-children">
                <a href="#0" title="">Categories</a>
                <ul class="sub-menu">
                    <li><a href="category.html">Lifestyle</a></li>
                </ul>
            </li>
        </ul> <!-- end header__nav -->

        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

    </nav> <!-- end header__nav-wrap -->

</header> <!-- s-header -->


<!-- featured
================================================== -->
<section class="s-featured">
</section> <!-- end s-featured -->


<!-- s-content
================================================== -->
<section class="s-content">

    <div class="row entries-wrap wide">
        <div class="entries">

            <article class="col-block">

                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a href="single-standard.html" class="item-entry__thumb-link">
                            <img src="images/thumbs/post/sydney-400.jpg"
                                 srcset="images/thumbs/post/sydney-400.jpg 1x, images/thumbs/post/sydney-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-entry__text">
                        <div class="item-entry__cat">
                            <a href="category.html">Travel</a>
                        </div>

                        <h1 class="item-entry__title"><a href="single-standard.html">Planning Your First Trip To Sydney.</a></h1>

                        <div class="item-entry__date">
                            <a href="single-standard.html">May 28, 2018</a>
                        </div>
                    </div>
                </div> <!-- item-entry -->

            </article> <!-- end article -->

        </div> <!-- end entries -->
    </div> <!-- end entries-wrap -->

</section> <!-- end s-content -->

<!-- Java Script
================================================== -->
<script src="{{asset('app/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('app/js/plugins.js')}}"></script>
<script src="{{asset('app/js/main.js')}}"></script>

</body>

</html>