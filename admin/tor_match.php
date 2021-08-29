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


    $sel2=mysqli_query($dbcon,"select * from tor where id='".$_GET['mid']."'");
    $r2=mysqli_fetch_row($sel2);
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
        
    <!-- Custom styles for this template -->
    <link href="../ad_temp/assets/css/style.css" rel="stylesheet">
    <link href="../ad_temp/assets/css/style-responsive.css" rel="stylesheet">

    <link href="../ad_temp/assets/css/table-responsive.css" rel="stylesheet">

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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  
                                  <th>Club A</th>
                                  <th class="numeric"></th>
                                  <th>Club B</th>
                                  <th>More</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php
                                                                                    $mid=$_GET['mid'];
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_match where tid='$mid' order by date");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                
                                                                $i++;
                                                                ?>
                                  
                                  <td align="center"><img class="img img-circle" style="width: 45px;height:45px" src="../state/img1/<?php echo $r_gal[5] ?>" alt=""> &nbsp;&nbsp;<b style="color: black"><?php echo strtoupper($r_gal[4]) ?></b></td>
                                  <td align="center"><img style="width: 45px;height:45px" src="img1/5270582-4644160274-vs.pn_.png"</td>
                                  <td align="center"><img class="img img-circle" style="width: 45px;height:45px" src="../state/img1/<?php echo $r_gal[8] ?>" alt=""> &nbsp;&nbsp;<b style="color: black"><?php echo strtoupper($r_gal[7]) ?></b></td>
                                  
                                  <td align="center">
                                      
                                      <?php
                                                            $log=mysqli_query($dbcon,"select * from fb_final where mtid='$r_gal[0]'");
if(mysqli_num_rows($log)>0)
{
                                                            
                                                            ?>
                                      
                                      
                                      <span style="color: green" class="fa fa-thumbs-up"></span>
                                      <?php
}
 else {
                                      
                                      ?>
                                      <a href="match_dt.php?mid=<?php echo $r_gal[0] ?>"<span style="color: red" class="fa fa-plus"></span>
                                      
                                    <?php 
 }
 ?>
                                      
                                      </td>
                                  
                              </tr>
                              <?php
                                                            }
                                                        }
                                                            ?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	<!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="../ad_temp/responsive_table.html#" class="go-top">
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


    <!--common script for all pages-->
    <script src="../ad_temp/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
