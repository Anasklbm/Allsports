<?php
include './connection.php';
 session_start();
?>



<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_login where uid='$t1' and pas='$t2'");
if(mysqli_num_rows($log)>0)
{
$r=mysqli_fetch_row($log);
if($r[3]=="state")
{
    $_SESSION['uid']=$t1;
    header("location:./state/home.php");
    
}
if($r[3]=="club")
{
    $_SESSION['uid']=$t1;
    header("location:./club/home.php");
}
if($r[3]=="user")
{
    $_SESSION['uid']=$t1;
    header("location:./user/home.php");
}
}
else
{
    echo"invalid username or password";
}
    

}
                                    ?>

<?php
if(isset($_POST['sub1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
  
    $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));

      if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img4//$nfn"))
    {   
    $ins=mysqli_query($dbcon,"insert into user_data values('','$t1','$t2','$t3','$t4','$nfn','0')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"insert into user_login values('','$t3','$t4','user','1')");
        if($ins1>0)
        {
                header("location:index.php");
            }
    }
}  
}

?>
<?php
if(isset($_POST['b12']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
  $t5=$_POST['t5'];
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));

      if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img1//$nfn"))
    {   
    $ins=mysqli_query($dbcon,"insert into shop_data values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$nfn','0')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"insert into user_login values('','$t6','$t7','shop','0')");
        if($ins1>0)
        {
                header("location:shop_reg.php");
            }
    }
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
<link rel="stylesheet" href="temp/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="temp/css/main.css">	
<link rel="stylesheet" href="temp/css/icomoon.css">
<link rel="stylesheet" href="temp/css/animate.css">
<link rel="stylesheet" href="temp/css/transition.css">
<link rel="stylesheet" href="temp/css/font-awesome.min.css">
<link rel="stylesheet" href="temp/style.css">
<link rel="stylesheet" href="temp/css/color.css">
<link rel="stylesheet" href="temp/css/responsive.css">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="temp/js/vendor/modernizr.js"></script>
<style type="text/css">
    
   
fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    background: #fbfbfb;
}
legend {
   color: #678;
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:maroon;
    font-size: 112%;
}
</style>
<script type="text/javascript">
    
    
    
    
    function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}
// validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}
// validate date of birth
function dob_validate(dob)
{
var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='valid'>Thanks, you have entered a valid DOB!</span>";	
    }
}
// validate address
function add_validate(address)
{
var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;
  
    if(regAdd.test(address) == false)
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='warning'>Address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='valid'>Thanks, Address looks valid!</span>";	
    }
}

</script>
<style type="text/css">

    .filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

</style>

<script type="text/javascript">
    /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
    
    </script>
    <script type="text/javascript">
    
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function validateemail(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
    <script type="text/javascript">
    
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function validateemail(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
</head>
<body>

<!-- Wrapper -->
<div class="wrap push">

	<header class="header style-3">

		<!-- Top bar -->
		<div class="topbar-and-logobar">
			<div class="container">

				<!-- Responsive Button -->
				<div class="responsive-btn pull-right">
					<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
				</div>
				<!-- Responsive Button -->

				<!-- User Login Option -->
				<ul class="user-login-option pull-right">
                                      <li>
                                         <a style="color: white" href="index.php" class="fa fa-home"> &nbsp;HOME </a>
					    	
						</li>
                                    <li>
                                        <a style="color: white" href="reg.php" class="fa fa-users"> &nbsp;CLUB REGISTRATION </a>
					    	
						</li>
                                                <li>
                                                    <a style="color: white" href="shop_reg.php" class="fa fa-shopping-cart"> &nbsp;Shop REGISTRATION </a>
					    	
						</li>
                                                <li>
                                                    <a style="color: white" href="gro_reg.php" class="fa fa-map"> &nbsp;Turf REGISTRATION </a>
					    	
						</li>
					
					<li class="login-modal">
						<a href="#" class="login" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>member Login</a>
						<div class="modal fade" id="login-modal">
						  	<div class="login-form position-center-center">
								<h2>Login<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
                                                                <form method="post">
									<div class="form-group">
										<input type="text"name="t1" class="form-control" name="user" placeholder="Username">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password"name="t2" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group custom-checkbox">
									    <label>
									    	<input type="checkbox"> Stay login
									    </label>
									    <a class="pull-right forgot-password" href="#"></a>
									    <a href="#" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Register Now</a>
									</div>
									<div class="form-group">
									   
                                                                            <input value="Login"name="sub" class="btn full-width red-btn" type="submit"name="b1">
									</div>
								</form>
								<span class="or-reprater"></span>
								<ul class="others-login-way">
									<li><a class="facebook-bg" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
									<li><a class="tweet-bg" href="#"><i class="fa fa-twitter"></i>Tweet</a></li>
									<li><a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
									<li><a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
								</ul>
							</div>
						</div>
						<div class="modal fade" id="login-modal-2">
						  	<div class="login-form position-center-center">
								<h2>User Registration<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form method="post"enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" class="form-control" name="t1" placeholder="Name">
										<i class=" fa fa-user"></i>	
									</div>
                                                                    <div class="form-group">
										<input type="number" class="form-control" name="t2" placeholder="contact">
										<i class=" fa fa-phone"></i>	
									</div>
                                                                     <div class="form-group">
										<input type="email" class="form-control" name="t3" placeholder="Email">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="t4" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
                                                                     <div class="form-group">
                                                                         <input name="f1" type="file" class="form-control">
										
									</div>
									<div class="form-group">
									    <button name="sub1" class="btn full-width red-btn">Registration</button>
									</div>
								</form>
							</div>
						</div>
					</li>
					<li class="language-dropdown" style="display: none">
				    	<a id="choses-lang" href="#"><i class="fa fa-globe"></i>Eng<i class="fa fa-caret-down"></i></a>
				    	<ul id="language-dropdown">
						    <li><a href="#"><img src="temp/images/flags/img-02.jpg" alt="">ger</a></li>
						    <li><a href="#"><img src="temp/images/flags/img-03.jpg" alt="">fra</a></li>
						    <li><a href="#"><img src="temp/images/flags/img-04.jpg" alt="">bra</a></li>
					  	</ul>
					</li>
				</ul>
				<!-- User Login Option -->
				
			</div>	
		</div>
		<!-- Top bar -->

		<!-- Nav -->
		<div class="nav-holder">
			<div class="container">
				<div class="maga-drop-wrap">

					<!-- Logo -->
					<div class="logo">
						<a href="#"><img src="temp/images/logo-4.png" alt=""></a>
					</div>
					<!-- Logo -->

					<!-- Search Bar -->
					<div class="search-bar-holder pull-right" style="display: none">
						<div class="search-bar">
							<input type="text" class="form-control" placeholder="search enter please...">
							<i class="fa fa-search"></i>
						</div>
					</div>
					<!-- Search Bar -->

					<!-- Nav List -->
					<ul class="nav-list pull-right">
						
					<!-- Nav List -->

				</div>
			</div>
		</div>
		<!-- Nav -->

	</header>

	<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		<div class="container">
			<h2>Shop Registration</h2>
			
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="temp/images/inner-banner/img-08.jpg"style="display: none">
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- 404 Error -->
		<div class="error-holder theme-padding">
                    <div class="container">
                        <div class="col-md-1">
                
            </div>
                        <div class="col-md-10">
                            
                            <center>
                                <?php
                                if(isset($_GET['success']))
                                {
                                ?>
                                
                                <h4 style="color: green">Registration Complete..........Wait for Confirmation</h4>
                                
                                <?php
                                }
                                ?>
                            </center>
            <form method="post" id="fileForm"enctype="multipart/form-data">
            <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>

            

            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Shop Name: </label>
                    <input class="form-control" type="text" name="t1"  required /> 
                        <div id="errFirst"></div>    
            </div>
<div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Address </label>
                <textarea cols="4"rows="4" class="form-control"required=""name="t2"></textarea>
                        <div id="errFirst"></div>    
            </div>
            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Search and double click on the map to get Location Details: </label>
                <input id="pac-input" class="form-control"  type="text" placeholder="Search Your Location...">        
                        <div id="errFirst"></div>    
            </div>
                
                    
                    
                
                
           
            <div id="map" style="width: 100%; height: 500px"></div>
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
                <input type="text"class="form-control" name="t3"id="lat"placeholder="Double Click on the map" value="">
                                
                        <div id="errFirst"></div>    
            </div>
                <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> longitude: </label>
                    <input type="text" class="form-control"name="t4"placeholder="Double Click on the map" id="lng" value="">
                              
                        <div id="errFirst"></div>    
            </div>
            
<div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="t5" id="phone" class="form-control phone"  onblur="chkc(this.value)" /><span id="o3"></span> 
            </div>
            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="t6" id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            
            <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="t7" type="password" class="form-control inputpass"   id="pass1" /> </p>

                <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password" type="password" class="form-control inputpass"  placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>
                <div class="form-group">
                <label for="lastname"><span class="req">* </span> Photo: </label> 
                    <input class="form-control" type="file" name="myFile"  placeholder="hyphen or single quote OK" required />  
                        <div id="errLast"></div>
            </div>

                <center>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="b12" value="Register">
            </div>
</center>   
            </fieldset>
            </form><!-- ends register form -->

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
        </div>
                    </div>
		<!-- 404 Error -->

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
								<img class="footer-logo" src="temp/images/footer-logo.png" alt="">
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
							<a href="#"><img src="temp/images/footer-add.jpg" alt=""></a>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponcer</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="#"><img src="temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="temp/images/brand-icons/img-1-6.png" alt=""></a>
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
<script src="temp/js/vendor/jquery.js"></script>        
<script src="temp/js/vendor/bootstrap.min.js"></script> 
<script src="temp/http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="temp/js/gmap3.min.js"></script>				
<script src="temp/js/bigslide.js"></script>		
<script src="temp/js/slick.js"></script>	
<script src="temp/js/waterwheelCarousel.js"></script>
<script src="temp/js/contact-form.js"></script>	
<script src="temp/js/countTo.js"></script>		
<script src="temp/js/datepicker.js"></script>		
<script src="temp/js/rating-star.js"></script>							
<script src="temp/js/range-slider.js"></script>				
<script src="temp/js/spinner.js"></script>			
<script src="temp/js/parallax.js"></script>			   	 
<script src="temp/js/countdown.js"></script>	
<script src="temp/js/appear.js"></script>		 		
<script src="temp/js/prettyPhoto.js"></script>			
<script src="temp/js/wow-min.js"></script>						
<script src="temp/js/main.js"></script>	
</body>
</html>