<!DOCTYPE HTML>

<html>
	<head>
		<title>Portfolio Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/computer.ico">

		<script src="https://kit.fontawesome.com/c8cd766d5c.js" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Bryan Arius</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="otherprojects.php">Other Projects</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-gem"></span></div>

							<h2>Bryan Arius</h2>
							<p>This is my programming portfolio</p>
							<p><a href="https://github.com/Bryanarius" target="_blank" style="font-size:36px;"><i class="fa-brands fa-github"></i></a>
							<a href="https://www.linkedin.com/in/bryan-arius-2224a415b" target="_blank" style="font-size:36px"><i class="fa-brands fa-linkedin"></i></a></p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->

						
						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Programming Projects</h2>
									<p>From the moment I produced "Hello World" in the console of my first application, I knew I was hooked into the
										world of software development. But software development has never been "just a job" for me, it's offered an
										engaging challenge to continually learn and improve my skills in creating high-quality software. What started with
										a simple "Hello World" has become a full-fledged passion that only gets more exciting as the years go by.
										Below you'll find projects I've completed that showcase my skills and general background in developing software.</p>
									<section class="features">
										<article>
											<a href="projects/war" target="_blank" class="image"><img src="images/war.jpg" alt="" /></a>
											<h3 class="major">War</h3>
											<p>The classic card game of war where you play vs the computer</p>
											<a href="projects/war" target="_blank" class="special">See more</a>
										</article>
										<article>
											<a href="projects/blog.website" target="_blank" class="image"><img src="images/blogwebsite.jpg" alt="" /></a>
											<h3 class="major">Blog Website</h3>
											<p>The blog website project is a fully responseive three page website replicating a blog with a signup/login system implemented in it  </p>
											<a href="projects/blog.website" target="_blank" class="special">See more</a>
										</article>
										<article>
											<a href="projects/bistros/" target="_blank" class="image"><img src="images/bistros.jpg" alt="" /></a>
											<h3 class="major">Bistros</h3>
											<p>The Bistros project is a sample resturant website with three seperate menus for breakfast, lunch, and dinner with an online ordering system</p>
											<a href="projects/bistros/" target="_blank" class="special">See more</a>
										</article>
										<article>
											<a href="projects/card.rpg/" target="_blank" class="image"><img src="images/cardrpg.jpg" alt="" /></a>
											<h3 class="major">RPG Card Game</h3>
											<p>A fully responsive role playing game where you are a wizard fighting aginst multiple monsters </p>
											<a href="projects/card.rpg/" target="_blank" class="special">See more</a>
										</article>
									</section>
									<ul class="actions">
										<li><a href="otherprojects.php" class="button">Browse More</a></li>
									</ul>
								</div>
							</section>

					</section>
					<!-- Two -->
					<section id="two" class="wrapper alt spotlight style2">
						<div class="inner">
							<a href="projects/dashboard/" class="image" target="_blank" ><img src="images/dashboard.jpg" alt="" /></a>
							<div class="content">
								<h2 class="major">Dashboard</h2>
								<p>The Dashboard project is a google chrome extension that ultilizes multiple API's to display a random background image of nature, information about the price of the Cardano cryptocurrency, and the weather.</p>
								<a href="projects/dashboard/" class="special" target="_blank">See More</a>
							</div>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper spotlight style3">
						<div class="inner">
							<a href="projects/leadtracker/" class="image" target="_blank" ><img src="images/leadstracker.jpg" alt="" /></a>
							<div class="content">
								<h2 class="major">Leads Tracker</h2>
								<p>The Leads Tracker project is a google chrome extension that saves important websites that you may want to revisit at another time by receiving an input of the url of a website or by saving the website that the browser is currently on.</p>
								<a href="projects/leadtracker/" target="_blank" class="special">See More</a>
							</div>
						</div>
					</section>


				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							<p>Thank you for checking out my portfolio page. Feel free to contact me for any inquires by filling out the form below or emailing or calling the number below.</p>

							<form method="post" action="assets/php/emailprocess.php">
								<div class="fields">
									<div class="field">
										<label for="firstname">First Name</label>
										<input type="text" name="firstname" id="firstname" />
									</div>
									<div class="field">
										<label for="lastname">Last Name</label>
										<input type="text" name="lastname" id="lastname" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="submit" name="submit"/></li>
								</ul>
							</form>
			
							<ul class="contact">
								<li class="icon solid fa-home">

									<p>Jacksonville, Florida</p>
								</li>
								<li class="icon solid fa-phone">(904) 300-8135</li>
								<li class="icon solid fa-envelope"><a href="#">bryanarius@gmail.com</a></li>
								
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>