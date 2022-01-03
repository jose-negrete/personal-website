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
				$mmpRangers = ["Jason", "Kimberly", "Zack", "Trini", "Billy"];

				

				foreach ($mmpRangers as $ranger) {
					echo $ranger;
				}

				$Jason = [

					"name" => "Jason",
					"age" => 16,
					"ranger-color" => "red",
					"home-town" => "Angel Grove",
					"zord-name" => "Tyrannosaurus Dinozord",
					"can-morph" => true,
					"picture" => "'images/jason.jpg'"

				];

				echo "<p>" . $Jason["ranger-color"] . "</p>";
		
			?>

		</body>


	</html>