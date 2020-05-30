<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Checkout | BookMe: Online Secondhand Bookshop and Rental</title>
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
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6 col-12">
        				<div class="customer_details">
                            <div id="charge-error" class="aler alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
                                {{ Session::get('error') }}
                            </div>
                            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
        					<h3>Billing details</h3>
        					<div class="customar__field">
                                <div class="input_box">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" placeholder="Your Name" id="name" name="name" class="form-control" required>
                                </div>
        						<div class="input_box">
        							<label for="address">Address <span>*</span></label>
        							<input type="text" placeholder="Home Address" id="address" name="address" class="form-control" required>
        						</div>
                                <div class="input_box">
                                    <label for="card-name">Card Holder Name <span>*</span></label>
                                    <input type="text" id="card-name" class="form-control" required>
                                </div>
								<div class="input_box">
									<label for="card-number">Credit Card Number <span>*</span></label>
									<input type="text" id="card-number" class="form-control" required>
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label for="card-expiry-month">Expiration Month <span>*</span></label>
										<input type="text" id="card-expiry-month" class="form-control" required>
									</div>
									<div class="input_box space_between">
										<label for="card-expiry-year">Expiration Year <span>*</span></label>
										<input type="text" id="card-expiry-year" class="form-control" required>
									</div>
								</div>
                                <div class="input_box">
                                    <label for="card-cvc">CVC <span>*</span></label>
                                    <input type="text" id="card-cvc" class="form-control" required>
                                </div>
        					</div>
                                {{ csrf_field() }}
                                <div class="minicart-content-wrapper">
                                    <div class="mini_action checkout">
                                        <button type="submit" class="checkout__btn">Buy Now</button>
                                    </div>
                                </div>
                            </form>
        				</div>
        			</div>
                    <!-- YOUR ORDER area -->
        			<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__order__box">
        					<h3 class="onder__title">Your order</h3>
        					<ul class="order__total">
        						<li>Product</li>
        						<li>Total</li>
        					</ul>
        					<ul class="order_product">
                                @foreach($products as $product)
        						<li>{{ $product['item']['title'] }} × {{ $product['qty'] }}<span>Rp. {{ $product['price'] }}</span></li>
                                @endforeach
        					</ul>
                            <!--
        					<ul class="shipping__method">
        						<li>Cart Subtotal <span>$48.00</span></li>
        						<li>Shipping
        							<ul>
        								<li>
        									<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
        									<label>Flat Rate: $48.00</label>
        								</li>
        								<li>
        									<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
        									<label>Flat Rate: $48.00</label>
        								</li>
        							</ul>
        						</li>
        					</ul>
        					-->
        					<ul class="total__amount">
        						<li>Order Total <span>Rp. {{ $totalPrice }}</span></li>
        					</ul>
        				</div>
					    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Direct Bank Transfer</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</div>
						        </div>
						    </div>
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingTwo">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							            <span>Cheque Payment</span>
						          	</a>
						        </div>
						        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					          		<div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
						        </div>
						    </div>
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingThree">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							            <span>Cash on Delivery</span>
						          	</a>
						        </div>
						        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					          		<div class="payment-body">Pay with cash upon delivery.</div>
						        </div>
						    </div>
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingFour">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							            <span>PayPal <img src="images/icons/payment.png" alt="payment images"> </span>
						          	</a>
						        </div>
						        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					          		<div class="payment-body">Pay with cash upon delivery.</div>
						        </div>
						    </div>
					    </div>

        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Checkout Area -->
		@include('inc.footer')

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ URL::to('js/checkout.js') }}"></script>

</body>
</html>
