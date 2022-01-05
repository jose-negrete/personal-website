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
					"personal-website" => "https://peprojects.dev/alpha-3/shayne/",
					"click-here-text" => "Check out my work here",
				];

				$budi = [
					"name" => "Budi",
					"picture" => "images/budi.png",
					"blurb" => "I'm a barista turned Perpetual Education- minted Web Developer",
					"personal-website" => "https://peprojects.dev/alpha-3/budi/web-portal/",
					"click-here-text" => "click here",
				];

				$tara = [
					"name" => "TareUhhhhhh",
					"picture" => "images/tara.png",
					"blurb" => "An aspiring web developer and programming enthusiast. On this journey to a new career, I'm collecting experience and inspiration. Come join me and see what I've got so far!",
					"personal-website" => "https://peprojects.dev/alpha-3/tara/",
					"click-here-text" => "check it out",
				];

				$andrew = [
					"name" => "Andrew",
					"picture" => "images/andrew.png",
					"blurb" => "Aspiring web developer who loves working with computers and technology. Let's see what we can do together.",
					"personal-website" => "https://peprojects.dev/alpha-3/andrew/",
					"click-here-text" => "click here",
				];

				$joshua = [
					"name" => "Joshua",
					"picture" => "images/josh.jpeg",
					"blurb" => "Josh's stuff",
					"personal-website" => "https://peprojects.dev/alpha-3/josh/",
					"click-here-text" => "click here",
				];

				$natasha = [
					"name" => "Natasha",
					"picture" => "images/natasha.jpeg",
					"blurb" => "Natasha's stuff",
					"personal-website" => "https://peprojects.dev/alpha-3/natmorrison/",
					"click-here-text" => "click here",
				];

				$jose = [
					"name" => "jose",
					"picture" => "images/jose.jpeg",
					"blurb" => "The sketchiest dude on the WEB",
					"personal-website" => "https://peprojects.dev/alpha-3/jose/",
					"click-here-text" => "E N T E R",
				];

				$saul = [
					"name" => "Saul",
					"picture" => "images/saul.jpeg",
					"blurb" => "Saul's stuff",
					"personal-website" => "https://peprojects.dev/alpha-3/saul/",
					"click-here-text" => "click here",
				];

				$wytonya = [
					"name" => "Wytonya",
					"picture" => "images/wytonya.png",
					"blurb" => "Wytonya's stuff",
					"personal-website" => "https://peprojects.dev/alpha-3/wytonya/",
					"click-here-text" => "click here",
				];

				$sheriffDerek = [
					"name" => "Sheriff Derek",
					"picture" => "images/derek.jpeg",
					"blurb" => "Someone's got to design this town.",
					"personal-website" => "https://peprojects.dev/alpha-3/sheriff/",
					"click-here-text" => "Giddy Up",
				];




				$students = [$shayne, $budi, $tara, $andrew, $joshua, $natasha, $jose, $saul, $wytonya, $sheriffDerek];

				foreach ($students as $student) {
					echo"<picture class='portrait'>"; 
					echo 	'<img src=' . $student["picture"] . '>';
					echo "</picture>";

					echo "<p>" . $student['name'] . "</p>";
					echo "<p>" . $student['blurb'] . "</p>";
					echo "<a href=' " . $student["personal-website"] . "'><p>" .$student["click-here-text"] . "</p></a>";
					
				}
			 ?>
				<a href=''></a>


		


						
					<picture></picture>
				
		
			

	
		</body>
	</html>