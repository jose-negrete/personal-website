<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>[[enter title]]</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">
		</head>

		<body>

			<header class="site-header">
				<inner-column>
					<masthead>
						<nav class="site-menu">
							<a href="">LOGO</a>
							<a href="">Some page</a>
							<a href="">"Masthead"</a>
						</nav>

						<nav class="user-menu">
							<a href="">Sign-in</a>	
						</nav>
					</masthead>
				</inner-column>
			</header>
		
				<main>
					<inner-column>
						<section class="main-module">
							<picture class="photo">
								<img src="images/square.png">
							</picture>

							<div class="main-module-text">
								<h1>Hello! This is some text</h1>

								<p class="general-voice">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p> 
							</div>

							
						</section>

						<section class="call-to-action-module">
							<?php include("modules/call-to-action.php"); ?>
						</section>

						<article>
							
							<div class="article-heading">
								<h1>This is an "Article grid" module. This is its heading</h1>

								<p class="general-voice">Again, we totally just made that up. it's a box with boxes in it</p>
							</div>
							
						
					
							<?php

							echo "<div class='article-card-gallery'>";
								include("modules/article-card.php");
								include("modules/article-card.php");
								include("modules/article-card.php");
								include("modules/article-card.php");
								include("modules/article-card.php");
								include("modules/article-card.php");
							echo "</div>";
							?>	
						
						</article>

						<section class="call-to-action-module">
							<?php include("modules/call-to-action.php"); ?>
						</section>

	
					</inner-column>
				</main>

				<footer>

					<inner-column>
						<div class="footer-heading">
							<h1>This is the site footer and it has a 'site-map" module in it</h1>

							<p class="general-voice">Pretty standard type of thing, right?</p>
						</div>


						<div class="footer-links">
							
							<div class="footer-menus">
								<nav class="site-menu">
									<a href="">LOGO</a>
									<a href="">Some page</a>
									<a href="">"Masthead"</a>
								</nav>

								<nav class="user-menu-footer">
									<a href="">Sign-in</a>
								</nav>

							</div>
						
							<div class="extra-things">
								<nav class="legal">
									<a href="">Leagal thing a</a>
									<a href="">Leagal thing b</a>
								</nav>

								<nav class="social">
									<a href="">social thing a</a>
									<a href="">social thing b</a>
									<a href="">social thing c</a>
									<a href="">social thing d</a>
								</nav>
							</div>
						</div>

					</inner-column>
					
				</footer>
			

		</body>
	</html>