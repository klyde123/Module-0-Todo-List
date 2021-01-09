<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`) VALUES ('$first_name','$last_name')";

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

<br><br>
<center>
		<button onclick="window.location.href='index.php'">REFRESH</button>
		</center>



<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>

<br>
<br>
<div class="container">

	<fieldset>
    <legend></legend>
		<h2>TASKS LIST</h2>
<table class="table">
	<thead>
		<tr>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Title</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</th>

	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['id']; ?></td> &nbsp;&nbsp;&nbsp;
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['firstname']; ?></td>&nbsp;&nbsp;&nbsp;
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['lastname']; ?></td>&nbsp;&nbsp;&nbsp;
	
					<td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>

</fieldset>
	</div>






</body>
</html>