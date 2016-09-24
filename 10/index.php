<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Windows 10</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
	<table>
		<tr>
			<td>
				<img src='img/emptyTrash.ico' width="40px" />
				<p>Recycle Bin</p>
			</td>
		</tr>
	</table>


	<div id="taskbar">
		<i class="fa fa-windows"></i>
		<input type='text' placeholder='Search Windows' />
		<img id='taskview' src='img/taskview.png' />
		<img id='taskbarFolder' src='img/edge.png' width='25px' />
		<img id='taskbarFolder' src='img/taskbarFolder.ico' width='25px' />
		<img id='taskbarFolder' src='img/windowsStore.png' width='25px' />



		<span id='dateTime'>
			
		</span>
		<img id='actionCenter' src='img/actionCenter-alert.png' />
	</div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
	setDateTime();
	$('#taskbar img#taskview').on('mouseover', function(){
		$(this).attr('src', "img/taskview-hover.png");
	});

	$('#taskbar img#taskview').on('mouseout', function(){
		$(this).attr('src', "img/taskview.png");
	});

	$('#taskbar input').on('blur', function(){
		$(this).val("");
	});

	 //Display the date/time intially
	setInterval(setDateTime, 60000);
	

	function setDateTime()
	{
		var date = new Date();
		var month = date.getMonth() + 1;
		var minutes = date.getMinutes();
		var hours = date.getHours();
		var meridian = "AM";
		if(minutes < 10)
		{
			minutes = "0" + minutes.toString();
		}

		if(hours > 12)
		{
			hours = hours - 12;
			meridian = "PM"
		}
		while(month.toString().charAt(0) === '0')
		{
			month = month.substr(1);
		}
		$('#taskbar span#dateTime').html("<p>" + hours + ":" + minutes + " " + meridian + "</p><p>" + month + "/" + date.getDate() + "/" + date.getFullYear() + "</p>");
	}
});
</script>
</body>
</html>