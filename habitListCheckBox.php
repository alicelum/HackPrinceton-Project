<?php
if(isset($_POST['habitSubmit'])){
if(!empty($_POST['habitList'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['habitList']);

$study = $_POST['habitList'][0]; // for study
$storedHabitList = array()

for($x = 0; $x < $checked_count; $x++) {
    $storedHabitList = $_POST['habitList'][$x];
}




echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['habitList'] as $selected) {
echo "<p>".$selected ."</p>";
}
echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>