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
$mid=$_GET['mid'];
$sel1=mysqli_query($dbcon,"select * from fb_final where id='$mid'");
                             $r=mysqli_fetch_row($sel1);


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
			<h2>Match Detail</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>Match Detail</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="inner-banner style-2 overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="../admin/img3/<?php echo $r[14] ?>">
		<div class="container">
			<div class="pager-heading match-detail h-white">
				<span class="pull-left"><img style="width: 200px;height: 200px" src="../state/img1/<?php echo $r[5] ?>" alt=""></span>
				<div class="match-vs-heading position-center-center">
					<h2>match  Detail</h2>
					<span>vs</span>
					<div class="location-marker">
						<ul>
							<li><i class="fa fa-map-marker"></i>14 Oct 2013  23:00 (pm)</li>
							<li><i class="fa fa-map-marker"></i>3358 Evergreen Lane England</li>
						</ul>
					</div>
				</div>
				<span class="pull-right"><img style="width: 200px;height: 200px" src="../state/img1/<?php echo $r[8] ?>" alt=""></span>
			</div>
		</div>
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">	

		<!-- Match Detail -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- Match Detail Content -->
					<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
						
						<!-- Detail -->
						<div class="match-detail-deep theme-padding-bottom">
							<h2><?php echo $r['12'] ?></h2>
                                                        <p>The <b><?php echo $r['2'] ?></b> Highlights  between the team <b><?php echo $r['4'] ?></b> and <b><?php echo $r['7'] ?></b> and also match Details</p>
							<div class="video video-post">
                                                            <video width="100%"controls onclick="load_vdo('<?php echo $r['15'] ?>')" autoplay="autoplay"><source src="../admin/video/<?php echo $r['15'] ?>" type="video/mp4">
                                                <source src="../admin/video/<?php echo $r['15'] ?>" type="video/ogg"></video>
						
								</div>
							<article>
								<div class="social-icons">
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
										<li><a class="comment" href="#"><i class="fa fa-comment"></i></a></li>
									</ul>
								</div>
                                                            <p align="justify"><?php echo $r['13'] ?></p>
                                                                  
                                                        </article>
							
							
						</div>
						<!-- Detail -->

						<!-- Comment Section -->
						
						<!-- Comment Section -->

						<!-- Leave a Reply  -->
						
						<!-- Leave a Reply  -->

						<!-- Blog Grid View -->
						
						<!-- Blog Grid View -->

					</div>
					<!-- Match Detail Content -->

					<!-- Aside -->
					<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">

						<!-- Aside Widget -->
						<div class="aside-widget">
                                                    <a  href="#"><img style="width: 100%;height: 250px" src="../admin/img3/<?php echo $r[14] ?>" alt=""></a>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Popular Matches</span></h3>
							<div class="Popular-news">
								<ul><?php
                                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_final order by date limit 5");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
									<li>
                                                                            <img style="width: 65px;height: 70px" src="../admin/img3/<?php echo $r_gal[14] ?>" alt="">
                                                                            <h5><a href="match-detail.php?mid=<?php echo $r_gal[0] ?>"><?php echo $r_gal[12] ?></a></h5>
										<span class="red-color"><i class="fa fa-calendar"></i><?php echo $r_gal[10] ?></span>
									</li>
									<?php
                                                            }
                                                            }
                                                            ?>
								</ul>
							</div>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						
						<!-- Aside Widget -->

					</div>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Match Detail -->

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
<?php
                            include 'menu1.php';

?>
<!-- Slide Menu -->

<!-- Java Script -->
<script src="../temp/js/vendor/jquery.js"></script>        
<script src="../temp/js/vendor/bootstrap.min.js"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
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