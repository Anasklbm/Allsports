
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
 $mid=$_GET['mid'];
    
    $sel1=mysqli_query($dbcon,"select * from fb_match where id='$mid'");
    $r1=mysqli_fetch_row($sel1);

?>
<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    
    $msg=$_POST['t2'];
$msg1=  addslashes($msg);
$msg2=  nl2br($msg1);
   
    $a=mysqli_query($dbcon,"select max(id) from fb_final");
$id=mysql_result($a,0);
$id++;
$f=$_FILES['f1']['name'];
$ext=strchr($f,'.');
$fname="$id$ext";
if(move_uploaded_file($_FILES['f1']['tmp_name'],getcwd()."\\img3\\$fname"))
{ 
    $b=mysqli_query($dbcon,"select max(id) from fb_final");
$id=mysql_result($b,0);
$id++;
$p=$_FILES['p1']['name'];
$ext=strchr($p,'.');
$pname="$id$ext";
if(move_uploaded_file($_FILES['p1']['tmp_name'],getcwd()."\\video\\$pname"))
{
    $ins=mysqli_query($dbcon,"insert into fb_final values('','$r1[1]','$r1[2]','$r1[3]','$r1[4]','$r1[5]','$r1[6]','$r1[7]','$r1[8]','$r1[9]','$r1[10]','$r1[11]','$t1','$msg2','$fname','$pname','$t3','$t4',$mid,'0')");
    if($ins>0)
    {
        $upd1=mysqli_query($dbcon,"update fb_match set st='1'where id='$mid'");
    
   
    if($upd1>0)
    {
        
                header("location:tor_match.php?mid=$r1[1]");
            }
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
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Add Match Details</h4>
                      <form class="form-horizontal style-form" method="post"enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input name="t1" type="text" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-10">
                                  <textarea name="t2" cols="5"rows="5" name="t2" class="form-control"></textarea>
                                 
                              </div>
                          </div>
                        
                          
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Club A Score</label>
                              <div class="col-sm-10">
                                  <input name="t3"placeholder="Write the Scroe for the team:- <?php echo $r1[4] ?>" type="text" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Club B Score</label>
                              <div class="col-sm-10">
                                  <input name="t4"placeholder="Write the Scroe for the team:- <?php echo $r1[7] ?>"  type="text" class="form-control">
                                 
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Photo</label>
                              <div class="col-sm-10">
                                  <input name="f1" type="file" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Highlights</label>
                              <div class="col-sm-10">
                                  <input name="p1" type="file" class="form-control">
                                 
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
                            <img style="width: 100%;height: 612px" src="img1/france-vs-portugal-4.jpg">
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
