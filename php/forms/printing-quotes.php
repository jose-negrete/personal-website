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
// initialize quote variable 
	$quote = "";
// initialize author variable
	$author = "";
// initialize message variable 
	$message = "input a quote and the author"; 
// check for user input
	if( isset($_POST["submitted"]) ) {
		// If input is true... 
		if( isset($_POST["quote"]) ) {
			$quote = $_POST["quote"];
		}
		
		$author = isset($_POST['name']) ? $_POST['name'] : "";
		
// compile quote and author message
		$message = "$author says \"$quote\""; 
	}


// If no input create warning message 
// Display message 

?>






<form method="POST">
	<p><?=$message?></p>

	<div class="field">
		<label>Quote</label>
		<input  name="quote" value="<?=$quote?>" placeholder="...">
	</div>

	<div class="field">
		<label>Author</label>
		<input name="author" value="<?=$author?>" placeholder="...">
	</div>


	<button type='submit' name="submitted">Submit</button>
	
</form>