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
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
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
        
        body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Lato', sans-serif; letter-spacing: 0px; font-size: 16px; color: #62686c; font-weight: 400; line-height: 28px; }
h1, h2, h3, h4, h5, h6 { font-weight: 300; color: #11181f; margin: 0px 0px 15px 0px; font-family: 'Lato', sans-serif; }
h1 { font-size: 44px; }
h2 { font-size: 38px; }
h3 { font-size: 24px; font-weight: 400; }
h4 { font-size: 20px; font-weight: 400; line-height: 30px; }
h5 { font-size: 16px; font-weight: 400; }
h6 { font-size: 12px; font-weight: 400; }
p { margin: 0 0 20px; line-height: 1.7; }
p:last-child { margin: 0px; }
ul, ol { }
a { text-decoration: none; color: #62686c; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
a:focus, a:hover { text-decoration: none; color: #f67800; }

.content{padding-top:80px; padding-bottom:80px;}
.mb40{margin-bottom:40px;}
.team-block { margin-bottom: 20px; }
.team-content { position: absolute; background-color: rgba(17, 24, 31, 0.8); bottom: 0px; display: inline-block; width: 100%; color: #fff; padding: 30px; }
.team-img { position: relative; }
.team-img img { width: 100%; }
.team-title { }
.team-meta { color: #9da4aa; font-weight: 400; font-size: 16px; }
.overlay { border-radius: 0px; position: absolute; top: 0; bottom: 0; left: 0; right: 0; height: 100%; width: 100%; opacity: 0; transition: 1s ease; background-color: #11181f; }
.team-img:hover .overlay { opacity: .8; }
.team-img:hover .team-content { opacity: 0; }
.text { color: #fff; position: absolute; top: 30%; left: 30%; transform: translate(-26%, -26%); -ms-transform: translate(-26%, -26%); right: 0; font-weight: 400; font-size: 16px; }

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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          
          <div class="content">
        <div class="container">
             <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40 text-center">
                  
                        <h1>Club List</h1>
                
                </div>
            </div>
            <div class="row">
                 <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from add_club");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img  src="../state/img1/<?php echo $r_gal[7] ?>"style="height: 350px" alt="">
                            <div class="team-content">
                                <h4 class="text-white mb0"><?php echo $r_gal[1] ?></h4>
                                <p class="team-meta">- <?php echo $r_gal[2] ?></p>
                            </div>
                            <a href="">
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="mb0 text-white"><?php echo $r_gal[1] ?></h4>
                                    <p class="mb30 team-meta">- <?php echo $r_gal[2] ?></p>
                                    <div class="col-lg-12">
                                        <center>
                                            
                                        <div class="col-lg-4">
                                            <b style="font-size: x-large">W</b>
                                            <br/>
                                            <?php echo $r_gal[11] ?>
                                        </div>
                                        <div class="col-lg-4">
                                            <b style="font-size: x-large">L</b>
                                            <br/>
                                            <?php echo $r_gal[12] ?>
                                        </div>
                                        <div class="col-lg-4">
                                            <b style="font-size: x-large">D</b>
                                            <br/>
                                            <?php echo $r_gal[13] ?>
                                        </div>
                                        </center>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <center>
                                        <a class="btn btn-success" href="team.php?mid=<?php echo $r_gal[5] ?>">View Team</a>
                                    </center>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
                <?php
                
                                                            }
                                                        }
                                                        ?>
                <!-- /.team-img -->
                 
                <!-- /.team-img -->
                  
                <!-- /.team-img -->
                  
                <!-- /.team-img -->
                   
                <!-- /.team-img -->
                   
                <!-- /.team-img -->
            </div>
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
              Created for <a href="https://goo.gl/xKhzsz" target="_blank">easetemplate</a>
              </div></div>
            </div>
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
