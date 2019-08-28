<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixelgeeklab.com/html/flatize/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2019 03:24:01 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= isset($this->title) ? $this->title : 'Shop'; ?></title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="<?php echo URL;?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Icon Fonts -->
	<link href="<?php echo URL;?>public/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Owl Carousel Assets -->
	<link href="<?php echo URL;?>public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo URL;?>public/vendor/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="<?php echo URL;?>public/vendor/owl-carousel/owl.transitions.css" rel="stylesheet">
	
	<!-- bxslider -->
	<link href="<?php echo URL;?>public/vendor/bxslider/jquery.bxslider.css" rel="stylesheet">
	<!-- flexslider -->
	<link rel="stylesheet" href="<?php echo URL;?>public/vendor/flexslider/flexslider.css" media="screen">

	<!-- Theme -->
	<link href="<?php echo URL;?>public/css/theme-animate.css" rel="stylesheet">
	<link href="<?php echo URL;?>public/css/theme-elements.css" rel="stylesheet">
	<link href="<?php echo URL;?>public/css/theme-blog.css" rel="stylesheet">
	<link href="<?php echo URL;?>public/css/theme-shop.css" rel="stylesheet">
	<link href="<?php echo URL;?>public/css/theme.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/main.css">
	<!-- Style Switcher-->
	<link rel="stylesheet" href="<?php echo URL;?>public/style-switcher/css/style-switcher.css">
	<link href="<?php echo URL;?>public/css/colors/cyan/style.html" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="<?php echo URL;?>public/css/theme-responsive.css" rel="stylesheet">

	
</head>
<body>
	<div id="page">
		<header>
			<div id="top">
				<div class="container">
					<p class="pull-left text-note">Free Shipping on all U.S orders over $50</p>
					<ul class="nav nav-pills nav-top navbar-right">
						<li class="dropdown langs">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo URL;?>public/images/flags/en.gif" alt="English"> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/ar.gif" alt="AR"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/ca.gif" alt="CA"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/de.gif" alt="DE"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/es.gif" alt="ES"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/et.gif" alt="ET"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/fa.gif" alt="FA"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/fr.gif" alt="FR"></a></li>
								<li><a href="#"><img src="<?php echo URL;?>public/images/flags/ja.gif" alt="JA"></a></li>
							</ul>
						</li>
						<li class="dropdown my-account">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Currency <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">My Dashboard</a></li>
								<li><a href="#">Account Information</a></li>
								<li><a href="#">Address Book</a></li>
								<li><a href="#">My Orders</a></li>
							</ul>
						</li>
						<li class="dropdown my-account">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">My Dashboard</a></li>
								<li><a href="#">Account Information</a></li>
								<li><a href="#">Address Book</a></li>
								<li><a href="#">My Orders</a></li>
							</ul>
						</li>
						<li class="dropdown menu-shop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> <span class="shopping-bag">9</span></a>
							<div class="dropdown-menu">
								<h3>Recently added item(s)</h3>
								<ul class="list-unstyled list-thumbs-pro">
									<li class="product">
										<div class="product-thumb-info">
											<a href="#" class="product-remove"><i class="fa fa-trash-o"></i></a>
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?php echo URL;?>public/images/content/products/product-1.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Denim shirt</a></h4>
												<span class="item-cat"><small><a href="#">Jackets</a></small></span>
												<span class="price">29.99 USD</span>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-thumb-info">
											<a href="#" class="product-remove"><i class="fa fa-trash-o"></i></a>
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?php echo URL;?>public/images/content/products/product-2.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Poplin shirt with fine pleated bands</a></h4>
												<span class="item-cat"><small><a href="#">Jackets</a></small></span>
												<span class="price">29.99 USD</span>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-thumb-info">
											<a href="#" class="product-remove"><i class="fa fa-trash-o"></i></a>
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?php echo URL;?>public/images/content/products/product-3.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Contrasting shirt</a></h4>
												<span class="item-cat"><small><a href="#">Jackets</a></small></span>
												<span class="price">29.99 USD</span>
											</div>
										</div>
									</li>
								</ul>
								<ul class="list-inline cart-subtotals text-right">
									<li class="cart-subtotal"><strong>Subtotal</strong></li>
									<li class="price"><span class="amount"><strong>$431</strong></span></li>
								</ul>
								<div class="cart-buttons text-right">
									<button class="btn btn-white">View Cart</button>
									<button class="btn btn-primary">Checkout</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-default navbar-main navbar-main-slide" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="logo" href="<?php echo URL;?>"><img src="<?php echo URL;?>public/images/logo.png" alt="Flatize"></a> </div>
					

					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">

							<li class="dropdown"><a href="<?php echo URL;?>">Home</a>
							
							<li class="dropdown"><a href="<?php echo URL;?>category">Product</a>
								<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a> -->
								<ul class="dropdown-menu">
									<?php foreach($this->categories as $category){?>
										<li><a href="index-2.html"><?php echo $category['name'];?></a></li>
									<?php }?>			
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="#">Shop</a>
										<ul class="dropdown-menu">
											<li><a href="shop-full-width.html">Shop - Full Width</a></li>
											<li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
											<li><a href="shop-list-sidebar.html">Shop List - Sidebar</a></li>
											<li><a href="shop-product-detail1.html">Shop - Product Detail 1</a></li>
											<li><a href="shop-product-detail2.html">Shop - Product Detail 2</a></li>
											<li><a href="shop-cart-full.html">Shop - Cart Full</a></li>
											<li><a href="shop-cart-sidebar.html">Shop - Cart Sidebar</a></li>
											<li><a href="shop-checkout.html">Shop - Checkout</a></li>
										</ul>
									</li>
									<li><a href="index-white.html">Mega Menu White</a></li>
									<li><a href="page-404.html">404 Error Page</a></li>									
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
								<ul class="dropdown-menu">
									<li><a href="page-contact1.html">Contact Version 1</a></li>
									<li><a href="page-contact2.html">Contact Version 2</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
								<ul class="dropdown-menu">
									<li><a href="page-contact1.html">Đăng kí</a></li>
									<li><a href="page-contact2.html">Đăng nhập</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>