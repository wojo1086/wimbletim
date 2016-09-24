<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Goodbye Consoles</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<header>
		<div id='logo'>
			<img src='img/logo.png' width='180px' />
		</div>
		<nav>
			<ul>
				<li><a href='#'><span>H</span>OME</a></li>
				<li><a href='#'>B<span>U</span>Y</a></li>
				<li><a href='#'><span>L</span>EARN MORE</a></li>
				<li><a href='#'>ABO<span>U</span>T <span>U</span>S</a></li>
			</ul>
		</nav>
	</header>

	<div id='mainBody'>
		<div id='mainLeft'>
			<img src='img/tier1-small.jpg' />
		</div>
		<div id='mainRight'>
			<div id='tierButtons'>
				<button id='tier1' class='active'>Tier 1</button>
				<button id='tier2'>Tier 2</button>
				<button id='tier3'>Tier 3</button>
			</div>
			<div id='tier1Description'>
				<h2>Description</h2>
				This is for those who want to make the switch to PC gaming without breaking the bank. Costing almost as much as the average gaming console, this PC will outperform any console.
			</div>

			<div id='tier2Description' class='disabled'>
				<h2>Description</h2>
				This is the description for tier 2.
			</div>

			<div id='tier3Description' class='disabled'>
				<h2>Description</h2>
				This is the description for tier 3.
			</div>
		</div>
	</div>

	<footer>
		<div id='footerNav'>
			<h4>Menu</h4>
			<nav>
				<ul>
					<li><a href='#'>HOME</a></li>
					<li><a href='#'>BUY</a></li>
					<li><a href='#'>LEARN MORE</a></li>
					<li><a href='#'>ABOUT US</a></li>
				</ul>
			</nav>
		</div>
		<div id='footerContactForm'>
			<h4>Contact Us</h4>
			<input type='text' placeholder='Name (First and Last)' />
			<input type='text' placeholder='Email Address' />
			<textarea placeholder='Message...'></textarea>
			<button>Submit</button>
		</div>
	</footer>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
	$('#tierButtons button').on('click', function(){
		var butID = $(this).prop('id');
		$('#tierButtons button').each(function(){
			$(this).removeClass('active');
		});

		$('#'+butID).addClass('active');

		$('#tier1Description, #tier2Description, #tier3Description').addClass('disabled');
		console.log(butID);
		switch(butID)
		{
			case "tier1":
				$('#tier1Description').removeClass('disabled');
				break;
			case "tier2":
				$('#tier2Description').removeClass('disabled');
				break;
			case "tier3":
				$('#tier3Description').removeClass('disabled');
				break;
		}
	});
});
</script>
</body>
</html>