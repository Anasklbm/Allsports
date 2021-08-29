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

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../ad_temp/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../ad_temp/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../ad_temp/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../ad_temp/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../ad_temp/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../ad_temp/assets/css/style.css" rel="stylesheet">
    <link href="../ad_temp/assets/css/style-responsive.css" rel="stylesheet">

    <script src="../ad_temp/assets/js/chart-master/Chart.js"></script>
    
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

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_location"></span>
					  			<h3><?php
                        $n1=mysqli_query($dbcon,"select * from ad_st");
                        $n2=  mysqli_num_rows($n1);
                        echo"$n2";
                        ?></h3>
                  			</div>
					  			<p><?php echo $n2 ?> Sports Departments are Registered</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_diamond"></span>
					  			<h3><?php
                        $m1=mysqli_query($dbcon,"select * from add_club");
                        $m2=  mysqli_num_rows($m1);
                        echo"$m2";
                        ?></h3>
                  			</div>
					  			<p><?php echo $m2 ?> Clubs are Registered</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_user"></span>
					  			<h3><?php
                        $p1=mysqli_query($dbcon,"select * from fb_squad");
                        $p2=  mysqli_num_rows($p1);
                        echo"$p2"; ?></h3>
                  			</div>
					  			<p><?php echo $p2 ?> PLayers are Registered</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3><?php
                        $o1=mysqli_query($dbcon,"select * from tor");
                        $o2=  mysqli_num_rows($o1);
                        echo"$o2";?></h3>
                  			</div>
					  			<p><?php echo $o2 ?> Tournaments are Registered</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax & enjoy.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						<!-- /col-md-4 -->
						
						<?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from tor order by id desc limit 6");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                                <div class="col-md-4 mb" >
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn"style="background-size: cover;background-repeat: no-repeat;background-image: url(img2/<?php echo $r_gal[7] ?>)">
								
								</div>
						</div><!-- /col-md-4 -->
                                                <?php
                                                            }
                                                        }
                                                        ?>
						
						<!-- /col-md-4 -->
						
					</div><!-- /row -->
					
					<!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <?php
                                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_final order by date limit 5");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted><?php echo $r_gal[10] ?></muted><br/>
                      		   <a href="#"><?php echo $r_gal[12] ?></a> Match Details.<br/>
                      		</p>
                      	</div>
                      </div>
                      <?php
                                                            }
                                                        }
                                                        ?>
                      <!-- Second Action -->
                      
                      <!-- Fifth Action -->
                      

                       <!-- USERS ONLINE SECTION -->
						
                      <!-- First Member -->
                      
                      <!-- Fourth Member -->
                      
                      <!-- Fifth Member -->
                      <br/>

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="../ad_temp/index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../ad_temp/assets/js/jquery.js"></script>
    <script src="../ad_temp/assets/js/jquery-1.8.3.min.js"></script>
    <script src="../ad_temp/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../ad_temp/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../ad_temp/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../ad_temp/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../ad_temp/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../ad_temp/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../ad_temp/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../ad_temp/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../ad_temp/assets/js/sparkline-chart.js"></script>    
	<script src="../ad_temp/assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Soccer City!',
            // (string | mandatory) the text inside the notification
            text: 'Here Manage Your State Department ,Club,Teams,Players,League Also Create Matches and Declare The Result. Click here to go to Offical Page <a href="../index.php" target="_blank" style="color:#ffd777">Soccer City</a>.',
            // (string | optional) the image to display on the left
            image: '../ad_temp/assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
