<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | BookMe: Online Secondhand Bookshop and Rental</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/bookme.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		@include('inc.navbar')
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Rent <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start Best Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
								<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ url('/singleProduct') }}">robin parrish</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
								<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
								<div class="hot__box color--2">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ url('/singleProduct') }}">The Remainng</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
								<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
								<ul class="prize d-flex">
									<li>$40.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
								<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ url('/singleProduct') }}">Lando</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$50.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
								<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/10.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ url('/singleProduct') }}">Doctor Wldo</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/11.jpg" alt="product image"></a>
								<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALER</span>
								</div>
							</div>
							<div class="product__content content--center content--center">
								<h4><a href="{{ url('/singleProduct') }}">Ghost</a></h4>
								<ul class="prize d-flex">
									<li>$50.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Start Single Product -->
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Stay With Us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area -->
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">BIOGRAPHIC</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a>
                        </div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{ url('/singleProduct') }}">Ghost</a></h4>
											<ul class="prize d-flex">
												<li>$50.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{ url('/singleProduct') }}">Ghost</a></h4>
											<ul class="prize d-flex">
												<li>$50.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Doctor Wldo</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Doctor Wldo</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Lando</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$50.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Lando</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$50.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-biographic" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/10.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-adventure" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/11.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-children" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/10.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/12.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-cook" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/10.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/3.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="{{ url('/singleProduct') }}"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ url('/singleProduct') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start Recent Post Area -->
		<section class="wn__recent__post bg--gray ptb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Our <span class="color--theme">Blog</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ url('/blogDetails') }}">International activities of the Frankfurt Book </a></h3>
								<p>We are proud to announce the very first the edition of the frankfurt news.We are proud to announce the very first of  edition of the fault frankfurt news for us.</p>
								<div class="post__time">
									<span class="day">Dec 06, 18</span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i>72</a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ url('/blogDetails') }}">Reading has a signficant info  number of benefits</a></h3>
								<p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
								<div class="post__time">
									<span class="day">Mar 08, 18</span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i>72</a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ url('/blogDetails') }}">The London Book Fair is to be packed with exciting </a></h3>
								<p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
								<div class="post__time">
									<span class="day">Nov 11, 18</span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i>72</a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Recent Post Area -->
		<!-- Best Sale Area -->
		<section class="best-seel-area pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center pb--50">
							<h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slider center">
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/1.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/2.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/3.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/4.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/5.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/6.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/7.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ url('/singleProduct') }}"><img src="images/best-sell-product/8.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="{{ url('/cart') }}"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
			</div>
		</section>
		<!-- Best Sale Area Area -->
		@include('inc.footer')
		@include('inc.quickview')
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
</body>
</html>