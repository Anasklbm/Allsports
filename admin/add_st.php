
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['user'];

?>
<?php

if($usr=$_SESSION['user'])
{
    
}
 else
     {
    header("location:../ad_login.php");    
}
?>

<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    
    $a=mysqli_query($dbcon,"select max(id) from add_st");
$id=mysql_result($a,0);
$id++;
$f=$_FILES['f1']['name'];
$ext=strchr($f,'.');
$fname="$id$ext";
if(move_uploaded_file($_FILES['f1']['tmp_name'],getcwd()."\\img1\\$fname"))
{   
    $ins=mysqli_query($dbcon,"insert into ad_st values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$fname','0')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"insert into user_login values('','$t6','$t7','state','1')");
        if($ins1>0)
        {
       
                header("location:add_st.php?suss=1");
            }
    }
       
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../ad_temp/../ad_temp/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../ad_temp/../ad_temp/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../ad_temp/../ad_temp/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../ad_temp/../ad_temp/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../ad_temp/../ad_temp/assets/css/style.css" rel="stylesheet">
    <link href="../ad_temp/../ad_temp/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../ad_temp/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="../ad_temp/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>FOOTBALL</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php
      
      include 'menu.php';
      
      ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Form Components</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-6">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add Sports State</h4>
                      <form class="form-horizontal style-form" method="post"enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select State</label>
                              <div class="col-sm-10">
                                  <select name="t1" class="form-control" >
                                      <option value="---Select State---">---Select State---</option> 
                                     <?php
                                        $sel_state=mysqli_query($dbcon,"select * from state");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                        }
                                        ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input name="t2" type="text" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              <div class="col-sm-10">
                                  <textarea name="t3" class="form-control"></textarea>
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input  name="t4" type="text" class="form-control"onblur="chkc(this.value)" /><span id="o3"></span>
                                 
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input name="t5" type="email" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input name="t6" type="text" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input name="t7" type="password" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Photo</label>
                              <div class="col-sm-10">
                                  <input name="f1" type="file" class="form-control">
                                 
                              </div>
                          </div>
                          
                          
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label"></label>
                              <div class="col-lg-10">
                                  <input value="Add Data" name="sub" class="btn btn-success" type="submit">
                              </div>
                          </div>
                      </form>
                  </div>
          		</div>
                    <div class="col-lg-6">
                        <div class="form-panel">
                            <img style="width: 100%;height: 660px" src="img1/Adidas_Football_UEFA_Shoot_UCL_Hero_Images_PR_03.jpg">
                        </div>
                    </div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	<!-- INLINE FORM ELELEMNTS -->
          	<!-- /row -->
          	
          	<!-- INPUT MESSAGES -->
          	<!-- /row -->
          	
          	<!-- INPUT MESSAGES -->
          	<!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../ad_temp/assets/js/jquery.js"></script>
    <script src="../ad_temp/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../ad_temp/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../ad_temp/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../ad_temp/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../ad_temp/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../ad_temp/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="../ad_temp/assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="../ad_temp/assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="../ad_temp/assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
