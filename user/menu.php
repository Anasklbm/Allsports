<?php

 $sel12=mysqli_query($dbcon,"select * from user_data where em='".$_SESSION['uid']."'");
                             $r12=mysqli_fetch_row($sel12);
?>


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
					<li class="social-icon">
						<ul class="social-icons style-5">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
							<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
					</li>
					<li class="login-modal">
						<a href="#" class="login" data-toggle="" data-target=""><i class="fa fa-user"></i><?php echo $r12[1] ?></a>
						<div class="modal fade" id="login-modal">
						  	<div class="login-form position-center-center">
								<h2>Login<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="user" placeholder="domain@live.com">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group custom-checkbox">
									    <label>
									    	<input type="checkbox"> Stay login
									    </label>
									    <a class="pull-right forgot-password" href="#"></a>
									    <a href="#" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Forgot password?</a>
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
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
								<h2>Forgot password<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="user" placeholder="domain@live.com">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
									</div>
								</form>
							</div>
						</div>
					</li>
                                        <li class="language-dropdown" style="display: none">
				    	<a id="choses-lang" href="#"><i class="fa fa-globe"></i>Eng<i class="fa fa-caret-down"></i></a>
				    	<ul id="language-dropdown">
						    <li><a href="#"><img src="../temp/images/flags/img-02.jpg" alt="">ger</a></li>
						    <li><a href="#"><img src="../temp/images/flags/img-03.jpg" alt="">fra</a></li>
						    <li><a href="#"><img src="../temp/images/flags/img-04.jpg" alt="">bra</a></li>
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
						<a href="#"><img src="../temp/images/logo-4.png" alt=""></a>
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
						<li>
                                                    <a href="home.php">Home</a>
					    	
						</li>
                                                <li>
                                                    <a href="shop.php">shop</a>
					    	
						</li>
                                                <li>
                                                    <a href="gro.php">Ground</a>
					    	
						</li>
						<li>
                                                    <a href="legu.php">League</a>
					    	
						</li>
						<li>
                                                    <a href="st_team.php">Clubs</a>
					    	
						</li>
						<li>
					    	<a href="">Match</a>
					    	<ul>
                                                    <li><a href="match.php">Match Details</a></li>
                                                    <li><a href="match_result.php">Match Results</a></li>
							    
						  	</ul>
						</li>
						<li>
                                                    <a href="book.php">My Booking</a>
					    	
						</li>
						                                                                    
                                                <li><a href="../logout.php">Logout</a></li>                                                                  
					</ul>
					<!-- Nav List -->

				</div>
			</div>
		</div>
		<!-- Nav -->

	</header>