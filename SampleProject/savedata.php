<?php


	include_once "connection.php";
	$student_id = $_POST['s_id'];
	$first_name = $_POST['fn'];
	$last_name = $_POST['ln'];
	$date_of_birth = $_POST['dob'];
	$date_of_birth = date("Y-m-d", strtotime($date_of_birth));

$query = "INSERT INTO student (student_id, first_name, last_name, dob) 
		VALUES ('".$student_id."', '".$first_name."', '".$last_name."', '".$date_of_birth."')";

	if ($conn->query($query) === TRUE)
		echo "New record created successfully";
	 else
		echo "Error: ".$conn->error;

	$conn->close();
	
?>

