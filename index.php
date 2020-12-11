<?php  include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!--This is my first commit for this simple crud -->
<!--my 2nd attempt for commit and push-->

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th colspan="2"> Option</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Module 0</td>
			<td>Make a repositor at Github and make a simple project</td>
			<td>
				<a href=""> Update </a>
			</td>
			<td>
				<a href=""> Delete </a>
			</td>
		</tr>
	</tbody>
</table>

<form method="post" action="">
	<div class="input-group">
		<label>Title</label>
		<input type="text" name="name">
	</div>

	<div class="input-group">
		<label>Description</label>
		<input type="text" name="discription">
	</div>

	<div class="input-group">
		<button type="submit" name="save" class="btn">SAVE</button>
	</div>
</form>

</body>
</html>