<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TA Comps - Creative Writing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="mainWrapper">
		<header>
			<nav class='navbar navbar-fixed-top'>
				<div class='navbar-header'>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown">
						<i class="fa fa-bars fa-2x"></i>
					</button>
					<a href="#"><img src='img/logo.png' alt='Tiara Anderson Compositions' /></a>
				</div>
			
				<div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href='index.php'>Home</a></li>
						<li class='active'><a href='creative.php'>Creative Writing</a></li>
						<li><a href='technical.php'>Technical Writing</a></li>
						<li><a href='advertising.php'>Advertising</a></li>
						<li><a href='social.php'>Social Media</a></li>
					</ul>
				</div>
				<div class="collapse opened" id="dropdown">
					<ul>
						<li><a href='index.php'>Home</a></li>
						<li class='active'><a href='creative.php'>Creative Writing</a></li>
						<li><a href='technical.php'>Technical Writing</a></li>
						<li><a href='advertising.php'>Advertising</a></li>
						<li><a href='social.php'>Social Media</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div id='mainBodyWrapper'>
			<div id='mainBody'>
				<h1>Creative Writing</h1>

				<p class='mainAbout'>This is my favorite form of writing. From poems to short stories, I can take your reader’s mind on a fantastic journey through enchanted forests, true life tales of woe, or haunting stories of things that go bump in the night.</p>

				<div id='blogBody'>
					<h1>Short Stories</h1>
					<div id='blogContent'>
						<?php
							$dir = scan_dir("creative/short-stories");
							if(!$dir)
							{
								echo "Nothing here yet.";
							}else{
								foreach($dir as $file)
								{
									include_once("creative/short-stories/" . $file);
								}
							}
						echo "</div><h1>Poetry</h1><div id='blogContent'>";
							$dir = scan_dir("creative/poetry");
							if(!$dir)
							{
								echo "Nothing here yet.";
							}else{
								foreach($dir as $file)
								{
									include_once("creative/poetry/" . $file);
								}
							}
						?>
					</div>
				</div>
					
			</div>
		</div>
	</div>

	<footer>
		&copy; <a href='http://www.wimbletim.com'>Wimbletim.com</a> 2015
	</footer>


<?php
	function scan_dir($dir) {
	    $ignored = array('.', '..', '.svn', '.htaccess');

	    $files = array();    
	    foreach (scandir($dir) as $file) {
	        if (in_array($file, $ignored)) continue;
	        $files[$file] = filemtime($dir . '/' . $file);
	    }

	    arsort($files);
	    $files = array_keys($files);

	    return ($files) ? $files : false;
	}
?>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	
});
</script>
</body>
</html>