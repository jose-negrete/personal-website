 <?php
// Initialize vairable number 1 
 	$num_1 = "";
// Initialize vairable number 2
 	$num_2 = "";
// Initialize variable message 
 	$message = "Enter two numbers and we'll do some calculations";

 	if( isset($_POST["submitted"]) ) {
 		
 		if(isset($_POST["num-1"]) ) {
 			$num_1 = $_POST["num-1"];
 			$intNum_1 = floatval($num_1);
 		}

 		if(isset($_POST["num-2"]) ) {
 			$num_2 = $_POST["num-2"];
 			$intNum_2 = floatval($num_2);
 		}

 		echo $intNum_1 + $intNum_2;
 	}
// Convert variables from strings to numbers 
// Display the Calculations using the converted variables  
?>

<form method="POST">
	<p><?=$message?></p>

	<div class="field">
		<label>Number 1</label>
		<input type="number" name="num-1" value="<?=$num_1?>" placeholder="...">
	</div>

	<div class="field">
		<label>Number 2</label>
		<input type="number" name="num-2" value="<?=$num_2?>" placeholder="...">
	</div>


	<button type='submit' name="submitted">Submit</button>
	
</form>