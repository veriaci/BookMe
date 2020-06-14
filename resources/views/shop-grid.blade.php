<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop-Grid | BookMe: Online Secondhand Bookshop and Rental</title>
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
		<div class="box-search-content search_active block-bg close__top">
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
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shop Grid</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shop Grid</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
			                        <p>Showing 12 results</p>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
                                    @foreach($products as $product)
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-3 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
                                            <a class="first__img" href="{{ route('single.product', ['id' => $product->id]) }}"><img width="270" height="340" src="{{ $product->imagePath }}" alt="product image"></a>
                                            <a class="second__img animation1" href="{{ route('single.product', ['id' => $product->id]) }}"><img width="405" height="510" src="{{ $product->imagePath }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SELLER</span>
											</div>
										</div>
										<div class="product__content content--center">
                                            <h4><a href="{{ route('single.product', ['id' => $product->id]) }}"></a>{{ $product->title }}</h4>
                                            <ul class="prize d-flex">
                                                <li>Rp. {{ $product->price }}</li>
                                                <li class="old_prize"></li>
                                            </ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('product.addToCart', ['id' => $product->id]) }}"><i class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="wishlist" href="{{ url('/wishlist') }}"><i class="bi bi-shopping-cart-full"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
                                    @endforeach
	        					</div>
                                {{$products->links()}}
                                <!--
	        					<ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        						<li><a href="#">2</a></li>
	        						<li><a href="#">3</a></li>
	        						<li><a href="#">4</a></li>
	        						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
	        					</ul>
                                -->
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
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
