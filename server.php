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


?>