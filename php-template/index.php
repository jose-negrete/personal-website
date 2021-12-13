<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>[[enter title]]</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">

			<style>
				body {
					background-color: black;
				}
				p {
					color: red;
					margin-top: 10px;
					}
			</style>

		</head>

		<body>
			<?php 
				$noun="shoe box";
				$pNoun="buttons";
				$pVerb="drive";
				$bodyPart="arm";
				$adjective="blue";

				echo "<p> Today, every student has a computer small enough to fit into their " . $noun . ". You can solve any math problem by simply pushing the computer’s little " . $pNoun . ".</p>"
			?>
			<p>Computers can add, multiply, divide, and <?php echo $pVerb ?>. They can also <?php echo $pVerb ?> better than a human.</p>

			<p>Some computers have their own <?=$bodyPart?>. Other’s have a <?=$adjective?> screen that shows all kinds of <?=$pNoun?> and <?=$adjective?> figures.</p>
		</body>
	</html>