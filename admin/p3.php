
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
    
    $ins=mysqli_query($dbcon,"insert into position values('','$t1','$t2','1')");
    if($ins>0)
    {
       
            
                 header("location:add_spo.php?suss=1");
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
          	<h3><i class="fa fa-angle-right"></i> Defender Ranking</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
                
                
                    <div class="container">
                        <div class="col-lg-12">
                        
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  
                                  <th class="numeric">Age</th>
                                  <th class="numeric">Contact</th>
                                  <th class="numeric">Squad No</th>
                                  <th class="numeric">Team</th>
                                  <th class="numeric">Goals</th>
                                  <th class="numeric"><b>Assist</b></th>
                                  <th class="numeric">Defended</th>
                                  
                                  <th class="numeric">Saves</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php
            
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_squad where pos='Defender' order by def desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                              <tr>
                                  <td><?php echo $i ?></td>
                                  <td><?php echo $r_gal[1] ?></td>
                                  <td class="numeric"><?php echo $r_gal[2] ?></td>
                                  <td class="numeric"><a href="tel:<?php echo $r_gal[4] ?>"><?php echo $r_gal[4] ?></a></td>
                                  
                                  <td class="numeric"><?php echo $r_gal[6] ?></td>
                                  <td class="numeric"><?php echo $r_gal[9] ?></td>
                                  <td class="numeric"><?php echo $r_gal[11] ?></td>
                                  <td class="numeric"><?php echo $r_gal[12] ?></td>
                                  <td class="numeric"><b><?php echo $r_gal[13] ?></b></td>
                                  <td class="numeric"><?php echo $r_gal[14] ?></td>
                              </tr>
                              <?php
                                                            }
                                                        }
                                                        ?>
                              </tbody>
                          </table>
                          </section>
                        </div>
                    </div>
                
                </div>
          	<!-- INLINE FORM ELELEMNTS -->
          	<!-- /row -->
          	
          	<!-- INPUT MESSAGES -->
          	<!-- /row -->
          	
          	<!-- INPUT MESSAGES -->
          	<div class="row mt">
          		<!-- /col-lg-12 -->
          		
          	<!-- CUSTOM TOGGLES -->
          		
          	</div><!-- /row -->
          	
          	
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
