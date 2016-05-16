<?php
	require_once "php/conf.php";
	
	$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
						
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
	$enddate = mysqli_real_escape_string($conn, $_POST['enddate']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$location = mysqli_real_escape_string($conn, $_POST['location']);
	$taskid = mysqli_real_escape_string($conn, $_POST['taskid']);
	$public = mysqli_real_escape_string($conn, $_POST['public']);
	$private = mysqli_real_escape_string($conn, $_POST['private']);
	$eventid = mysqli_real_escape_string($conn, $_POST['eventid']);
	
	$sql = "UPDATE Event SET task_id='" . $taskid . "',title='" . $title . "', location='" . $location . 
								"', public='" . $public . "', private='" . $private . 
								"', description='" . $description . "', date_time_start='" . $startdate . "', date_time_end='" . $enddate . "' " .
								"WHERE event_id ='" . $eventid . "'";
	
	if (mysqli_query($conn, $sql)) {
		echo "0";
	}
	
	else {
		echo "-1";
	}
	
?>