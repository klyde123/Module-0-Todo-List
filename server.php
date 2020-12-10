<?php

	//adding variables
	$name = "";
	$discription = "";

	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	//if save button is clicked
	if (isset($_POST['save'])){
		$name = $_POST['name'];
		$discription = $_POST['discription']; //discription
	}


?>