﻿<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Portfolio-Details | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
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
        <div class="ht__bradcaump__area bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Portfolio Details</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Portfolio-Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<div class="page-blog-details pt--80 pb--45 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail">
									<img src="images/portfolio/big-img/1.jpg" alt="portfolio images">
								</div>
								<div class="post_wrapper">
									<div class="post_header">
										<h2>All you need right here</h2>
										<ul class="post_author">
											<li>Posts by : <a href="#">Hastech</a></li>
											<li class="post-separator">/</li>
											<li>Mar 10 2018</li>
										</ul>
									</div>
									<div class="post_content">
										<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

										<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>

									</div>
									<ul class="blog_meta">
										<li><a href="#">3 comments</a></li>
										<li> / </li>
										<li>Tags:<span>fashion</span> <span>t-shirt</span> <span>white</span></li>
									</ul>

									<ul class="social__net--4 d-flex justify-content-start">
										<li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
									</ul>
								</div>
							</article>
							<div class="comment_respond">
								<h3 class="reply_title">Leave a Reply <small><a href="#">Cancel reply</a></small></h3>
								<form class="comment__form" action="#">
									<p>Your email address will not be published.Required fields are marked </p>
									<div class="input__box">
										<label>Comment</label>
										<textarea name="comment"></textarea>
									</div>
									<div class="input__wrapper clearfix">
										<div class="input__box name one--third">
											<label>Name</label>
											<input type="text" placeholder="name">
										</div>
										<div class="input__box email one--third">
											<label>email</label>
											<input type="email" placeholder="email">
										</div>
										<div class="input__box website one--third">
											<label>Website</label>
											<input type="text" placeholder="website">
										</div>
									</div>
									<div class="submite__btn">
										<a href="#">Post Comment</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Search</h3>
								<form action="#">
									<div class="form-input">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</div>
								</form>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget recent_widget">
								<h3 class="widget-title">Recent</h3>
								<div class="recent-posts">
									<ul>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Blog image post</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="images/blog/sm-img/2.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Post with Gallery</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="images/blog/sm-img/3.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Post with Video</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="images/blog/sm-img/4.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Maecenas ultricies</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="images/blog/sm-img/5.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Blog image post</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget comment_widget">
								<h3 class="widget-title">Comments</h3>
								<ul>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>demo says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>Admin says:</p>
												<a href="#">Curabitur aliquet pulvinar...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>Irin says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>Boighor says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>demo says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
								</ul>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget category_widget">
								<h3 class="widget-title">Categories</h3>
								<ul>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Creative</a></li>
									<li><a href="#">Electronics</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Flower</a></li>
									<li><a href="#">Books</a></li>
									<li><a href="#">Jewelle</a></li>
								</ul>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget archives_widget">
								<h3 class="widget-title">Archives</h3>
								<ul>
									<li><a href="#">March 2015</a></li>
									<li><a href="#">December 2014</a></li>
									<li><a href="#">November 2014</a></li>
									<li><a href="#">September 2014</a></li>
									<li><a href="#">August 2014</a></li>
								</ul>
							</aside>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('inc.footer')

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