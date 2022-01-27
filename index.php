
<!DOCTYPE HTML>

<html>

<head>
	<title>Rawan's portfolio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header">
		<div class="inner">
			<a href="#" class="image avatar"><img src="images/m2.png" alt="" /></a>
			<h1><strong>Rawan Khamis</strong> <i class="fa fa-hand-holding-heart"></i> <br> Web Developer PHP/Laravel specialist.<br />
			</h1>
	<h2>I can speak <i class="fa fa-language"></i></h2>
	<p>Arabic is my mother tongue <br>English <br> French</p>
		</div>
	</header>

	<!-- Main -->
	<div id="main">

		<!-- One -->
		<section id="one">
			<header class="major">
				<h2>About Me</h2>
			</header>
			<p><i>Hello,I'm Rawan </i>I specialize in <b>creating sites for individuals and businesses</b>.<br>I'm also a front-end developer and Graphic designer<br>
				Check out my articles Feel free to take a look at my latest projects on the web portfolio page.
				
			</p>
			<!-- <ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul> -->
		</section>

		<!-- Two -->
		<section id="two">
			<h2>Recent Work</h2>
			<div class="row">
				<article class="col-6 col-12-xsmall ">
					<a href="https://github.com/Rorokhf/LiveWire-Ecommerce_website.git" class="image fit thumb"><img src="images/56f0b38edb4dae281bf2283869fbf2c4.jpg" alt="" /></a>
					<h3>E-commerce</h3>
					<p>eCommerce Websites, the system allows users or customers to save their desired products to cart for later checkout. this system has its own "CPanel", this side is for the Website's management or the Administrator Side. The administrator side manages all the data that the website provides to the customers which include managing the products, warehouses, and reports. also, the user can show all products he was buying with all details. and more features.</p>
				</article>
				<article class="col-6 col-12-xsmall ">
					<a href="images/fulls/02.jpg" class="image fit thumb"><img src="images/c003e952b6d56c85afc15cb3f5247bcd.jpg" alt="" /></a>
					<h3>Dashboard With APIs</h3>
					<p>CURD products</p>
				</article>
				<article class="col-6 col-12-xsmall ">
					<a href="images/fulls/03.jpg" class="image fit thumb"><img src="images/2.jpg" alt="" /></a>
					<h3>Frond-end,Graphic desgins</h3>
					<p>you can check more details in my Github and Behance .</p>
				</article>
				<article class="col-6 col-12-xsmall ">
					<a href="https://github.com/Rorokhf/liveWire-Home-service.git" class="image fit thumb"><img src="images/UI Design 3D Illustration.png" alt="" /></a>
					<h3>Home-service</h3>
					<p>admin =>[add ,Edit ,list . show] Services , edit home page and show All contact us
						and more.
					</p>
				</article>
				
			</div>
			
		</section>

		<!-- Three -->
		<section id="three">
			<h2>CONTACT ME<i class="fa fa-pager"></i></h2>
			<p>I am available for hire and open to any ideas of cooperation.</p>
			<div class="row">
				<div class="col-8 col-12-small">
					<?php 
					$mgs="";
					if(isset($_GET['error']))
					{
						$msg="Please fill in the Blanks";
						echo'<div class="alert alert-danger">'. $msg.'</div>';
					}
					if(isset($_GET['success']))
					{
						$msg="Your message has been sent";
						echo'<div class="alert alert-success">'. $msg.'</div>';
					}
					?>
					<form method="post" action="contact.php">
						<div class="row gtr-uniform gtr-50">
							<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name"
									placeholder="Name" /></div>
							<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email"
									placeholder="Email" /></div>
							<div class="col-12"><textarea name="message" id="message" placeholder="Message"
									rows="4"></textarea></div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" name="send"/></li>
						</ul>
					</form>
					
				</div>
				<div class="col-4 col-12-small">
					<ul class="labeled-icons">
						<li>
							<h3 class="icon solid fa-home"><span class="label">Address</span></h3>
							Egypt,alexandria
						</li>
						<li>
							<h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
							+021288437786
						</li>
						<!-- <li>
							<h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
							<a href="#">hello@untitled.tld</a>
						</li> -->
					</ul>
				</div>
			</div>
		</section>

		
	</div>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<ul class="icons">
				<!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li> -->
				<li><a href="https://github.com/Rorokhf" class="icon brands fa-github"><span
							class="label">Github</span></a></li>
				<li><a href="https://www.behance.net/Rorokhf" class="icon brands fa-behance"><span
							class="label">Behance</span></a></li>
				<li><a href="https://www.linkedin.com/in/rawan-khamis-77805b1bb"
						class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
			</ul>
			
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
