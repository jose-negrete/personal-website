<?php
// Initialize current age 
$currentAge = "";

$c = ""; 
// Initialize age you'd like to retire 
$retirementAge = "";
$r= ""; 
// Initialize work years
$workYears = "";
// Initialize Message 
$message = "";
// Initialize the current year 
$currentYear = date("Y"); 
// Initialize the retirement year 
$retirementYear = "";
// Convert age and retirement age inputs to integers using flotval
$submitted = isset($_POST["submitted"]);

If ($submitted) {
	// Setting variables and checking if fields are populated
	if ( isset($_POST['current-age']) ) {
		$currentAge = $_POST['current-age'];
		$c = floatval($currentAge);
		
	}

	if ( isset($_POST['retirement-age']) ) {
		$retirementAge = $_POST['retirement-age'];
		$r = floatval($retirementAge);
		
	}

// Subtract retirement age from current age to create workYears variable  
	$workYears = $r - $c;
// Add current year to workYears variable to get year you can retire 
	$retirementYear = $currentYear + $workYears;

// We're the magic happens 

	if ( empty($currentAge) ) {
		$message = "We need your current age to perform the calculations";
	}
	else if ( empty($retirementAge) ) {
		$message = "we need your retirement age to perform the calculations";
	}
	else if ($c >= $r ) {
		$message = "Good news. You can already retire";
	}
	else {
		$message = "You have $workYears years left until you can retire. It's currently $currentYear, so you can retire in $retirementYear";
	}
} else {
	$message = "Let's determine the year in which you'll retire";
}




?>
<!-- TO DO  -->
<!-- 1. Get it working to where an empty field results in a specific messaged displayed to user -->



<form method="POST">
	<p><?=$message?></p>

	<div class="field">
		<label>How old are you currently?</label>
		<input type="number" name="current-age" value="<?php=$c?>" placeholder="..." min="0">
	</div>

	<div class="field">
		<label>At what age do you want to retire?</label>
		<input type="number" name="retirement-age" value="<?php=$r?>" placeholder="..." min="0">
	</div>


	<button type='submit' name="submitted">Submit</button>
	
</form>