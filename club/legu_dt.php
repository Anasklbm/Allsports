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
                            
                            $a1=mysqli_query($dbcon,"select * from tor where id='$mid'");
                            
                            
                             $b1=mysqli_fetch_row($a1);
                             $usr=$_SESSION['uid'];
                             $sel1=mysqli_query($dbcon,"select * from add_club where uid='".$_SESSION['uid']."'");
                             $r=mysqli_fetch_row($sel1);
                            
                            ?>
<?php

if(isset($_POST['b1']))
 {
   
   
   
  
    

   
    $ins=mysqli_query($dbcon,"insert into tor_reg values('','$mid','$b1[1]','$r[5]','$r[1]','$r[7]','0')");
    if($ins>0)
    {
      
                header("location:legu_dt.php?mid=$mid&suss=1");
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
			<h2>Blog Detail</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>Blog Detail</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="../temp/images/inner-banner/img-07.jpg">
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Blog Detail -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- Blog Content -->
					<div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
					
						<!-- Blog detail -->
						<div class="blog-detail-holder">
							<div class="author-header">
								<h2><?php echo $b1[1] ?></h2>
								<div class="aurhor-img-name pull-left">
                                                                                    <img style="width: 50px;height: 50px" src="img1/map-icon1.png" alt="">
											<strong>at <i class="red-color"><?php echo $b1[4] ?></i></strong>
											<span>on <?php echo $b1[5] ?> </span>
										</div>
								<div class="share-option pull-right">
                                                                    <a href="tor_team.php?mid=<?php echo $mid  ?>"><span id="share-btn1"><i class="fa fa-trophy"></i>Team Registered</span></a>
									<div id="show-social-icon1" class="on-hover-share">
										<ul class="social-icons">
											<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
											<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<article>
                                                            <p>Register Your Team Now!!! .Match details will be announced shortly the last date for registration is <b style="color: red"><?php echo $b1[5] ?></b>. After Registration please check our website for match details </p>
							</article>
							<div class="blog-detail">
								<figure>
                                                                    <img src="../admin/img2/<?php echo $b1[7] ?>" alt="">
								</figure>
								<article>
                                                                    <p><?php echo $b1[2] ?></p>
									</article>
							</div>
							
							<br/>
                                                        <form method="post">
                                                            
                                                            
                                                            <?php
                                                            $log=mysqli_query($dbcon,"select * from tor_reg where tid='$mid' and cid='$r[5]'");
if(mysqli_num_rows($log)>0)
{
                                                            
                                                            ?>
                                                            
                                                            <button style="color: lime" class="btn btn-success  full-width">Your Are Already Registered</button>
                                                            <?php
}
 else {
    

                                                            ?>
							<input class="btn red-btn full-width" name="b1" value="Register Your Team Now!!!" type="submit">
                                                        <?php
                                                        
 }
 ?>
                                                        </form>
                                                </div>
						<!-- Blog Detail -->

						<!-- Blog Grid View -->
						
						<!-- Blog Grid View -->

						<!-- Comment Section -->
						
						<!-- Comment Section -->

						<!-- Leave a Reply  -->
						
						<!-- Leave a Reply  -->

					</div>
					<!-- Blog Content -->

					<!-- Aside -->
					
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Blog Detail -->

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