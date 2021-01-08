<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}
?>

<!DOCTYPE html>
<html>
<body>

<h2>To Do Task</h2>

<form action="" method="POST">
  <fieldset>
    <legend></legend>
    Title:<br>
    <input type="text" name="firstname">
    <br>
    Description:<br>
    <input type="text" name="lastname">
    <br><br>
    <input type="submit" name="submit" value="SUBMIT">
  </fieldset>
</form>

</body>
</html>