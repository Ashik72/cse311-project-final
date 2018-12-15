<?php
	include_once "connection.php";

	$sql = "SELECT student_id, first_name, last_name, dob FROM student";
	$result = $conn->query($sql);

	if ($result->num_rows> 0) {
		while ($row=$result->fetch_assoc()) {
			echo "Student ID:" . $row['student_id']." - First Name: " . $row["first_name"]. " - Last Name: ". $row["last_name"]. " - Date of birth: ". $row["dob"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>