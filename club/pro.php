<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];
?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Soccer HTML5 Template</title>
<!-- StyleSheets -->
<link rel="stylesheet" href="../temp/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../temp/css/main.css">	
<link rel="stylesheet" href="../temp/css/icomoon.css">
<link rel="stylesheet" href="../temp/css/animate.css">
<link rel="stylesheet" href="../temp/css/transition.css">
<link rel="stylesheet" href="../temp/css/font-awesome.min.css">
<link rel="stylesheet" href="../temp/style.css">
<link rel="stylesheet" href="../temp/css/color.css">
<link rel="stylesheet" href="../temp/css/responsive.css">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="../temp/js/vendor/modernizr.js"></script>
</head>
<body>

<!-- Wrapper -->
<div class="wrap push">

	<!-- Header -->
	<?php
        
        include 'menu.php';
        
        ?>
	<!-- Header -->

	<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		<div class="container">
			<h2>Products</h2>
			
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Shop Detail -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">

					<!-- Shop Content -->
					<div class="col-lg-12 col-sm-8 products-content-holder">
						
						<!-- Full Width -->
						
						<div class="shop-holder theme-padding-bottom">
							<div class="row">
								<?php
            
                                                        $sel_gal=mysqli_query($dbcon,"select * from pro where sid='$mid' ");
                                                        while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>
								
								<div class="col-lg-4 col-sm-6 col-xs-6 r-full-width">
									<div class="product-column">
										<div class="product-column-inner">
											<div class="product-img">
                                                                                            <img style="width: 100%;height: 300px" src="../img4/<?php echo $r_gal[4] ?>" alt="">
											</div>
											<h5><?php echo $r_gal[1] ?></h5>
											<span class="product-use"><?php echo $r_gal[2] ?></span>
										</div>
										<div class="btm">
											<a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Premium Quality</a>
											<span class="price"><?php echo $r_gal[3] ?> Rs/-</span>
										</div>
									</div>
								</div>
								
								<?php
                                                                
                                                            }
                                                            ?>
								
								
							</div>
						</div>
						

					</div>
					<!-- Shop Content -->

					<!-- Aside -->
					
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Shop Detail -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<footer class="main-footer style-2" style="display: none">

		<!-- Footer Columns -->
		<div class="container">

			<!-- Footer columns -->
			<div class="footer-column border-0">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<div class="logo-column p-white">
								<img class="footer-logo" src="../temp/images/footer-logo.png" alt="">
								<ul class="address-list style-2">
									<li><span>Address:</span>1782 Harrison Street  Sun Prairie</li>
									<li><span>Phone Number:</span>49 30 47373795</li>
									<li><span>Email Address:</span>moin@blindtextgenerator.de</li>
								</ul>
								<span class="follow-us">follow us </span>
								<ul class="social-icons">
									<li><a class="facebook" href="../temp/#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="../temp/#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="../temp/#"><i class="fa fa-youtube-play"></i></a></li>
									<li><a class="pinterest" href="../temp/#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="tumblr" href="../temp/#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Advertisment</h5>
							<a href="../temp/#"><img src="../temp/images/footer-add.jpg" alt=""></a>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponcer</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
								<li>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="../temp/#"><img src="../temp/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Footer Column -->

				</div>
			</div>
			<!-- Footer columns -->

		</div>
		<!-- Footer Columns -->

		<!-- Copy Rights -->
		<div class="copy-rights">
			<div class="container">
				<p>© Copyright by <i class="red-color">FineLayers</i> All rights reserved.</p>
				<a class="back-to-top scrollup" href="../temp/#"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		<!-- Copy Rights -->

	</footer> 
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
	<a class="r-nav-logo" href="../temp/home-1.html"><img src="../temp/images/logo-1.png" alt=""></a>
    <ul class="respoinve-nav-list">
		<li>
			<a data-toggle="collapse" href="../temp/#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
			<ul class="collapse" id="list-1">
			 	<li><a href="../temp/home-1.html">Home 1</a></li>
			 	<li><a href="../temp/index-2.html">Home 2</a></li>
			 	<li><a href="../temp/index-3.html">Home 3</a></li>
			</ul>
		</li>
		<li>
			<a href="../temp/about.html">About</a>
		</li>
		<li>
			<a data-toggle="collapse" href="../temp/#list-2"><i class="pull-right fa fa-angle-down"></i>Team</a>
			<ul class="collapse" id="list-2">
			    <li><a href="../temp/team.html">Team</a></li>
			 	<li><a href="../temp/team-detail.html">Team Detail</a></li>
			    <li><a href="../temp/team-widthsidebar.html">team widthsidebar</a></li>
			</ul>
		</li>
		<li>
			<a href="../temp/gallery.html">Gallery</a>
		</li>
		<li>
			<a href="../temp/#">News</a>
		</li>
		<li>
			<a data-toggle="collapse" href="../temp/#list-3"><i class="pull-right fa fa-angle-down"></i>Match</a>
			<ul class="collapse" id="list-3">
			 	<li><a href="../temp/match.html">match</a></li>
			    <li><a href="../temp/match-detail.html">match detail</a></li>
			    <li><a href="../temp/match-result.html">match result</a></li>
			</ul>
		</li>
		<li>
			<a data-toggle="collapse" href="../temp/#list-4"><i class="pull-right fa fa-angle-down"></i>Shop</a>
			<ul class="collapse" id="list-4">
			 	<li><a href="../temp/shop.html">shop</a></li>
			    <li><a href="../temp/cart.html">cart</a></li>
			    <li><a href="../temp/shop-detail.html">shop detail</a></li>
			</ul>
		</li>
		<li>
			<a data-toggle="collapse" href="../temp/#list-5"><i class="pull-right fa fa-angle-down"></i>Pages</a>
			<ul class="collapse" id="list-5">
			 	<li><a href="../temp/404.html">404</a></li>
			    <li><a href="../temp/underconstraction.html">underconstraction</a></li>
			</ul>
		</li> 
		<li>
			<a data-toggle="collapse" href="../temp/#list-6"><i class="pull-right fa fa-angle-down"></i>Blog</a>
			<ul class="collapse" id="list-6">
			 	<li><a href="../temp/blog.html">blog</a></li>
			 	<li><a href="../temp/blog-detail.html">blog detail</a></li>
			</ul>
		</li> 
		<li><a href="../temp/contact.html">Contact</a></li>                       
	</ul>
</nav>
<!-- Slide Menu -->

<!-- Java Script -->
<script src="../temp/js/vendor/jquery.js"></script>        
<script src="../temp/js/vendor/bootstrap.min.js"></script> 
<script src="../temp/http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="../temp/js/gmap3.min.js"></script>				
<script src="../temp/js/bigslide.js"></script>		
<script src="../temp/js/slick.js"></script>	
<script src="../temp/js/waterwheelCarousel.js"></script>
<script src="../temp/js/contact-form.js"></script>	
<script src="../temp/js/countTo.js"></script>		
<script src="../temp/js/datepicker.js"></script>		
<script src="../temp/js/rating-star.js"></script>							
<script src="../temp/js/range-slider.js"></script>				
<script src="../temp/js/spinner.js"></script>			
<script src="../temp/js/parallax.js"></script>			   	 
<script src="../temp/js/countdown.js"></script>	
<script src="../temp/js/appear.js"></script>		 		
<script src="../temp/js/prettyPhoto.js"></script>			
<script src="../temp/js/wow-min.js"></script>						
<script src="../temp/js/main.js"></script>	
</body>
</html>