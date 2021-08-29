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
    <link href="../ad_temp/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../ad_temp/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>   
    <!-- Custom styles for this template -->
    <link href="../ad_temp/assets/css/style.css" rel="stylesheet">
    <link href="../ad_temp/assets/css/style-responsive.css" rel="stylesheet">

    <script src="../ad_temp/assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../ad_temp/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="../ad_temp/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        
        
.panel-image {
    position: relative;   
}
.panel-image img.panel-image-preview {
    width: 100%;
	border-radius: 4px 4px 0px 0px;
}

.panel-image label {
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
}

.panel-heading ~ .panel-image img.panel-image-preview {
	border-radius: 0px;
}

.panel-body {
   overflow: hidden;
}

.panel-image ~ input[type=checkbox] {
    position:absolute;
    top:- 30px;
    z-index: -1;   
}

.panel-image ~ input[type=checkbox] ~ .panel-body {
	height: 0px;
	padding: 0px;
}

.panel-image ~ input[type=checkbox]:checked ~ .panel-body {
    height: auto;
	padding: 15px;
}

.panel-image ~ .panel-footer a {
    padding: 0px 10px;
	font-size: 1.3em;
	color: rgb(100, 100, 100);
}

    </style>
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
            <a href="#" class="logo"><b>FOOTBALL </b></a>
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
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
      
      <div class="container" style="margin-top:10px;">
	<div class="row form-group">
            
            <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from tor where typ='Football'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img style="width: 100%;height: 300px" src="../admin/img2/<?php echo $r_gal[7] ?>" class="panel-image-preview" />
                    <label for="toggle-1"></label>
                </div>
                <input type="checkbox" id="toggle-1" class="panel-image-toggle">
                <div class="panel-body">
                    <h4><?php echo $r_gal[1] ?></h4>
                    </div>
                <div class="panel-footer text-center">
                    <a title="Assign Match" href="fb_match.php?mid=<?php echo $r_gal[0] ?>"><span class="glyphicon glyphicon-edit"></span></a>
                    <a title="View Match" href="tor_match.php?mid=<?php echo $r_gal[0] ?>"><span class="fa fa-star"></span></a>
                    
                    <a title="Registered Team"href="tor_reg.php?mid=<?php echo $r_gal[0] ?>"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
        </div>
            
            
            
        
           <?php
                                                        
                                                        
                                                            }
                                                        }
                                                        ?>
            
            
            
	</div>
    
    
</div>
      
      
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="../ad_temp/panels.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../ad_temp/assets/js/jquery.js"></script>
    <script src="../ad_temp/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../ad_temp/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../ad_temp/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../ad_temp/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../ad_temp/assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="../ad_temp/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../ad_temp/assets/js/sparkline-chart.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
