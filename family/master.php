<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Send a Message</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<?php
	$_SESSION['currentUser'] = "Daddy";
?>
</head>
<body>

	<div id='messageTabs'>
		<ul>
			<li class='activeTab'>Daddy</li>
			<li>Mommy</li>
			<li>Grandma</li>
			<li>Papa</li>
			<li>Grandma Maggie</li>
			<li>Grandpa Paul</li>
		</ul>
	</div>
	
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
		checkMessage();
	}, 5000 );
	
	$('#messageSubmit').on('click', function(){
		saveText($('#messageText').val());
		$('#messageText').val('');
	});
	
	$('#messageTabs ul li').on('click', function(){
		$('#messageTabs ul li').removeClass('activeTab');
		$(this).addClass('activeTab');
		var pickedUser = $(this).text();
		setUser(pickedUser);
	});
	
	function saveText(text)
	{
		$.ajax(
		{
			type: 'post',
			url: 'handleMasterText.php',
			data: {
				text: text},
			success: function(){
				loadMessage();
			}
		});
	}
	
	function loadMessage()
	{
		$('#messageFlow').load('loadMasterMessage.php');
	}
	
	function checkMessage()
	{
		$.ajax(
		{
			type: 'post',
			url: 'checkMessage.php',
			success: function(er){
				//console.log(er);
			}
		});
	}
	
	function setUser(pickedUser)
	{
		$.ajax(
		{
			type: 'post',
			url: 'setUser.php',
			data: {
				pickedUser: pickedUser},
			success: function(){
				loadMessage();
			}
		});
	}
});
</script>
</body>
</html>