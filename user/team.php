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

$sel=mysqli_query($dbcon,"select * from add_club where uid='$mid'");
    $r=mysqli_fetch_row($sel);
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
<link href="../temp/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
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
			<h2>Team Grid</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>Team Grid</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">	

		<!-- Team Width Sidebar -->
                <div class="team-grid theme-padding white-bg"style="background-size: cover;background-repeat: no-repeat;background-attachment: fixed;background-image: url(img1/<?php echo $r[7] ?>)">
			<div class="container">
				<h2>Goalkeeper</h2>
				<div class="row">

					<!-- Team Column -->
                                        
                                        <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_squad where pos='Goalkeeper' and cid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
					<div class="col-lg-3 col-sm-4 col-xs-6 r-full-width">
						<div class="team-column">
                                                    <img src="../club/img1/<?php echo $r_gal[8] ?>" alt="">
							<span class="player-number"><?php echo $r_gal[6] ?></span>
							<div class="team-detail">
                                                            <h5><a href="#"><?php echo $r_gal[1] ?></a></h5>
								<span class="desination"><?php echo $r_gal[7] ?></span>
								<div class="detail-inner">
									<ul>
										<li>Born</li>
										<li>Position</li>
										<li>Squad number</li>
										<li>Previous Club</li>
										<li>Fallow us on</li>
									</ul>
									<ul>
										<li><?php echo $r_gal[3] ?></li>
										<li><?php echo $r_gal[7] ?></li>
										<li><?php echo $r_gal[6] ?></li>
										<li><?php echo $r_gal[9] ?></li>
										<li>
											<ul class="social-icons">
                                                                                            <li><?php echo $r_gal[11] ?><a class="facebook"title="Goal" href="#"><i>G</i></a></li>
												<li><?php echo $r_gal[12] ?><a class="twitter" href="#"><i></i>A</a></li>
												<li><?php echo $r_gal[13] ?><a class="youtube" href="#"><i>D</i></a></li>
												<li><?php echo $r_gal[14] ?><a class="pinterest" href="#"><i>S</i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php
                                                            }
                                                        }
                                                        ?>

				</div>
                                <br/>
                                <h2>Defender</h2>
				<div class="row">

					<!-- Team Column -->
                                        
                                        <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_squad where pos='Defender'and cid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
					<div class="col-lg-3 col-sm-4 col-xs-6 r-full-width">
						<div class="team-column">
                                                    <img src="../club/img1/<?php echo $r_gal[8] ?>" alt="">
							<span class="player-number"><?php echo $r_gal[6] ?></span>
							<div class="team-detail">
								<h5><a href="#"><?php echo $r_gal[1] ?></a></h5>
								<span class="desination"><?php echo $r_gal[7] ?></span>
								<div class="detail-inner">
									<ul>
										<li>Born</li>
										<li>Position</li>
										<li>Squad number</li>
										<li>Previous Club</li>
										<li>Fallow us on</li>
									</ul>
									<ul>
										<li><?php echo $r_gal[3] ?></li>
										<li><?php echo $r_gal[7] ?></li>
										<li><?php echo $r_gal[6] ?></li>
										<li><?php echo $r_gal[9] ?></li>
										<li>
											<ul class="social-icons">
                                                                                            <li><?php echo $r_gal[11] ?><a class="facebook"title="Goal" href="#"><i>G</i></a></li>
												<li><?php echo $r_gal[12] ?><a class="twitter" href="#"><i></i>A</a></li>
												<li><?php echo $r_gal[13] ?><a class="youtube" href="#"><i>D</i></a></li>
												<li><?php echo $r_gal[14] ?><a class="pinterest" href="#"><i>S</i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php
                                                            }
                                                        }
                                                        ?>

				</div>
                                <br/>
                                <h2>Midfielder</h2>
				<div class="row">

					<!-- Team Column -->
                                        
                                        <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_squad where pos='Midfielder'and cid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
					<div class="col-lg-3 col-sm-4 col-xs-6 r-full-width">
						<div class="team-column">
                                                    <img src="../club/img1/<?php echo $r_gal[8] ?>" alt="">
							<span class="player-number"><?php echo $r_gal[6] ?></span>
							<div class="team-detail">
								<h5><a href="#"><?php echo $r_gal[1] ?></a></h5>
								<span class="desination"><?php echo $r_gal[7] ?></span>
								<div class="detail-inner">
									<ul>
										<li>Born</li>
										<li>Position</li>
										<li>Squad number</li>
										<li>Previous Club</li>
										<li>Fallow us on</li>
									</ul>
									<ul>
										<li><?php echo $r_gal[3] ?></li>
										<li><?php echo $r_gal[7] ?></li>
										<li><?php echo $r_gal[6] ?></li>
										<li><?php echo $r_gal[9] ?></li>
										<li>
											<ul class="social-icons">
                                                                                            <li><?php echo $r_gal[11] ?><a class="facebook"title="Goal" href="#"><i>G</i></a></li>
												<li><?php echo $r_gal[12] ?><a class="twitter" href="#"><i></i>A</a></li>
												<li><?php echo $r_gal[13] ?><a class="youtube" href="#"><i>D</i></a></li>
												<li><?php echo $r_gal[14] ?><a class="pinterest" href="#"><i>S</i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php
                                                            }
                                                        }
                                                        ?>

				</div>
                                <br/>
                                <h2>Forward</h2>
				<div class="row">

					<!-- Team Column -->
                                        
                                        <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_squad where pos='Forward'and cid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
					<div class="col-lg-3 col-sm-4 col-xs-6 r-full-width">
						<div class="team-column">
                                                    <img src="../club/img1/<?php echo $r_gal[8] ?>" alt="">
							<span class="player-number"><?php echo $r_gal[6] ?></span>
							<div class="team-detail">
								<h5><a href="#"><?php echo $r_gal[1] ?>
								<span class="desination"><?php echo $r_gal[7] ?></span>
								<div class="detail-inner">
									<ul>
										<li>Born</li>
										<li>Position</li>
										<li>Squad number</li>
										<li>Previous Club</li>
										<li>Fallow us on</li>
									</ul>
									<ul>
										<li><?php echo $r_gal[3] ?></li>
										<li><?php echo $r_gal[7] ?></li>
										<li><?php echo $r_gal[6] ?></li>
										<li><?php echo $r_gal[9] ?></li>
										<li>
											<ul class="social-icons">
                                                                                            <li><?php echo $r_gal[11] ?><a class="facebook"title="Goal" href="#"><i>G</i></a></li>
												<li><?php echo $r_gal[12] ?><a class="twitter" href="#"><i></i>A</a></li>
												<li><?php echo $r_gal[13] ?><a class="youtube" href="#"><i>D</i></a></li>
												<li><?php echo $r_gal[14] ?><a class="pinterest" href="#"><i>S</i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php
                                                            }
                                                        }
                                                        ?>

				</div>
			</div>
		</div>
		<!-- Team Width Sidebar -->

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