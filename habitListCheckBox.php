<?php

$link = mysqli_connect("localhost","root","root123")  or die("failed to connect to server !!");
mysqli_select_db($link,"habitMoodFuckingInfo");

if(isset($_POST['habitSubmit'])){
if(!empty($_POST['habitList'])) {
	// Counting number of checked checkboxes.
//	$checked_count = count($_POST['habitList']);

	$totalFields = 0; // stores counter of values for for-loop
	//grabs only the selected ones (negating the need to count or iterate over all habits
	$("input[name='habitList[]']:checked")
	var values = new Array();
	$.each($("input[name='habitList[]']:checked"), function() {
		values.push($(this).val()); 
		$totalFields++;}
	
		//NEXT STEP: push this list to the php mySQL database --> table 
		
		// DATE = yyyy-mm-dd
	$sql = "CREATE TABLE habitMoodFuckingTable( 
	    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	    actualdate DATE NOT NULL, 
	)";

	if(mysqli_query($link, $sql)){
	    echo "Table created successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	$table  = 'habitMoodFuckingTable';
	for($x = 0; $x < $totalFields; $x++) {
	    $column = $values[$x]; // has to be the habit string
	    mysql_query("ALTER TABLE $table ADD $column INT");
	}
	 
	// Close connection
	mysqli_close($link);

		
	$study = $_POST['habitList'][0]; // for study
	$work = $_POST['habitList'][1];
	$coffee = $_POST['habitList'][2];
	$exercise = $_POST['habitList'][3];
	$fastfood = $_POST['habitList'][4];
	$goodmeal = $_POST['habitList'][5];
	$cleaning = $_POST['habitList'][6];
	$shopping = $_POST['habitList'][7];
	$date = $_POST['habitList'][8];
	$friend = $_POST['habitList'][9];
	$nap = $_POST['habitList'][10];
	$party = $_POST['habitList'][11];
	$movies = $_POST['habitList'][12];
	$reading = $_POST['habitList'][13];
	$gaming = $_POST['habitList'][14];
	$travel = $_POST['habitList'][15];



//  $storedHabitList = array();
//	for($x = 0; $x < $checked_count; $x++) {
//	    $storedHabitList = $_POST['habitList'][$x];
//	}


	$insqDbtb="INSERT INTO `habitMoodFuckingInfo`.`habitMoodFuckingTable`
	(`study`, `work`, `coffee`, `exercise`, `fastfood`,
	`goodmeal`, `cleaning`, `shopping`, `date`, `friend`, `nap`,
	`party`, `movies`, `reading`, `gaming`, `travel) VALUES ('$study', '$work', 
	'$coffee', '$exercise', '$fastfood', '$goodmeal', '$cleaning', '$shopping', '$date', '$friend',
	'$nap', '$party', '$movies', '$reading', '$gaming', '$travel')";
	mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
	}

}


else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>