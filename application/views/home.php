
<!DOCTYPE html>
<html lang="en">
<head> 
<title>Veg Mores a Restaurant Category</title> 
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps --> 
<!-- Custom-Stylesheet-Links -->
<link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css" type="text/css" media="all"/> <!-- Bootstrap-Core-CSS --> 
<link rel="stylesheet" href="<?php base_url()?>assets/css/style.css" type="text/css" media="all" /> <!-- Index-Page-Styling --> 
<link rel="stylesheet" href="<?php base_url()?>assets/css/1.css" type="text/css"/>
<link rel="stylesheet" href="<?php base_url()?>assets/css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->  
<link rel="stylesheet" href="<?php base_url()?>assets/css/popuo-box.css" type="text/css" media="all"/> <!-- Popup-Box-CSS -->
<link href="<?php base_url()?>assets/css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom-Stylesheet-Links --> 
<!-- Web-Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts --> 
</head>
<body> 
	<!-- Header -->
	<div class="w3layouts-header"> 
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container"> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Home</a>
				</div> 
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect active"><a href="index.php">Home</a></li>
						<li class="hover-effect"><a href="#about" class="scroll">About</a></li>
						<li class="hover-effect"><a href="#menu" class="scroll">Menu</a></li>
						<li class="hover-effect"><a href="#features" class="scroll">Features</a></li>
						<li class="hover-effect"><a href="#specials" class="scroll">Specials</a></li>
						<li class="hover-effect"><a href="#team" class="scroll">Team</a></li> 
						<li class="hover-effect"><a href="#contact" class="scroll">Reservations</a></li>
					</ul>
				</div> 
			</div>
		</nav>
		<!-- //Navbar --> 
		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider">
				<!--
				<li>
					<img src="images/1.jpg" alt="Veg Mores">
				</li>
				<li>
					<img src="images/2.jpg" alt="Veg Mores">
				</li> 
				-->
				<?php 
					$mangdl = json_decode($mangdl,true);
					$dem = 1;
				?>
				<?php foreach ($mangdl as $key => $value  ): ?>
				<li class=" <?php if($dem == 1) {echo "active";  $dem++; }  ?>">
				<img src="<?= $value['slide_image'] ?>" alt="Veg Mores">
				</li>
			<?php endforeach ?>
			</ul>
		</div>
		<!-- //Slider --> 
	</div>
	<!-- //Header --> 
	<!-- About -->
	<div id="about" class="about">
		<h1>ABOUT US</h1>
		<div class="w3-agileitsline"></div> 
		<h3>Welcome to " Veg Mores " nulla gravida tincidunt imperdiet. Cras mattis risus vitae mi mattis, quis gravida arcu imperdiet. Praesent tortor tellus convallis acnon. </h3>
		<h4>Uisque quis egestas metus, ac semper magna. Fusce erat urna vestibulum.</h4> 
		<div class="container"> 
			<div class="about-agileinfo">
				<div class="col-md-6 about-agileinfo-grid">
					<div class="about-agileinfo-list1">
						<h5>Consectetur</h5>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Lorem Ipsum Dolor Sit Amet</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Sed ut perspiciatis unde</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Neque porro quisquam est</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Quis autem vel eum iure</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Ut enim ad minima veniam</li>
						</ul>
					</div>
					<div class="about-agileinfo-image">
						<img src="images/about-1.jpg" alt="Veg Mores">
					</div>
					<div class="clearfix"></div>
				</div> 
				<div class="col-md-6 about-agileinfo-grid">
					<div class="about-agileinfo-list2">
						<h5>Perspiciatis</h5>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Neque porro quisquam est</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Lorem Ipsum Dolor Sit Amet</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Ut enim ad minima veniam</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Neque porro quisquam est</li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Sed ut perspiciatis unde</li>
						</ul>
					</div>
					<div class="about-agileinfo-image">
						<img src="images/about-2.jpg" alt="Veg Mores">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> 
	</div>
	<!-- //About --> 
		<!-- Menu -->
	<div id="menu" class="menu">
		<h1 class="titleMenu">- MENU -</h1>
		<div class="w3-agileitsline"></div>
		<div class="container-fluid khoimenu">
			<div class="col-xs-4 text-xs-center">
				<div class="menupizza">
					<h3 class="textmenu"><a href="MenuPizza" class="hovertext">pizza</a></h3>
				</div>
			</div>
			<div class="col-xs-4 text-xs-center">
				<div class="menupizza">
					<h3 class="textmenu"><a href="MenuFood" class="hovertext">food</a></h3>
				</div>
			</div>
			<div class="col-xs-4 text-xs-center">
				<div class="menupizza">
					<h3 class="textmenu"><a href="MenuDessert" class="hovertext">dessert</a></h3>
				</div>
			</div>
		</div> <!--  Het container -->
	</div> 
	<!-- Hết Menu -->
	<!-- Features -->
	<div class="features" id="features">
		<div class="container"> 
			<h2>FEATURES</h2>
			<div class="w3-agileitsline"></div> 
			<div class="feature-grid">
				<div class="col-md-4 col-sm-4 feature-wthree">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<i class="fa fa-cutlery" aria-hidden="true"></i>
						</div>
						<div class="features-info">
							<a href="Features"><h4>Delicious food</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature-wthree">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<i class="fa fa-glass" aria-hidden="true"></i>
						</div>
						<div class="features-info">
							<a href="Features"><h4>Variety Drinks</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature-wthree">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<i class="fa fa-diamond" aria-hidden="true"></i>
						</div>
						<div class="features-info">
							<a href="Features"><h4>Best Certification</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature-wthree">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div> 
						<div class="features-info">
							<a href="Features"><h4>Home Delivery</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature-wthree">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<i class="fa fa-gift" aria-hidden="true"></i>
						</div>
						<div class="features-info">
							<a href="Features"><h4>Festival Offers</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 feature-wthree">
					<div class="row features-item sans-shadow text-center">
						<div class="features-icon">
							<i class="fa fa-birthday-cake" aria-hidden="true"></i>
						</div>
						<div class="features-info">
							<a href="Features"><h4>Private Events</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div> 
		</div>
	</div>
	<!-- //Features --> 
	<!-- Real -->
	<div class="real" id="specials"> 
		<div class="container">
			<div class="col-md-4 col-sm-4 real-w3grid">
				<img src="images/i1.png" alt="Veg Mores">
				<h3>Our Specials</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut velit egestas, efficitur tortor vel elementum sem. </p>
			</div>
			<div class="col-md-4 col-sm-4 real-w3grid">
				<img src="images/i2.png" alt="Veg Mores">
				<h3>Our Specials</h3>
				<p>Consectetur adipiscing elit, lorem ipsum dolor sit amet. Ut ut velit egestas, efficitur tortor vel elementum sem. </p>
			</div>
			<div class="col-md-4 col-sm-4 real-w3grid">
				<img src="images/i3.png" alt="Veg Mores">
				<h3>Our Specials</h3>
				<p>Dolor sit amet lorem ipsum, consectetur adipiscing elit. Ut ut velit egestas, efficitur tortor vel elementum sem. </p>
			</div>
			<div class="clearfix"></div>
		</div> 
	</div>
	<!-- //Real --> 
	<!-- New -->
	<div class="new agileits-w3layouts">
		<h3>Today's Specials</h3>
		<div class="w3-agileitsline"></div> 
		<div class="container">
			<div class="col-md-6 col-sm-6 new-w3lsgrid">
				<img src="images/new-1.jpg" alt="Veg Mores">
			</div>
			<div class="col-md-6 col-sm-6 new-w3lsgrid about-agileinfo-grid">
				<h4>Lorem ipsum dolor sit amet</h4>
				<ul>

					<li><span class="glyphicon glyphicon-arrow-right"></span> Soup and Starters </a></li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> Pasta, Rice & Grains</a></li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> American antipasto</a></li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> Apple walnut salad</a></li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> Pasta with tomatoes & nuts</li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> pizza rolls</li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> Signature Cocktails</a></li>
					<li><span class="glyphicon glyphicon-arrow-right"></span> Yogurt with Fruit and Berries</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			
		</div> <!-- Hết container -->
	</div> <!-- Hết Today Specials -->
	<!-- //New --> 
	<!-- Formats -->
	<div class="formats"> 
		<h3>New Recipes</h3>
		<div class="w3-agileitsline"></div>
		<p>Choose what you want to play from more than 10 different racing formats.</p>

		<!-- Owl-Carousel -->
		<div id="owl-demo" class="owl-carousel text-center">
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/1.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/2.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/3.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/4.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/5.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/1.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/2.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/3.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
			<a class="item g1 popup-with-zoom-anim" href="#small-dialog">
				<img class="lazyOwl" src="<?php base_url()?>assets/images/4.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Duis nec congue</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</a>
		</div>
		<!-- //Owl-Carousel --> 
		<!-- Magnific-Popup -->
		<div class="agile-caption-popup">
			<div id="small-dialog" class="mfp-hide innercontent">
				<h3>Place content Here</h3>
				<img class="img-responsive" src="<?php base_url()?>assets/images/1.jpg" title="postname" alt=""/>
				<p>Etiam sit amet nunc nec magna accumsan ultricies eget a leo praesent nec libero aliquet, malesuada nibh et tincidunt arcu. Aenean porta faucibus nisl. Fusce ultrices nec purus eget consequat. Phasellus pharetra dignissim lacus id rhoncus. In malesuada et mi non mollis. </p>
			</div> 
		</div>
		<!-- //Magnific-Popup --> 
	</div>
	<!-- //Formats --> 
	<!-- Progressive-Effects -->
	<div class="progressive-effects" id="skills">
		<div class="container"> 
			<!-- Skills -->
			<div id="about-us" class="parallax">
				<h3>SKILLS</h3>
				<div class="w3-agileitsline"></div>

				<div class="row">
					<div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<p class="lead">Lorem ipsum dolor sit</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="90">90%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
							<p class="lead">Phasellus eget enimvel</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="80">80%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
							<p class="lead">Nulla gravida tincidunt</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="85">85%</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<p class="lead">Etiam sagittis nulla acante</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="95">95%</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Skills --> 
			<!-- Stats -->
			<div class="stats"> 
				<h3>STATS</h3>
				<div class="w3-agileitsline"></div> 
				<div class="stats-info agileits-w3layouts">
					<div class="col-md-3 col-sm-3 stats-grid">
						<div class="stats-img">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12357000' data-delay='.5' data-increment="10000">12357000</div>
						<p>Happy Clients</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid">
						<div class="stats-img w3-agileits">
							<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
						</div>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='170' data-delay='8' data-increment="1">170</div>
						<p>Our Events</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid">
						<div class="stats-img w3-agileits">
							<i class="fa fa-cutlery" aria-hidden="true"></i>
						</div>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1290000' data-delay='.5' data-increment="1000">1290000</div>
						<p>Food Varieties</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid">
						<div class="stats-img w3-agileits">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='169' data-delay='8' data-increment="1">169</div>
						<p>Awards</p>
					</div>
					<div class="clearfix"></div>
				</div> 
			</div>
			<!-- //Stats --> 
		</div>
	</div>
	<!-- Progressive-Effects --> 
	<!-- Team -->
	<div class="team" id="team">
		<h3>TEAM</h3>
		<div class="w3-agileitsline"></div> 
		<div class="container">
			<div class="twthree-grid">
				<div class="effect-dexter">
					<img src="<?php base_url()?>assets/images/t1.jpg" alt="Veg Mores"/>
					<div class="figcaption">
						<h4>Bruce <span> Wayne</span></h4>
						<div class="connect-social"> 
							<ul class="w3lsocial">
								<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li> 
							</ul>
						</div>
					</div>
				</div>
				<div class="effect-dexter">
					<img src="<?php base_url()?>assets/images/t2.jpg" alt="Veg Mores"/>
					<div class="figcaption">
						<h4>Clark <span> Kent</span></h4>
						<div class="connect-social"> 
							<ul class="w3lsocial">
								<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li> 
							</ul>
						</div>
					</div>
				</div>
				<div class="effect-dexter">
					<img src="<?php base_url()?>assets/images/t3.jpg" alt="Veg Mores"/>
					<div class="figcaption">
						<h4>Diana <span> Prince</span></h4>
						<div class="connect-social"> 
							<ul class="w3lsocial">
								<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li> 
							</ul>
						</div>
					</div>
				</div>
				<div class="effect-dexter">
					<img src="<?php base_url()?>assets/images/t4.jpg" alt="Veg Mores"/>
					<div class="figcaption">
						<h4>Lex <span> Luthor</span></h4>
						<div class="connect-social"> 
							<ul class="w3lsocial">
								<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Team --> 
	 
	<!-- Contact -->
	<div class="contact" id="contact">
		<div class="container"> 
			<h3>Reservations</h3>
			<div class="w3-agileitsline"></div> 
			<form action="home/Booking" method="post" class="contact_form">  
				<div class="message">
					<div class="col-md-6 col-sm-6 grid_6 c1">
						<input type="text" name="tenkh" class="text" placeholder="Name" required="" >
						<input type="text" name="email" class="text" placeholder="Email" required="" >
						<input type="text" name="sdt" class="number" placeholder="Phone" required="" >
					</div> 
					<div class="col-md-6 col-sm-6 grid_6 c1">
						<input type="date" name="ngaydatban" class="date" placeholder="Data set" required="" >
						<input type="time" name="giodatban" class="time" placeholder="Hours set" required="" >
						<input type="text" name="songuoi" class="text" placeholder="Number" required="" >
					</div>
					<div class="clearfix"></div> 
					<input type="submit" name="send" class="more_btn" value="Send">
				</div>
			</form> 
		</div>
	</div>
	<!-- //Contact --> 
	<!-- Footer -->
	<div class="footer">
		<div class="container"> 
			<div class="footer-info">
				<div class="col-md-4 col-sm-4 footer-info-grid links">
					<h4>QUICK LINKS</h4>
					<ul>
						<li><a href="#about">About</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#skills">Skills</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li>Pizza HOKO</li>
							<li>102 Lạc Long Quân, P.5, Q.11</li>
							<li>Hồ Chí Minh</li>
							<li>Telephone : +84 (888) 888-8888</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">doandinh1998@gmail.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-4 col-sm-4 footer-info-grid email">
					<h4>NEWSLETTER</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions. </p>
 
					<form action="#" method="post" class="newsletter">  
						<input class="email" type="email" placeholder="Your email..." required="">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div> 
			<div class="connect">
				<div class="connect-social">
					<h4>CONNECT</h4>  
					<ul>
						<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="social-button google"><i class="fa fa-vimeo"></i></a></li> 
						<li><a href="#" class="social-button google"><i class="fa fa-linkedin"></i></a></li> 
						<li><a href="#" class="social-button google"><i class="fa fa-pinterest-p"></i></a></li> 
						<li><a href="#" class="social-button google"><i class="fa fa-flickr"></i></a></li> 
						<li><a href="#" class="social-button google"><i class="fa fa-behance"></i></a></li> 
						<li><a href="#" class="social-button google"><i class="fa fa-rss"></i></a></li> 
					</ul>
				</div>
			</div> 
			<div class="copyright">
				<p>&copy; 2017 Veg Mores. All Rights Reserved</p>
			</div> 
		</div>
	</div>
	<!-- //Footer --> 
	<!-- Custom-JavaScript-File-Links --> 
	<script type="text/javascript" src="<?php base_url()?>assets/js/jquery.min.js"></script> <!-- Supportive-JavaScript --> 
	<!-- Banner-Slider-JavaScript -->
	<script src="<?php base_url()?>assets/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 800,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- //Banner-Slider-JavaScript --> 
	<!-- Owl-Carousel-JavaScript -->
	<script src="<?php base_url()?>assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : false,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

	<!-- Magnific-Popup-Display-JavaScript -->
	<script src="<?php base_url()?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
	</script>
	<!-- //Magnific-Popup-Display-JavaScript -->

	<!-- Progressive-Effects-Animation-JavaScript -->
	<script type="text/javascript" src="<?php base_url()?>assets/js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="<?php base_url()?>assets/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php base_url()?>assets/js/mousescroll.js"></script>
	<script type="text/javascript" src="<?php base_url()?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?php base_url()?>assets/js/numscroller-1.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

	<!-- //Progressive-Effects-Animation-JavaScript -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="<?php base_url()?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php base_url()?>assets/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<script type="text/javascript" src="<?php base_url()?>js/bootstrap.min.js"></script> <!-- Necessary-JS-File-For-Bootstrap --> 
</body>
</html>