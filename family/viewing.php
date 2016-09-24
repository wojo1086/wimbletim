<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Media</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>

</head>
<body>
	<?php
		if (!(isset($_SESSION['user'])))
		{
			$_SESSION['error'] = 'You need to be logged in.';
			header('Location: index.php');
		}else{
			echo "You are logged in as: <b>" . $_SESSION['user'] . "</b><br />";
		}
		
		//$dirname = "../../media/disk1/Pictures";
		//$images = glob($dirname."*.jpg");
		//foreach($images as $image) {
		//echo '<img src="'.$image.'" /><br />';
		//}
	?>
	
	Welcome! Where would you like to go?<br />
	<a href='media.php'>View Pictures and Videos</a><br />
	<a href='messaging.php'>Write a Message</a>
	
</body>
</html>