<?php

	//adding variables
	$name = "";
	$discription = "";
	$id = 0;

	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	//if save button is clicked
	if (isset($_POST['save'])){
		$name = $_POST['name'];
		$discription = $_POST['discription']; //discription

		$query = "INSERT INTO info (name, discription) VALUES ('$name', '$discription')";
		mysqli_query($db, $query);
		header('location: index.php'); //this is for redirecting the index page after inserting
	}

	//update records
	if (isset($_POST['update'])) {

	$name = mysql_real_escape_string($_POST['name']);
	$discription = mysql_real_escape_string($_POST['discription']);
	$id = mysql_real_escape_string($_POST['id']);


	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Task Updated!"; 
	header('location: index.php');
	}


?>