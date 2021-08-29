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

$sel1=mysqli_query($dbcon,"select * from ad_st where uid='".$_SESSION['uid']."'");
    $r=mysqli_fetch_row($sel1);
?>
<?php
if(isset($_GET['del']))
{
                                $w=$_GET['del'];
                                
      
    $upd1=mysqli_query($dbcon,"update add_club1 set st='2' where id='$w'");
    
   
    if($upd1>0)
    {
        
       header("location:st_team1.php");
}
}                         
                            

?>
<?php
if(isset($_GET['upd']))
{
                                $upd=$_GET['upd'];
                                
      $sel2=mysqli_query($dbcon,"select * from add_club1 where id='".$_GET['upd']."'");
    $r2=mysqli_fetch_row($sel2);
    
    $upd1=mysqli_query($dbcon,"update add_club1 set st='1' where id='$upd'");
    
   
    if($upd1>0)
    {
        $ins=mysqli_query($dbcon,"insert into add_club values('','$r2[1]','$r2[2]','$r2[3]','$r2[4]','$r2[5]','$r2[6]','$r2[7]','0','0','0','0','0','0','$r2[14]','0')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"insert into user_login values('','$r2[5]','$r2[6]','club','1')");
        if($ins1>0)
        { 
       header("location:st_team1.php");
}
}                         
}                         
}
?>
<?php
if(isset($_GET['d']))
{
                                $d=$_GET['d'];
                                
      
    $upd1=mysqli_query($dbcon,"update add_club set fb_draw=fb_draw+1 where id='$d'");
    
   
    if($upd1>0)
    {
        
       header("location:st_team.php");
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
			<h2>Point Tabels</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>Point Tabels</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">	

		<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">

					<!-- Aside -->
					<div class="col-lg-3 col-sm-4">

						<!-- Aside Widget -->
						<div class="aside-widget">
                                                    <a href="#"><img style="width: 500px;height: 300px" src="../admin/img1/<?php echo $r[8]  ?>" alt=""></a>
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

					</div>
					<!-- Aside -->
					
					<!-- Match Result Contenet -->
					<div class="col-lg-9 col-sm-8">

						<!-- Piont Table -->
						<div class="macth-fixture">
							
							<div class="last-matches styel-3">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
									    <thead>
									    	<tr>
										        <th>#</th>
										        <th>Team</th>
										        <th>Contact</th>
										        <th>Email</th>
                                                                                        <th>More</th>
										        
									      	</tr>
									    </thead>
									    <tbody>
									    	
                                                                                    <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from add_club1 where sid='$usr' and st='0'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                                                                <tr>
										        <td><?php echo $i ?></td>
                                                                                        <td><img class="img img-circle" style="width: 45px;height:45px" src="img1/<?php echo $r_gal[7] ?>" alt=""><?php echo $r_gal[1] ?></td>
										        <td><?php echo $r_gal[3] ?></td>
                                                                                        <td><?php echo $r_gal[4] ?></td>
                                                                                        <td><a style="color: green" href="st_team1.php?upd=<?php echo $r_gal[0] ?>"><span class="fa fa-check"></span></a> &nbsp;&nbsp;<a style="color: red" href="st_team1.php?del=<?php echo $r_gal[0] ?>"><span class="fa fa-remove"></span></a></td>
										         <?php
                                                            }
                                                        }
                                                            ?>
									      	</tr>
									      	
									    </tbody>
								  	</table>
							  	</div>
							</div>
						</div>
						<!-- Piont Table -->

					</div>
					<!-- Match Result Contenet -->

				</div>
			</div>
		</div>
		<!-- Match Result -->

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