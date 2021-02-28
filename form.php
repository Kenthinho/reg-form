<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My form</title>
	</head>
	<body>
		<h1>Online Registration Form</h1>
		<form method="post" action="form.php">
			<p>First Name
			<input type="text" name="fname" /></p>
			<p>Last Name
			<input type="text" name="lname" /></p>
			<p>E-mail Address
			<input type="email" name="email" placeholder="xyz@email.com" /></p>
			<p>
			<input type="submit" value="Submit"></p>
		</form>	

		Thank you for signing in: <?php echo $_POST["fname"] . " " . $_POST["lname"];?><br><br>
		Your E-mail address is: <?php echo $_POST["email"]; ?>

	</body>
</html>