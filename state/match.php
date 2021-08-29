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
			<h2>Match</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>Match</li>
			</ul>
		</div>
            
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->[
	<div class="inner-banner style-2 overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="../temp/images/inner-banner/img-04.jpg">
		<div class="container">
			<?php
                                                        $sel_gal1=mysqli_query($dbcon,"select * from fb_match where st='0' order by date limit 1");
                                                        if(mysqli_num_rows($sel_gal1)>0)
                                                        {$i=0;
                                                            while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                                $i++;
                                                                ?>
                    
                    <div class="pager-heading match-detail white-heading">
                        <span class="pull-left"><img style="width: 180px;height: 180px" class="img img-responsive " src="../state/img1/<?php echo $r_gal1[5] ?>" alt=""></span>
				<div class="match-vs-heading position-center-center">
					<div class="left-tiem-acounter">
						<?php echo $r_gal1[2] ?>
					</div>
					<span class="result-vs">vs</span>
					<div class="location-marker">
						<ul>
							<li><i class="fa fa-calendar"></i><?php echo $r_gal1[10] ?>  <?php echo $r_gal1[11] ?></li>
							<li><i class="fa fa-map-marker"></i><?php echo $r_gal1[9] ?></li>
						</ul>
					</div>
				</div>
                        <span class="pull-right"><img style="width: 180px;height: 180px" class="img img-responsive" src="../state/img1/<?php echo $r_gal1[8] ?>" alt=""></span>
			</div>
                    <?php
                    
                                                            }
                                                        
                                                        ?>
		</div>
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">	

		<!-- Match -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- match Contenet -->
					<div class="matches-shedule-holder">
						<div class="col-lg-9 col-sm-8">

							<!-- Matches Dates Shedule -->
							<div class="matches-dates-shedule">
								<ul>
									<?php
                                                                        $sel_gal1=mysqli_query($dbcon,"select * from fb_match where st='0' order by date limit 1");
                                                       $r_gal1=mysqli_fetch_row($sel_gal1);
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_match  where id not in ('$r_gal1[0]') and st='0'  order by date");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                                                    
                                                                    <li>
                                                                        <span class="pull-left"><img style="width: 100px;height: 100px" src="../state/img1/<?php echo $r_gal[5] ?>" alt=""></span>
                                                                        <span class="pull-right"><img style="width: 100px;height: 100px" src="../state/img1/<?php echo $r_gal[8] ?>" alt=""></span>
										<div class="detail">
											<a href="#"><?php echo $r_gal[2] ?><i class="fa fa-angle-double-right"></i></a>
											<strong><?php echo $r_gal[4] ?><i class="red-color"> <?php echo $r_gal[10] ?> <?php echo $r_gal[11] ?></i> <?php echo $r_gal[7] ?></strong>
											<span class="location-marker"><i class="fa fa-map-marker"></i><?php echo $r_gal[9] ?></span>
										</div>
									</li>
                                                                        <?php
                                                        }
                                                        
                                                            }
                                                        ?>
							<?php
                                                        }
                                                        ?>
								</ul>
							</div>
							<!-- Matches Dates Shedule -->

							<!-- Pagination -->
							
							<!-- Pagination -->

						</div>
					</div>
					<!-- match Contenet -->

					<!-- Aside -->
					<div class="col-lg-3 col-sm-4">

						<!-- Aside Widget -->
						<div class="aside-widget">
                                                    <a href="#"><img style="width: 100%;height: 260px" src="../temp/images/inner-banner/img-04.jpg" alt=""></a>
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
						<div class="aside-widget">
							<h3><span>Archive</span></h3>
							<div id="calendar" class="calendar"></div>
						</div>
						<!-- Aside Widget -->

					</div>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Match -->

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