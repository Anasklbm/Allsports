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
			<h2>Find Shop</h2>
			
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Blog -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- Blog Content -->
					<div class="col-lg-12 col-md-12 col-sm-11 col-xs-10 r-full-width"> 

						
                                                
                                                <?php
if(isset($_POST['b12']))
{
    $la=$_POST['t1'];
    $lo=$_POST['t2'];
                                                
                                                
                                                
                                                ?>
						<div class="blog-lagre-view theme-padding-bottom">

                                                     <?php
                                                     
                                                     
                                                        $sel1=mysqli_query($dbcon,"SELECT id, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM shop_data where st='1' HAVING distance < 60 ORDER BY distance");
                                                        while($r1=mysqli_fetch_row($sel1))
                                                            {
                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from shop_data where id='$r1[0]'");
                                                       
                                                            $r_gal=mysqli_fetch_row($sel_gal);
                                                            
                                                          
                                                                ?>
							<!-- Post Img -->
							<div class="large-post theme-padding-bottom">

								<!-- Post Img -->
								<div class="large-post-img">
                                                                    <img style="width: 100%;height: 500px" src="../img1/<?php echo $r_gal[8] ?>" alt="">
									<span class="blog-title-batch">Sports Gear</span>
								</div>
								<!-- Post Img -->

								<!-- Detail -->
								<div class="large-post-detail">
									<div class="author-header">
										<div class="aurhor-img-name pull-left">
                                                                                    <img style="width: 50px;height: 50px" src="../pic/kissclipart-cellphone-png-vector-clipart-clip-art-97d8a40283f32ae0.png" alt="">
                                                                                    <strong class="fa fa-phone"><i class="red-color"> <?php echo $r_gal[5] ?></i></strong>
											<span class="fa fa-envelope"> <?php echo $r_gal[6] ?> </span>
										</div>
										<div class="share-option pull-right">
											
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
									<h2><a href="#"><?php echo $r_gal[1] ?></a></h2>
									<p><?php echo $r_gal[2]?></p>
                                                                        <a class="btn gary-btn"target="_blank" href="pro.php?mid=<?php echo $r_gal[6] ?>"><i>+</i>show more</a>
								</div>
								<!-- Detail -->

							</div>
							
                                                        <?php
                                                        
                                                        
                                                            }
                                                        
                                                        ?>
                                                        
                                                        
                                                        <div class="pagination-holder"style="display: none">
								<ul class="pagination">
									<li><a href="#"><i class="fa fa-angle-double-left"></i>Previous</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">7</a></li>
									<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
									<li><a href="#">28</a></li>
									<li><a href="#">Next<i class="fa fa-angle-double-right"></i></a></li>
								</ul>
							</div>
							<!-- Pagination -->

						</div>
						<?php
}

 else {
    

?>
    <form method="post" id="fileForm"enctype="multipart/form-data">
           
            
            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Search and double click on the map to get Location Details: </label>
                <input id="pac-input" class="form-control"  type="text" placeholder="Search Your Location...">        
                        <div id="errFirst"></div>    
            </div>
                
                    
                    
                
                
           
            <div id="map" style="width: 100%; height: 400px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete"
         async defer></script>
        
           
               
                <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Latitude: </label>
                <input type="text"class="form-control" name="t1"id="lat"placeholder="Double Click on the map" value="">
                                
                        <div id="errFirst"></div>    
            </div>
                <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> longitude: </label>
                    <input type="text" class="form-control"name="t2"placeholder="Double Click on the map" id="lng" value="">
                              
                        <div id="errFirst"></div>    
            </div>
            


                <center>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="b12" value="Search">
            </div>
</center>   
            </fieldset>
            </form>                                        
                                            
                                            
                                            
                                            
                                            <?php
 }
 ?>

					</div>
					<!-- Blog Content -->

					<!-- Aside -->
					
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Blog -->

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