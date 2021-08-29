
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

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
<?php

$sel1=mysqli_query($dbcon,"select * from gro_data where em='$usr'");
    $r=mysqli_fetch_row($sel1);
?>
<?php

if(isset($_POST['b1']))
 {
   
    $t1=$_POST['t1'];
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
   
    $ins=mysqli_query($dbcon,"insert into tim values('','$t1','$t2','$t3','$t4','$mid','$usr','0')");
    if($ins>0)
    {
      
                header("location:add_tim.php?mid=$mid");
            }
    }
        
        

        
 
 ?>

 <?php
                            if(isset($_GET['del']))
{
                                $mid=$_GET['mid'];
    $del1=mysqli_query($dbcon,"delete from tim where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:add_tim.php?mid=$mid");
}
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
			<h2>About</h2>
			
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- About Video -->
		<div class="about-video-holder theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="../temp/images/about-video-bg.jpg">
			<div class="container text-center">
				<div class="about-video">
					<div class="video">
                                            <img src="../img2/" alt="">
						<span class="play-lable fa fa-video-camera"></span>
						</div>
					<div class="about-video-caption">
						<h2>About Club History</h2>
						<p>Felis volutpat taciti donec sem dapibus ac semper taciti, aliquam pretium congue aliquam venenatis turpis nec, nulla pellentesque lorem volutpat sapien nullam curabitur justo vestibulum tristique convallis leo mollis venenatis vel eleifend senectus tempus eleifend urna, at consectetur bibendum eros pharetra nisi mi tristique nec porta.Senectus pellentesque euismod venenatis inceptos</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="theme-padding">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>CLUB <span class="red-color">FACILITIES</span></h2>
						</div>
				</div>
				<!-- Main Heading -->

				<!-- Facilities row -->
				<ul class="row">
				
					
					<li class="col-lg-4 col-md-4 col-xs-6 r-full-width">
						<div class="facilities-column center">
							<span class="Facilities-icon bg-2 position-center-x"><img src="../temp/images/png-icons/img-02.png" alt=""></span>
							<h5><a href="#">Media Galleries</a></h5>
							<p>Quis pellentesque convallis sem torquent lacus blandit rutrum, at adipiscing sociosqu vitae facilisis ornare, phasellus</p>
						</div>
					</li>
					
					
                                        
				</ul>
				<!-- Facilities row -->

			</div>
		</div>
		

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
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Advertisment</h5>
							<a href="#"><img src="../temp/images/footer-add.jpg" alt=""></a>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponcer</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="#"><img src="../temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="../temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-6.png" alt=""></a>
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
				<a class="back-to-top scrollup" href="#"><i class="fa fa-angle-up"></i></a>
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
			<a data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
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
			<a data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Team</a>
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
			<a href="#">News</a>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Match</a>
			<ul class="collapse" id="list-3">
			 	<li><a href="../temp/match.html">match</a></li>
			    <li><a href="../temp/match-detail.html">match detail</a></li>
			    <li><a href="../temp/match-result.html">match result</a></li>
			</ul>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Shop</a>
			<ul class="collapse" id="list-4">
			 	<li><a href="../temp/shop.html">shop</a></li>
			    <li><a href="../temp/cart.html">cart</a></li>
			    <li><a href="../temp/shop-detail.html">shop detail</a></li>
			</ul>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>Pages</a>
			<ul class="collapse" id="list-5">
			 	<li><a href="../temp/404.html">404</a></li>
			    <li><a href="../temp/underconstraction.html">underconstraction</a></li>
			</ul>
		</li> 
		<li>
			<a data-toggle="collapse" href="#list-6"><i class="pull-right fa fa-angle-down"></i>Blog</a>
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