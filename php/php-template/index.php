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
			<?php 
				$myFavoriteThings = ["bell peppers" , "comics" , "knick-knacks" , "the color blue"];

				echo $myFavoriteThings[3];

				echo "<p> I like the " . $myFavoriteThings[3] . "</p>";


				$shayne = [
					"age" => 29,
					"favorite-food" => "soup",
					"alive" => true,
					"hometown" => "New York",
					"favorite-place" => "home",

				];

				echo $shayne["favorite-place"];
			?>

			<p>My favorite food is <?php echo $shayne["favorite-food"];?></p>

			<p>My favorite place is <?=$shayne["favorite-place"]?></p>
		
		</body>
	</html>