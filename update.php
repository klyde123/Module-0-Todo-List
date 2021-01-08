<!DOCTYPE html>
<html>
<head>
	<title>
		UPDATE
	</title>
</head>
<body>


<form action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    First name:<br>
		    <input type="text" name="firstname" value="<?php echo $first_name; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    <br>
		    Last name:<br>
		    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
		    <br>
		    Password:<br>
		    <input type="password" name="password" value="<?php echo $password; ?>">
		    <br>
		    Gender:<br>
		    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
		    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
		    <br><br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>
</body>
</html>