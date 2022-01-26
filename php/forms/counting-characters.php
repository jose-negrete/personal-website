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

	$message = "Please input a word";
	$string="";

	if( isset($_POST["submitted"]) ) {
		$string = $_POST["word"];
		$trim_string = trim($string);
		$length = strlen($trim_string);
		

		if ($length > 0) {
			$message = "$string has $length characters"; 
		}
		 
	}	
?>






<form method="POST">
	<p><?=$message?></p>

	<div class="field">
		<label>Word</label>
		<input type="text" name="word" value="<?=$string?>" placeholder="...">
	</div>


	<button type='submit' name="submitted">Submit</button>
	
</form>