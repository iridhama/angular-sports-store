
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta content="Flatroshop online shopping point" name="description">
    <meta content="logoby.us" name="author">
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/ico.png" rel="shortcut icon">
    <title>Sports Store</title>

    <!-- Reset CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/normalize.css" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Iview Slider CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/iview.css" rel="stylesheet">

    <!--	Responsive 3D Menu	-->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/menu3d.css" rel="stylesheet"/>

    <!-- Animations -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/animate.css" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/custom.css" rel="stylesheet" type="text/css" />

    <!-- Style Switcher -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/style-switch.css" rel="stylesheet" type="text/css"/>

    <!-- Color -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/skin/color.css" id="colorstyle" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script> <script src="js/respond.min.js"></script> <![endif]-->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/bootstrap-select.js"></script>

    <!-- Custom Scripts -->
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/scripts.js"></script>

    <!-- MegaMenu -->
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/menu3d.js" type="text/javascript"></script>

    <!-- iView Slider -->
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.easing.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/iview.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/retina-1.1.0.min.js" type="text/javascript"></script>

    <!--[if IE 8]>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/selectivizr.js"></script>
    <![endif]-->

</head>

<body>
<!-- Header -->
<header>
<!-- Top Heading Bar -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="topheadrow">
                <ul class="nav nav-pills pull-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#a">ENG <i class="fa fa-angle-down fa-fw"></i> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#a">ENG</a></li>
                            <li><a href="#a">JPN</a></li>
                            <li><a href="#a">CHI</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#a">USD <i class="fa fa-angle-down fa-fw"></i> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#a">USD</a></li>
                            <li><a href="#a">PKR</a></li>
                            <li><a href="#a">JPY</a></li>
                        </ul>
                    </li>
                    <li> <a href="#a"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-xs">My Cart</span></a> </li>
                    <li> <a href="#a"> <i class="fa fa-heart fa-fw"></i> <span class="hidden-xs">Wishlist(0)</span></a> </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <i class="fa fa-user fa-fw"></i> <span class="hidden-xs"> Login</span></a>
                        <div class="loginbox dropdown-menu"> <span class="form-header">Login</span>
                            <form>
                                <div class="form-group"> <i class="fa fa-user fa-fw"></i>
                                    <input class="form-control" id="InputUserName" placeholder="Username" type="text" data-validation="required">
                                </div>
                                <div class="form-group"> <i class="fa fa-lock fa-fw"></i>
                                    <input class="form-control" id="InputPassword" placeholder="Password" type="password" data-validation="required">
                                </div>
                                <button class="btn medium color1 pull-right" type="submit">Login</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Top Heading Bar -->

<div class="f-space20"></div>
<!-- Logo and Search -->
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-3 col-xs-12">
            <div class="logo"> <a href="index.html" title="Flatro Template"><!-- <img alt="Flatro - Responsive Metro Inspired Flat ECommerce theme" src="images/logo2.png"> -->
                    <div class="logoimage"><i class="fa fa-shopping-cart fa-fw"></i></div>
                    <div class="logotext"><span><strong>FLATRO</strong></span><span>SHOP</span></div>
                    <span class="slogan">ONLINE STORE</span></a> </div>
        </div>
        <!-- end: logo -->
        <div class="visible-xs f-space20"></div>
        <!-- search -->
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right">
            <div class="searchbar">
                <form action="#">
                    <ul class="pull-left">
                        <li class="input-prepend dropdown" data-select="true"> <a class="add-on dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <span class="dropdown-display">All
                Categories</span> <i class="fa fa-sort fa-fw"></i> </a>
                            <!-- this hidden field is used to contain the selected option from the dropdown -->
                            <input class="dropdown-field" type="hidden" value="All Categories"/>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#a" data-value="Men Wear">Men Wear</a></li>
                                <li><a href="#a" data-value="Women Wear">Women Wear</a></li>
                                <li><a href="#a" data-value="Music">Music</a></li>
                                <li><a href="#a" data-value="Mobile Phones">Mobile Phones</a></li>
                                <li><a href="#a" data-value="Computers">Computers</a></li>
                                <li><a href="#a" data-value="Gaming">Gaming</a></li>
                                <li><a href="#a" data-value="Gift Ideas">Gift Ideas</a></li>
                                <li><a href="#a" data-value="All Categories">All Categories</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="searchbox pull-left">
                        <input class="searchinput" id="search" placeholder="Search..." type="search">
                        <button class="fa fa-search fa-fw" type="submit"></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end: search -->

    </div>
</div>
<!-- end: Logo and Search -->
<div class="f-space20"></div>
<!-- Menu -->
<div class="container">
<div class="row clearfix">
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col">
    <div class="menu-heading"> <span> <i class="fa fa-bars"></i> Categories</span> </div>
    <!-- Mega Menu -->
    <div class="menu3dmega vertical" id="menuMega">
        <ul>
            <!-- Menu Item Links for Mobiles Only -->
            <li class="visible-xs"> <a href="index.html"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-right"></i> </a>
                <div class="dropdown-menu flyout-menu">
                    <!-- Sub Menu -->
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li> <a href="#a"><span>Account</span> <i class="fa fa-caret-right"></i> </a>
                            <ul class="dropdown-menu sub flyout-menu">
                                <li><a href="#a">Login/Register</a></li>
                                <li><a href="#a">My Orders</a></li>
                                <li><a href="#a">Wish list</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li> <a href="#a"><span>Product</span> <i class="fa fa-caret-right"></i> </a>
                            <ul class="dropdown-menu sub flyout-menu">
                                <li><a href="category-grid.html">Category Grid</a></li>
                                <li><a href="category-list.html">Category List</a></li>
                                <li><a href="product.html">Product Page</a> </li>
                            </ul>
                        </li>
                        <li><a href="cart.html">Shoping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="blog-single.html">Blog Post</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                    <!-- end: Sub Menu -->
                </div>
            </li>
            <!-- end: Menu Item -->
            <!-- Menu Item for Tablets and Computers Only-->
            <li class="hidden-xs"> <a href="#a"> <i class="fa fa-files-o"></i> <span>Pages</span> <i class="fa fa-angle-right"></i> </a>
                <div class="dropdown-menu flyout-menu">
                    <!-- Sub Menu -->
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Post</a></li>
                        <li> <a href="#a"><span>Product</span> <i class="fa fa-caret-right"></i> </a>
                            <ul class="dropdown-menu sub flyout-menu">
                                <li><a href="category-grid.html">Category Grid</a></li>
                                <li><a href="category-list.html">Category List</a></li>
                                <li><a href="product.html">Product Page</a> </li>
                            </ul>
                        </li>
                        <li><a href="cart.html">Shoping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                    <!-- end: Sub Menu -->
                </div>
            </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-male"></i> <span>Men Wear</span> <i class="fa fa-angle-right"></i> </a>
                <div class="dropdown-menu">
                    <!-- Sub Menu -->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4"> <a class="menu-title" href="#a">Fashion</a>
                                <ul>
                                    <li><a href="#a">Clothing</a></li>
                                    <li><a href="#a">Shoes</a></li>
                                    <li><a href="#a">Handbags</a></li>
                                    <li><a href="#a">Accessories</a></li>
                                    <li><a href="#a">Luggage</a></li>
                                    <li><a href="#a">Jewelry</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4"> <a class="menu-title" href="#a">Shirts</a>
                                <ul>
                                    <li><a href="#a">Reguler Shirts</a></li>
                                    <li><a href="#a">Slim Shirts</a></li>
                                    <li><a href="#a">Fashion Shirts</a></li>
                                    <li><a href="#a">Black Shirts</a></li>
                                    <li><a href="#a">White Shirts</a></li>
                                    <li><a href="#a">Gray Shirts</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4"> <a class="menu-title" href="#a">Jeans</a>
                                <ul>
                                    <li><a href="#a">Reguler Jeans</a></li>
                                    <li><a href="#a">Slim-fit Jeans</a></li>
                                    <li><a href="#a">Loose Jeans</a></li>
                                    <li><a href="#a">Top Jeans</a></li>
                                    <li><a href="#a">New Jeans</a></li>
                                    <li><a href="#a">Color Jeans</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p> <a href="#a"><img alt="" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/menu-ad.jpg"></a> </p>
                            </div>
                        </div>
                    </div>
                    <!-- end: Sub Menu -->
                </div>
            </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-female"></i> <span>Women Wear</span> <i class="fa fa-angle-right"></i> </a>
                <div class="dropdown-menu">
                    <!-- Sub Menu -->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-5"> <a class="menu-title" href="#a">Fashion</a>
                                <ul>
                                    <li><a href="#a">Clothing</a></li>
                                    <li><a href="#a">Shoes</a></li>
                                    <li><a href="#a">Handbags</a></li>
                                    <li><a href="#a">Accessories</a></li>
                                    <li><a href="#a">Luggage</a></li>
                                    <li><a href="#a">Jewelry</a></li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="product-block">
                                    <div class="image">
                                        <div class="product-label product-sale"><span>SALE</span></div>
                                        <a class="img" href="product.html"><img alt="product info" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/products/product1.jpg" title="product title"></a> </div>
                                    <div class="product-meta">
                                        <div class="name"><a href="product.html">Ladies Stylish Handbag</a></div>
                                        <div class="big-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                                        <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="">View</a> <a class="btn btn-default btn-addtocart pull-right" href="">Add to
                                                Cart</a> </div>
                                        <div class="small-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="small-btns">
                                            <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                                            <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                                            <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                                        </div>
                                    </div>
                                    <div class="meta-back"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Sub Menu -->
                </div>
            </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-video-camera"></i> <span>Digital Camera</span></a> </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-mobile"></i> <span>Mobile Phones</span></a> </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-laptop"></i> <span>Computers</span></a> </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-gamepad"></i> <span>Gaming</span></a> </li>
            <!-- end: Menu Item -->
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-gift"></i> <span>Gift Ideas</span></a> </li>
            <!-- end: Menu Item -->
        </ul>
    </div>
    <!-- end: Mega Menu -->
</div>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 menu-col-2">
    <!-- Navigation Buttons/Quick Cart for Tablets and Desktop Only -->
    <div class="menu-links hidden-xs">
        <ul class="nav nav-pills nav-justified">
            <li> <a href="index.html"> <i class="fa fa-home fa-fw"></i> <span class="hidden-sm">Home</span></a> </li>
            <li> <a href="about.html"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm">About</span></a> </li>
            <li> <a href="blog.html"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm">Blog</span></a> </li>
            <li> <a href="contact.html"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm ">Contact</span></a> </li>
            <li class="dropdown"> <a href="cart.html"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-sm"> 5 items | $4530.00</span></a>
                <!-- Quick Cart -->
                <div class="dropdown-menu quick-cart">
                    <div class="qc-row qc-row-heading"> <span class="qc-col-qty">QTY.</span> <span class="qc-col-name">5 items in bag</span> <span class="qc-col-price">$4530.00</span> </div>
                    <div class="qc-row qc-row-item"> <span class="qc-col-qty">2</span> <span class="qc-col-name"><a href="#a">Women Fashion hot Wear item</a></span> <span class="qc-col-price">$500</span> <span class="qc-col-remove"> <i class="fa fa-times fa-fw"></i> </span> </div>
                    <div class="qc-row qc-row-item"> <span class="qc-col-qty">1</span> <span class="qc-col-name"><a href="#a">Women Fashion hot Wear item</a></span> <span class="qc-col-price">$800</span> <span class="qc-col-remove"> <i class="fa fa-times fa-fw"></i> </span> </div>
                    <div class="qc-row qc-row-item"> <span class="qc-col-qty">3</span> <span class="qc-col-name"><a href="#a">Women Fashion hot Wear item</a></span> <span class="qc-col-price">$252.25</span> <span class="qc-col-remove"> <i class="fa fa-times fa-fw"></i> </span> </div>
                    <div class="qc-row-bottom"><a class="btn qc-btn-viewcart" href="#a">view
                            cart</a><a class="btn qc-btn-checkout" href="#a">check
                            out</a></div>
                </div>
                <!-- end: Quick Cart -->
            </li>
        </ul>
    </div>
    <!-- end: Navigation Buttons/Quick Cart Tablets and large screens Only -->
    <!-- Top Searches for tablets and large screens -->
    <div class="top-searchs hidden-xs"><span class="title">Top
          Searches</span> <span class="links"> <a href="#a">Air Jordan Shoes 2010</a> | <a href="#a">Liz Claiborne</a> | <a href="#a">Tommy</a> | <a href="#a">J Crew ST Wedding</a> | <a href="#a">HTC One</a> | <a href="#a">Bridal</a></span> </div>
    <!-- end: Top Searches -->

    <!-- Quick Help for tablets and large screens -->
    <div class="quick-message hidden-xs">
        <div class="quick-box">
            <div class="quick-slide"><span class="title">Help</span>
                <div class="quickbox slide" id="quickbox">
                    <div class="carousel-inner">
                        <div class="item active"> <a href="#a"> <i class="fa fa-envelope fa-fw"></i> Quick Message</a> </div>
                        <div class="item"> <a href="#a"> <i class="fa fa-question-circle fa-fw"></i> FAQ</a> </div>
                        <div class="item"> <a href="#a"> <i class="fa fa-phone fa-fw"></i> (92)3009712255</a> </div>
                    </div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#quickbox"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#quickbox"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        </div>
    </div>
    <!-- end: Quick Help -->

    <div class="clearfix"></div>
    <!-- Iview Slider -->
    <div class="slider">
        <div id="iview">
            <!-- Slide 1 -->
            <div data-iview:image="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slide0.jpg" data-iview:pausetime="60000">
                <div class="iview-caption metro-box1 orange" data-transition="wipeUp" data-x="95" data-y="209"> <a href="about.html">
                        <div class="box-hover"></div>
                        <i class="fa fa-comment-o fa-fw"></i> <span>About us</span></a> </div>
                <div class="iview-caption metro-box1 blue" data-transition="wipeUp" data-x="266" data-y="209"> <a href="#a">
                        <div class="box-hover"></div>
                        <i class="fa fa-bullhorn fa-fw"></i> <span>Blog</span></a> </div>
                <div class="iview-caption metro-box2" data-transition="expandLeft" data-x="438" data-y="209">
                    <div class="monthlydeals">
                        <div class="monthly-deals slide" id="monthly-deals">
                            <div class="carousel-inner">
                                <div class="item active"> <a href="#a"> <img alt="" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slider-deal1.jpg"> </a> </div>
                                <div class="item"> <a href="#a"> <img alt="" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slider-deal2.jpg"> </a> </div>
                                <div class="item"> <a href="#a"> <img alt="" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slider-deal3.jpg"> </a> </div>
                                <div class="item"> <a href="#a"> <img alt="" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slider-deal4.jpg"> </a> </div>
                            </div>
                        </div>
                        <a class="left carousel-control" data-slide="prev" href="#monthly-deals"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#monthly-deals"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
                    <!--  <span>Deals of the month</span> -->
                </div>
                <div class="iview-caption metro-box1 purple" data-transition="wipeDown" data-x="438" data-y="37"> <a href="#a">
                        <div class="box-hover"></div>
                        <i class="fa fa-female fa-fw"></i> <span>Women Clothing</span></a> </div>
                <div class="iview-caption metro-box1 dark-blue" data-transition="wipeDown" data-x="610" data-y="37"> <a href="#a">
                        <div class="box-hover"></div>
                        <i class="fa fa-male fa-fw"></i> <span>Men Clothing</span></a> </div>
                <div class="iview-caption metro-heading" data-transition="expandLeft" data-x="95" data-y="40">
                    <h1>FLATRO ECOMMERCE HTML5</h1>
                </div>
                <div class="iview-caption metro-heading" data-transition="wipeLeft" data-x="95" data-y="100"> <span>Curabitur aliquet quam id dui posuere blandit. Ante ipsum primis
                in faucibus orci luctus et ultrices posuere cubilia Curae, Donec velit
                neque.<br>
                <a href="#a">read more</a></span> </div>
            </div>
            <!-- Slide 1 -->
            <div data-iview:image="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slide1.jpg">
                <div class="iview-caption caption1" data-transition="wipeUp" data-x="100" data-y="10">30%</div>
                <div class="iview-caption caption2" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="140">SPECIAL
                    OFFER</div>
                <div class="iview-caption caption3" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="200">Enthusiastically
                    orchestrate performance based<br>
                    experiences via granular networks.</div>
                <div class="iview-caption btn-more" data-transition="fade" data-x="100" data-y="280"><a href="#a">Learn
                        more</a></div>
            </div>
            <!-- Slide 2 -->
            <div data-iview:image="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/slide2.jpg">
                <div class="iview-caption caption3 btm-bar" data-height="107px" data-transition="expandRight" data-width="867px" data-x="0" data-y="300">
                    <h1><b>Metro style slider</b> bottom caption!</h1>
                    <p>Energistically enable enabled vortals for cross-unit niche markets.
                        Professionally leverage existing visionary customer service with virtual
                        collaboration and idea-sharing. Distinctively foster ethical content
                        whereas future-proof applications.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</header>
<!-- end: Header -->
<?php echo $content ?>

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12 shopinfo">
                <h4 class="title">FLATSHOP</h4>
                <p> This Efficiently negotiate robust communities with extensible systems.
                    Appropriately productize top-line leadership skills rather than team
                    building applications.</p>
                <p> Phosfluorescently extend highly efficient schemas with intermandated. </p>
            </div>
            <div class="col-sm-3 col-xs-12 footermenu">
                <h4 class="title">Information</h4>
                <ul>
                    <li class="item"> <a href="#a">Delivery Info</a></li>
                    <li class="item"> <a href="#a">FAQs</a></li>
                    <li class="item"> <a href="#a">Payment Instructions</a></li>
                    <li class="item"> <a href="#a">Request Product</a></li>
                    <li class="item"> <a href="#a">Vendor Registration</a></li>
                    <li class="item"> <a href="#a">Affiliates</a></li>
                    <li class="item"> <a href="#a">Gift Vouchers</a></li>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-12 footermenu">
                <h4 class="title">My account</h4>
                <ul>
                    <li class="item"> <a href="#a">My Account</a></li>
                    <li class="item"> <a href="#a">Order History</a></li>
                    <li class="item"> <a href="#a">Wish List</a></li>
                    <li class="item"> <a href="#a">Newsletter</a></li>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-12 getintouch">
                <h4 class="title">get in touch</h4>
                <ul>
                    <li>
                        <div class="icon"><i class="fa fa-map-marker fa-fw"></i></div>
                        <div class="c-info"> <span>3rd Avenue, NY, US<br>
              <a href="#a">Find us on map</a></span></div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa fa-envelope-o fa-fw"></i></div>
                        <div class="c-info"> <span>Email Us At:<br>
              <a href="#a">support@domain.com</a></span></div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa fa-phone fa-fw"></i></div>
                        <div class="c-info"> <span>24/7 Phone Support:<br>
              <a href="#a">+1 (888) 888 8888</a></span></div>
                    </li>
                    <li>
                        <div class="icon"> <i class="fa fa-skype fa-fw"></i></div>
                        <div class="c-info"> <span>Talk to Us:<br>
              <a href="#a">skypeid</a></span></div>
                    </li>
                </ul>
                <div class="social-icons">
                    <ul>
                        <li class="icon google-plus"><a href="#a"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li class="icon linkedin"><a href="#a"><i class="fa fa-linkedin fa-fw"></i></a></li>
                        <li class="icon twitter"><a href="#a"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li class="icon facebook"><a href="#a"><i class="fa fa-facebook fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-xs-12"> <span class="copytxt">&copy; Copyright 2013 by <a href="#a">Flatro</a> -  All rights reserved</span> <span class="btmlinks"><a href="#a">Return Policy</a> | <a href="#a">Privacy Policy</a> | <a href="#a">Terms of Use</a></span> </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 payment-icons"> <a href="#a"> <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/icons/discover.png" alt="discover"> </a> <a href="#a"> <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/icons/2co.png" alt="2co"> </a> <a href="#a"> <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/icons/paypal.png" alt="paypal"> </a> <a href="#a"> <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/icons/mastercard.png" alt="master card"> </a> <a href="#a"> <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/icons/visa.png" alt="visa card"> </a> <a href="#a"> <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/icons/moneybookers.png" alt="moneybookers"> </a> </div>
            </div>
        </div>
    </div>
</footer>
<!-- end: footer -->


<script>

    (function($) {
        "use strict";
        $('#menuMega').menu3d();
        $('#iview').iView({
            pauseTime: 10000,
            pauseOnHover: true,
            directionNavHoverOpacity: 0.6,
            timer: "360Bar",
            timerBg: '#2da5da',
            timerColor: '#fff',
            timerOpacity: 0.9,
            timerDiameter: 20,
            timerPadding: 1,
            touchNav: true,
            timerStroke: 2,
            timerBarStrokeColor: '#fff'
        });

        $('.quickbox').carousel({
            interval: 10000
        });
        $('#monthly-deals').carousel({
            interval: 3000
        });
        $('#productc2').carousel({
            interval: 4000
        });
        $('#tweets').carousel({
            interval: 5000
        });
    })(jQuery);



</script>
</body>
</html>