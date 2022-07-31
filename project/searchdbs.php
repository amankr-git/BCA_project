<?php
//item_no | item_name | rate
// Get the user id
$item_no = $_REQUEST['itemno[]'];

// Database connection
$con = mysqli_connect("localhost", "p_user", "1234", "project");

if ($item_no !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT  item_name,
	rate FROM item WHERE customer_no='$item_no'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$name = $row["item_name"];

	// Get the first name
	$phone_no = $row["rate"];
}

// Store it in a array
$result = array("$item_name", "$rate");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
