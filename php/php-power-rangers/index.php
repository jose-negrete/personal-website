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

			<h1>The Mighty Morphing Power Rangers</h1>

			<?php
				
				$Jason = [

					"age" => 16,
					"ranger-color" => "red",
					"home-town" => "Angel Grove",
					"zord-name" => "Tyrannosaurus Dinozord",
					"can-morph" => true,

				];

				$Kimberly = [

					"age" => 16,
					"ranger-color" => "pink",
					"home-town" => "Angel Grove",
					"zord-name" => "Pterodactyl Dinozord",
					"can-morph" => true,

				];

				$Zach = [

					"age" => 16,
					"ranger-color" => "black",
					"home-town" => "Angel Grove",
					"zord-name" => "Mastodon Dinozord",
					"can-morph" => true,

				];

				$Trini = [

					"age" => 16,
					"ranger-color" => "yellow",
					"home-town" => "Angel Grove",
					"zord-name" => "Saber-Toothed Tiger Dinozord",
					"can-morph" => true,

				];

				$Billy = [

					"age" => 16,
					"ranger-color" => "blue",
					"home-town" => "Angel Grove",
					"zord-name" => "Triceratops Dinozord",
					"can-morph" => true,

				];

				$angleGrove = [
					"under-attack" => true,
				];

				$mmpRangers = [$Jason, $Kimberly, $Zach, $Trini, $Billy];


				foreach ($mmpRangers as $ranger) {

						echo $ranger["zord-name"];
				}

				if($angleGrove["under-attack"] && $Jason["can-morph"]) {
					echo "<p> and Jason yelled 'it's Morphing Time' </p>";
				} 
				

			?>

			
		</body>
	</html>