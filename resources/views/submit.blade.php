<!doctype html>

<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Faq | BookMe: Online Secondhand Bookshop and Rental</title>
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
                        	<h2 class="bradcaump-title">Faq</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Faq</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Faq Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="my__account__wrapper">
                <h3 class="account__title">{{ __('Register') }}</h3>

                <div class="account__form">
                    <form method="POST" action="contributed" enctype="multipart/form-data">
                        @csrf

                        <div class="input__box">
                            <label for="title">{{ __('Title') }}<span>*</span></label>

                            <div>
                                <input id="title" type="text" class="form-control " name="title" value="{{ old('title') }}"  autofocus>


                            </div>
                        </div>

                        <div class="input__box">
                            <label for="author">{{ __('Author') }}<span>*</span></label>

                            <div>
                                <input id="author" type="text" class="form-control " name="author" value="author" >


                            </div>
                        </div>

                        <div class="input__box">
                            <label for="description">Description<span>*</span></label>

                            <div>
                                <input id="description" type="text" class="form-controlr" name="description" >


                            </div>
                        </div>

                        <div class="input__box">
                            <label for="price" >{{ __('Price ') }}<span>*</span></label>

                            <div>
                                <input id="price" type="integer" class="form-control" name="price" >
                            </div>
                        </div>

                        <div class="input__box">
                        <label for="quantity">Stock:</label>
                         <input type="number" id="quantity" name="quantity" min="1" max="10" class="form-controlr">
                         </div>

                         <div class="input__box">
                         <span>Select Types:</span><br/>
                            <input type="checkbox" name='type' value="sell"> Sell <br/>
                            <input type="checkbox" name='type' value="rent"> Rent <br/>
                            </div>
                        <div class="input__box">

                            <label for="image" >{{ __('Image ') }}<span>*</span></label>

                            <div>
                                <input id="image" type="file" name="image" class="form-control"  />
                            </div>
                        </div>



                        <div class="form__btn">
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<?php
$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"bookme");
if (isset($_POST['submit']))
{   $name='';
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['quantity'];
    $type = $_POST['type'];

    if(isset($_FILES['image'])){
        $name = $_FILES['image']['name'];
        $temp= $_FILES['image']['tmp_name'];
        $location ="C:/xampp/htdocs/bookme/veriaci.github.io/public/images/books/";
        move_uploaded_file($temp,$location.$name);
    }


    //move_uploaded_file($_FILES['image']['temp_name'], "public/images/product/$image");
    $insert = "insert into products values('NULL','NULL','NULL','images/books/$name','$title','$author','$description','$price','$stock','$type')";
   // mysqli_query($con,$insert);
    if(mysqli_query($con,$insert)){
        echo "<script>alert('Product Submitted')</script>";

    }else{
        echo "<script>alert('Product Failed')</script>";
    }

}
?>
		<!-- End Faq Area -->
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
