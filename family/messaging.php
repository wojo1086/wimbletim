<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Send a Message</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>

</head>
<body>
	<?php
		//unset($_SESSION['user']);
		if (!(isset($_SESSION['user'])))
		{
			$_SESSION['error'] = 'You need to be logged in.';
			header('Location: index.php');
		}else{
			echo "You are logged in as: <b>" . $_SESSION['user'] . "</b><br />";
		}
	?>
	
	<div id='messageFlow'>
		
	</div>
	
	<div id='typeMessage'>
		<input type='text' name='messageText' id='messageText' />
		<input type='button' name='messageSubmit' id='messageSubmit' value='Send' />
	</div>
	
<script>
$(function(){
	loadMessage();
	
	setInterval(function(){
		loadMessage();
	}, 5000 );
	
	$('#messageSubmit').on('click', function(){
		saveText($('#messageText').val());
		$('#messageText').val('');
	});
	
	function saveText(text)
	{
		$.ajax(
		{
			type: 'post',
			url: 'handleText.php',
			data: {
				text: text},
			success: function(){
				loadMessage();
			}
		});
	}
	function loadMessage()
	{
		$('#messageFlow').load('loadMessage.php');
	}
});
</script>
</body>
</html>