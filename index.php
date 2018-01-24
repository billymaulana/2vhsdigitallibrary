<?php 
require 'config/database.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="assets/css/Vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/Vendor/owl/owl.carousel.css" rel="stylesheet" />
		<link href="assets/css/Vendor/animated/animate.min.css" rel="stylesheet"> 
		<link href="assets/css/Vendor/animated/animate.css" rel="stylesheet"> 
		<link href="assets/css/style.css" rel="stylesheet" />
		<title>2 VHS DIGITAL LIBRARY</title>
	</head>
	<body>


		<header>
			<nav class="navbar navbar-default">
				<div id="menusign">
					<div id="menu-links">
                        <ul>
                            <li class="reg_2vhs">
									<?php 

									

									if ( !empty($_SESSION['user'])) {
									$user=$_SESSION['user'];
									echo "<a class=''>".$user."</a></li>
									<li><a href='act/act_logout.php'>LOGOUT</a></li>";
									}else {?>
									<a class='gabung'>LOGIN</a>
									<div class="join-top">
									<form action="act/act_login.php?type=user" method="post">
										<div class="form-group">
											<input type="text" name="username" class="form-control" id="username" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control" id="password" placeholder="Password">
										</div>
										<button type="submit" class="btn btn-default fr">Login</button>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="remember-me"> Remember me
											</label>
										</div>
										<br />
										<p class="hitam">Not a member? 
											<a href="formulir.php">Sign up now </a>					
										</p>
										<p class="orange" >
											<a href="adminlogin.php"> Admin Here</a>
										</p>
										
									</form>
									
                                </div>
                            </li>
                            <li><a href="formulir.php">REGISTER</a></li>
									<?php } ?>
                             
							
                            <div class="clr"></div>
                        </ul>
                    </div>
				</div>
				<div id="menusign-before"> </div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">
						<img class="hvr-pulse" src="assets/images/logo1.png" />
						<div id="header">
							<span id="title" class="hvr-skew-forward">2 VHS</span>
							<span id="deshead" class="hvr-float-shadow">DIGITAL LIBRARY</span>
						</div>	
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<nav id="menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">HOME</a></li>
							<li class="dropdown">
								<a href="catalog.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATALOG<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="catalog.html">Book</a></li>
									<li><a href="magazine.html">Magazine</a></li>
									<li><a href="jurnal.html">Journal</a></li>
								</ul>
							</li>
							<li><a href="gallery.html">GALLERY</a></li>
							<li><a href="about.html">ABOUT</a></li>
							<li><a href="contact.html">CONTACT</a></li>
							<li><a href="adminlogin.php">ADMIN</a></li>
						</ul>
					</nav>	
				</div>			
			</nav>
		</header>
		<!-- Carousel Slider-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="assets/images/slide-1x2.png" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">	
								<h1 class="h1welcome ">WELCOME TO</h1>
								<p><a class="btn btn-lg btn-primary" href="about.html" role="button">Read More</a></p>
							</div>	
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" style="height: 100%; width:100%" src="assets/images/library.jpg" alt="First slide"">
					<div class="container">
						<div class="carousel-caption">
							<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">	
								<h1 class="h1">2 VHS DIGITAL LIBRARY OFFICE</h1>
								<p><a class="btn btn-lg btn-primary" href="gallery.html" role="button">Read More</a></p>
							</div>	
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide" style="width: 100%;" src="assets/images/Interior_view_of_Stockholm_Public_Library.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.9s">	
								<h1 class="h1"> “ Dua kekuatan yang berhasil memengaruhi pendidikan manusia : Seni dan Sains. Keduanya bertemu dalam Buku.”<br /> — Maxim Gorky</h1>
								<p><a class="btn btn-lg btn-primary" href="catalog.html" role="button">Read More</a></p>
							</div>	
						</div>
					</div>
				</div>
				<div class="item">
					<img class="4-slide" style="height: 100%; width:100%" src="assets/images/perpus15.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<div class="wow fadeIn" data-wow-offset="0" data-wow-delay="1.0s">	
								<h1 class="h1"> “ Buku adalah sahabat yang paling tenang dan setia, pembimbing yang paling bijak dan terbuka, dan guru yang paling sabar."<br /> — Charles W. Eliot</h1>
								<p><a class="btn btn-lg btn-primary" href="catalog.html" role="button">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="5-slide" style="height: 100%; width:100%" src="assets/images/library-stock-photo-hd-wallpaper.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">	
								<h1 class="h1">“ Siapapun yang terhibur dengan buku-buku, kebahagiaan tak akan sirna dari dirinya.” <br />— Ali bin Abi Thalib </h1>
								<p><a class="btn btn-lg btn-primary" href="catalog.html" role="button">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="6-slide" style="width: 100%;" src="assets/images/306638.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">	
								<h1 class="h1">“ Jika ingin menghancurkan sebuah bangsa dan peradaban, hancurkan buku-bukunya maka pastilah bangsa itu akan musnah.”<br />- Milan Kundera</h1>
								<p><a class="btn btn-lg btn-primary" href="catalog.html" role="button">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- / End carousel Slider -->
		<!-- container -->
		         
		<div class="demo">
			<div class="container">
				<div class="row">
					<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.0s">	
						<h2 class="featurette-heading"> NEWEST <span class="text-muted">BOOK</span></h2>	
					</div>	
					<div class="span12">
						<div id="owl-demo" class="owl-carousel">
							<div class="isisowl">
								<img class="bayangan" src="assets/images/SK2H_cover.jpg" alt="Generic placeholder image" >
								<h2>Sepasang Kaos Kaki Hitam</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/akuhadir.jpg" alt="Generic placeholder image" >
								<h2>Aku Hadir Di Hari Ini</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/beast.jpg" alt="Generic placeholder image" >
								<h2>Labirin Cinta di KM 0</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/alovefsiry.jpg" alt="Generic placeholder image" >
								<h2>A Love's Fairytale</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/Gajah_Mada1.jpg" alt="Generic placeholder image" >
								<h2>Gajah Mada</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/b8-Recovered.jpg" alt="Generic placeholder image" >
								<h2>Ayah</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/azab.jpg" alt="Generic placeholder image" >
								<h2>Azab Dan Sengsara</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/zb.jpg" alt="Generic placeholder image" >
								<h2>Beastly</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="isisowl">
								<img class="bayangan" src="assets/images/alock.jpg" alt="Generic placeholder image" >
								<h2>Act Lady Think Man</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
							<div class="item">
								<img class="bayangan" src="assets/images/bbjh.jpg" alt="Generic placeholder image" >
								<h2 class="isisowl">Jejak Pemikiran B.J.Habibie</h2>
								<p class="desbook">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p><a class="btn btn-default btnbook " href="aboutbuku.html" role="button">View details &raquo;</a></p>
							</div>
						</div>	 
					</div>	  
				</div> 
			</div> 
		</div> 	
		<!-- / End container -->
		<footer>
			<p>Created by Billy Maulana, Aris Purnomo, M. Zalaludin A, Habib Ali  F. Copyright &copy; 2015</p>
		</footer>
		<script src="assets/js/vendor/Jquery/jquery.min.js"></script>
		<script src="assets/js/vendor/Bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/vendor/owl/owl.carousel.js"></script>
		<script src="assets/js/vendor/anyar/wow.min.js"></script>
		<script src="assets/js/main.js"></script>	
	</body>
<html>