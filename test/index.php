<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TA Comps</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	
	<div id='headerWrapper'>
		<header>
			<nav class='navbar navbar-fixed-top'>
				<div class='navbar-header'>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown">
						<span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>
					<a href="#"><img src='img/logo1.png' alt='Tiara Anderson Compositions' /></a>
				</div>
			
				<div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class='active'><a href='index.php'>Home</a></li>
						<li><a href='creative.php'>Creative Writing</a></li>
						<li><a href='technical.php'>Technical Writing</a></li>
						<li><a href='advertising.php'>Advertising</a></li>
						<li><a href='social.php'>Social Media</a></li>
					</ul>
				</div>
				<div class="collapse opened" id="dropdown">
					<ul>
						<li class='active'><a href='index.php'>Home</a></li>
						<li><a href='creative.php'>Creative Writing</a></li>
						<li><a href='technical.php'>Technical Writing</a></li>
						<li><a href='advertising.php'>Advertising</a></li>
						<li><a href='social.php'>Social Media</a></li>
					</ul>
				</div>
			</nav>
		</header>
	</div>

	<div id="mainWrapper">
		<div id='mainBody'>
			<div class='mainAbout'>
				<h1 class='mainWelcome'>Welcome!</h1>
				<img src='img/blog.png' class='pen' alt='Tiara Anderson Compositions' />
				<p>I'm Tiara Anderson and I love the art of writing. There’s just something about crafting a sentence: choosing the right words, the right arrangement, and the right tone that all comes together to create and invoke emotion, thought, and action. Take a look around and if you like what you see, contact me so we can create the perfect article, story, blog post, or any other composition you may need!</p>
				<p>Questions? Comments? Quotes?</p>
				<button>CONTACT ME</button>
			</div>
			
			<!-- <p class='mainAbout'><a href='http://smilehallow.blogspot.com'>Want more to read? Follow my blog!</a></p> -->
		</div>
	</div>

	<div id='blogFeedTitle'>
		<h1>Read. Be Inspired.</h1>
	</div>

	<div id='blogFeed'>
		<?php
			require_once 'includes/simple_html_dom.php';
			$html = file_get_html('http://smilehallow.blogspot.com/');

			foreach($html->find('div[@class="date-outer"]') as $row){
				echo "<h5>" . $row->find('h2[@class="date-header"]', 0)->plaintext . "</h5>";

				foreach($row->find('div[@class="post-outer"]') as $outer){
					echo "<h3>" . $outer->find('h3[@class="post-title"]', 0)->plaintext . "</h3>";

					echo "<p>" . $outer->find('div[@class="post-body"]', 0)->innertext . "</p>";
				}
			}
			
		?>
	</div>

	<footer>
		<div class='row'>
			<div class='col-lg-4'>
			</div>

			<div class='col-lg-4'>
				<h5>MESSAGE</h5>
				<span class='response'></span>
				<input type='text' placeholder='Name' name='name' class='nameInput' />
				<div id='inputCont'>
					<input type='text' placeholder='Email' name='email' />
					<input type='text' placeholder='Phone' name='phone' />
				</div>
				<textarea placeholder='Comments'></textarea>
				<button>Submit</button>
			</div>

			<div class='col-lg-4'>

			</div>
		</div>
		<span>&copy; wimbletim.com 2015</span>
	</footer>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $(".navbar-toggle").on("click", function () {
	    $(this).toggleClass("active");
  });
});
</script>
</body>
</html>