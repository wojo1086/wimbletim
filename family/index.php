<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>




</head>
<body>
	<form action='checkLogin.php' method='POST'>
		<b>Who's logging in?</b>
		<br />
		<input type='radio' name='person' value='Grandma' />Lynn
		<br />
		<input type='radio' name='person' value='Papa' />Dick
		<br />
		<input type='radio' name='person' value='Grandma Maggie' />Maggie
		<br />
		<input type='radio' name='person' value='Grandpa Paul' />Paul
		<br />
		<input type='radio' name='person' value='Mommy' />Michelle
		<br />
		<input type='radio' name='person' value='Daddy' />Tim
		<br />
		<label><b>What's the password?</b></label>
		<input type='password' name='familyPass' />
		<input type='submit' name='familySubmit' />
	</form>
	<?php
		if (isset($_SESSION['error']))
		{
			print $_SESSION['error'];
			unset($_SESSION['error']);
		}
	?>
</body>
</html>