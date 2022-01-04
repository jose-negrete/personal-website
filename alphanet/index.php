<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>Alpha Net Homepage</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">
		</head>

		<body>
			
			<?php 

				$shayne = [
					"name" => "shayne",
					"picture" => "images/shayne.jpg",
					"blurb" => "I am a Ph.D. candidate in African American Studies as well as a web designer. I believe websites are the most powerful mediums of communication oout today, and we have a responsility to make them create them in ways that will leave an indelible positive impact on the world",
				];

				$budi = [
					"name" => "Budi",
					"picture" => "images/budi.png",
					"blurb" => "I'm a barista turned Perpetual Education- minted Web Developer",
				];

				$tara = [
					"name" => "TareUhhhhhh",
					"picture" => "images/tara.png",
					"blurb" => "An aspiring web developer and programming enthusiast. On this journey to a new career, I'm collecting experience and inspiration. Come join me and see what I've got so far!",
				];

				$andrew = [
					"name" => "Andrew",
					"picture" => "images/andrew.png",
					"blurb" => "Aspiring web developer who loves working with computers and technology. Let's see what we can do together.",
				];

				$joshua = [
					"name" => "Joshua",
					"picture" => "images/josh.jpeg",
					"blurb" => "Josh's stuff",
				];

				$natasha = [
					"name" => "Natasha",
					"picture" => "images/natasha.jpeg",
					"blurb" => "Natasha's stuff",
				];

				$jose = [
					"name" => "jose",
					"picture" => "images/jose.jpeg",
					"blurb" => "The sketchiest dude on the WEB",
				];

				$saul = [
					"name" => "Saul",
					"picture" => "images/saul.jpeg",
					"blurb" => "Saul's stuff",
				];

				$wytonya = [
					"name" => "Wytonya",
					"picture" => "images/wytonya.png",
					"blurb" => "Wytonya's stuff",
				];

				$sheriffDerek = [
					"name" => "Sheriff Derek",
					"picture" => "images/derek.jpeg",
					"blurb" => "Someone's got to design this town.",
				];




				$students = [$shayne, $budi, $tara, $andrew, $joshua, $natasha, $jose, $saul, $wytonya, $sheriffDerek];

				foreach ($students as $student) {
					echo"<picture class='portrait'>"; 
					echo 	'<img src=' . $student["picture"] . '>';
					echo "</picture>";

					echo "<p>" . $student['name'] . "</p>";
					echo "<p>" . $student['blurb'] . "</p>";
				}
			 ?>
				


		


						
					<picture></picture>
				
		
			

	
		</body>
	</html>