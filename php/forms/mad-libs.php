<style> 
	form {
		max-width: 400px;
	}

	.field {
		display: flex;
		flex-direction: column;	
	}
</style>






<?php
// Initialize variable for the verb
	$verb = "";
// Initialize variable for the noun
	$noun = "";
// Initialize variable for the adjective
	$adjective = "";
// Initialize variable for the adverb 
	$adverb = "";
//Initialize variable for the default message;
	$message = "Welcome to the Madlib generator"; 
// Initialize variable mad-lib 
	$madlib = "";
// display mad-lib 

	if( isset($_POST["submitted"]) ) {

		if( isset($_POST["verb"]) ) {

			$verb = $_POST["verb"];

			if( strlen($_POST["verb"] < 1) ) {
				$verb = "Verb";	
			}
		}
		
		if( isset($_POST["adjective"]) ) {
			$adjective = $_POST["adjective"];

			if( strlen($_POST["adjective"] < 1) ) {
				$adjective = "Adjective";
			}
		}
		
		if( isset($_POST["noun"]) ) {
			$noun = $_POST["noun"];

			if( strlen($_POST["noun"] < 1) ) {
				$noun = "Noun";
			}
		}

		if( isset($_POST["adverb"]) ) {
			$adverb = $_POST["adverb"];


			if( strlen($_POST["adverb"] < 1) ) {
				$adverb = "Adverb";
			}
		}

		$madlib = "Do you $verb your $adjective $noun $adverb? That's hilarious!";

		$message = $madlib;
	}
?>






<form method="POST">
	<p><?=$message?></p>

	<div class="field">
		<label>Verb</label>
		<input name="verb" value="<?=$verb?>" placeholder="...">
	</div>

	<div class="field">
		<label>Adjective</label>
		<input name="adjective" value="<?=$adjective?>" placeholder="...">
	</div>

	<div class="field">
		<label>Adverb</label>
		<input name="adverb" value="<?=$adverb?>" placeholder="...">
	</div>

	<div class="field">
		<label>Noun</label>
		<input name="noun" value="<?=$noun?>" placeholder="...">
	</div>

	<button type='submit' name="submitted">Submit</button>
	
</form>