<!DOCTYPE html>
<html lang="en">
<head> 
<title>MenuPizza</title> 
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps --> 
<!-- Custom-Stylesheet-Links -->
<link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css" type="text/css" media="all"/> <!-- Bootstrap-Core-CSS --> 
<link rel="stylesheet" href="<?php base_url()?>assets/css/style.css" type="text/css" media="all" /> <!-- Index-Page-Styling --> 
<link rel="stylesheet" href="<?php base_url()?>assets/css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->  
<link rel="stylesheet" href="<?php base_url()?>assets/css/popuo-box.css" type="text/css" media="all"/> <!-- Popup-Box-CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom-Stylesheet-Links --> 
<!-- Web-Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/Menu.css">
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
						<li class="hover-effect"><a href="#menupizza" class="scroll">Menu</a></li>
						<li class="hover-effect"><a href="features" class="scroll">Features</a></li>
						<li class="hover-effect"><a href="#specials" class="scroll">Specials</a></li>
						<li class="hover-effect"><a href="#team" class="scroll">Team</a></li>
						<li class="hover-effect"><a href="#reservations" class="scroll">Reservations</a></li>
					</ul>
				</div> 
			</div>
		</nav>
		<!-- //Navbar --> 
		<!-- Slider -->
		<div class="banner">
					<img src="images/bg_menu_pz.jpg" class="layer1" alt="Veg Mores">
					<p class="tieudefeat">Menu</p>
		</div>
		<!-- //Slider --> 
	</div>
	<!-- //Header -->
	<div id="menupizza" class="Menuchinhpizza">
			<div class="DetailMenupizza">
				<div class="pizza">
					<a href="#infoPizza" class="hover">Pizza /</a>
				</div>
				<div class="food">
					<a href="MenuFood" class="hover">Food /</a>
				</div>
				<div class="dessert">
					<a href="MenuDessert" class="hover">Dessert</a>
				</div>
			</div>
	</div>

	<!-- Menu Pizza -->
	<div id="infoPizza" class="infoPizza">
		<div class="container">
			<h2 class="bigtitle">Pizza</h2>
			<div class="w3-agileitsline daugach"></div>
			<?php foreach ($dulieutin as $value): ?>
				<!--   start-->
				<div class="noidungkhoi">		
					<div class="col-sm-4 chitietnd">
						<img src="<?= $value['anhpizza'] ?>" class="anhpizza" alt="">
						<p class="textpizza"><?= $value['ten'] ?></p>
						<p class="giapizza"><?= $value['gia'] ?> VND</p>
					</div>
				</div> <!-- Hết noidungkhoi -->
			<?php endforeach ;?>
				
			
		</div> <!-- Hết container -->
	</div> <!-- Hết infoPizza -->
	<!-- Hết Menu Pizza -->
	<!-- Footer -->
	<div class="footer">
		<div class="container"> 
			<div class="footer-info">
				<div class="col-md-4 col-sm-4 footer-info-grid links">
					<h4>QUICK LINKS</h4>
					<ul>
						<li><a href="#about">About</a></li>
						<li><a href="features">Features</a></li>
						<li><a href="#skills">Skills</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="home">Home</a></li>
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
				<p>&copy; ahihi đồ ngốc !!</p>
			</div> 
		</div>
	</div>
	<!-- //Footer --> 
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
	<script type="text/javascript" src="<?php base_url()?>assets/js/bootstrap.min.js"></script> <!-- Necessary-JS-File-For-Bootstrap --> 
</body>
</html>