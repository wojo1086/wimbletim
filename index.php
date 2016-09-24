<!DOCTYPE html>
<html lang="en">
<head>
<title>Tim's Portfolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.min.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
	<style>
		* {
			margin: 0;
			padding: 0;
			font-family: 'Open Sans';}
		html, body {
			-webkit-font-smoothing: antialiased;
			overflow-x: hidden;}
		#section1 {
			background: url("img/desk.png") no-repeat fixed;
			background-position: left top;
		    background-size: cover;
			height: 850px;}
		.navbar {
			width: 100%;
			webkit-transition: padding 1s, background .5s; /* Safari 3.1 to 6.0 */
		   	transition: padding 1s, background .5s;
			padding: 0 200px 0 200px;}
		.navbar img {
			float: left;
			webkit-transition: margin-top 1s; /* Safari 3.1 to 6.0 */
		   	transition: margin-top 1s;
			margin-top: 15px;}
		.navbar a.navbar-brand {
			font-weight: 600;
			webkit-transition: padding 1s; /* Safari 3.1 to 6.0 */
		   	transition: padding 1s;
			font-size: 16px;
			/*display: block;*/
			color: #EFEFEF;}
		.navbar a.navbar-brand span {
			font-size: 11px;
			display: block;}
		.navbar-header button {
			color: #EFEFEF;}
		#myNavbar li a {
			font-weight: 600;
			background: none;
			webkit-transition: padding 1s; /* Safari 3.1 to 6.0 */
		   	transition: padding 1s;
			padding: 20px 20px 40px 20px;
			color: #EFEFEF;}
		#myNavbar li a:hover {
			color: #1E90FF;
			background: none;}
		.activeNavLink {
			border-bottom: 5px solid #1E90FF;}
		.opened {
			margin: 0 -20px 0 -20px;}
		.opened ul li {
			text-align: center;
			background: #1E90FF;
			padding: 8px 0 8px 0;
			/*border-radius: 7px;
			border-top: 1px solid #FAFAFA;
			border-bottom: 1px solid #DFDFDF;*/
			border-top: 1px solid #4aa6ff;
			border-bottom: 1px solid #1873cc;
			margin: 0 5px 0 5px;
			list-style-type: none;}
		.opened ul li a {
			color: #EFEFEF;
			font-weight: 600;
			text-shadow: 1px 1px 1px #000, 0 0 0 #000, 1px 1px 1px #000;}
		.intro{
			color: #EFEFEF;}
		.intro h1 {
			padding-top: 100px;
			font-weight: 700;
			font-size: 60px;}
		.intro p {
			font-size: 16px;
			padding: 50px 0 0 0;
			line-height: 175%;}
		.intro .col-sm-6 {
			padding: 100px 0 0 0;}
		.hireLinks {
			margin-left: -25px;
			padding-top: 30px;}
		.hireLinks a {
			color: #EFEFEF;
			padding: 20px 0;
			display: inline-block;
			text-align: center;
			font-size: 16px;
			width: 220px;
			margin-left: 5px;
			border-radius: 5px;}
		.hireLinks a:hover {
			text-decoration: none;}
		.hireLinks a.iNeed:hover {
			background: rgba(30,154,255,1);}
		.hireLinks a.iHire:hover {
			background: rgba(100,100,100,1);}
		.hireLinks a i {
			padding: 4px 0 0 25px;}
		.hireLinks .iNeed {
			background: rgba(30,154,255,.7);}
		.hireLinks .iHire {
			background: rgba(100,100,100,.7);}
		.scrolled {
			background: #FFFFFF;
			border-bottom: 1px solid #EFEFEF;
			padding: 0 120px 0 120px;
			webkit-transition: padding 1s, background .5s; /* Safari 3.1 to 6.0 */
		   	transition: padding 1s, background .5s;}
		.scrolled a.navbar-brand {
			color: #222222;
			webkit-transition: padding 1s; /* Safari 3.1 to 6.0 */
		   	transition: padding 1s;
			padding: 10px 15px;}
		.scrolled #myNavbar li a {
			color: #222222;
			webkit-transition: padding 1s; /* Safari 3.1 to 6.0 */
		   	transition: padding 1s;
			padding: 20px 20px 20px 20px;}
		.scrolled .navbar-header button {
			color: #222222;}
		.scrolled .navbar-header img {
			margin-top: 10px;
			webkit-transition: margin-top 1s; /* Safari 3.1 to 6.0 */
		   	transition: margin-top 1s;
		}

		@media (max-width: 1400px) {
			#projectSection h1 {
				font-size: 60px;}
			.navbar {
			padding: 0 10px 0 10px;}
		}
		@media (max-width: 1200px) {
			.navbar {
				padding: 0;}
			.hireLinks {
				margin-left: -25px;
				text-align: center;
				padding-top: 30px;}
			.intro h1, .intro p {
				text-align: center;}
			.hireLinks a {
				margin-top: 5px;}
		}
		@media (max-width: 1199px) {
			#projectSection .col-lg-4, #projectSection .col-lg-3 {
				text-align: center;}
			#projectSection img {
				width: 75%;
				display: block;
				margin: 20px auto 0 auto;}
		}
		@media (max-width: 900px) {
			#myNavbar .navbar-nav > li > a {
				padding: 20px 5px 10px 5px;}
			ul.navbar-right {
				margin-right: 20px;
			}
			.intro h1 {
				font-weight: 700;
				font-size: 50px;}
		}
		@media (max-width: 768px) {
			#section1 {
				background: url("img/desk-768.png") no-repeat fixed;}
			#section1 .hireLinks a {
				margin: 0;
			}
			.intro {
				text-align: center;}
			.intro h1 {
				font-weight: 700;
				font-size: 30px;}
			.intro p {
				font-size: 12px;
				padding: 30px 0 0 0;
				line-height: 150%;}
			.intro .col-sm-6 {
				padding: 40px 0 0 0;}
			#projectSection img {
				width: 100%;}
			#projectSection h1 {
				font-size: 50px;}
			#section4 .col-lg-2 {
				text-align: center;
			}
			#section4 .col-lg-3 #contactNumber {
				margin-top: 0;
			}
		}
		@media (max-width: 360px) {
			.navbar-header img {
				display: none;}	
			#section1 .col-sm-6 p {
				font-size: 14px;
				width: 90%;
				margin: 0 auto;
			}
		}
		@media (max-width: 320px) {
			#section1 {
				background: url("img/desk-320.png") no-repeat fixed;}
		}
	</style>
	<div class="test container-fluid">
		<nav class='navbar navbar-fixed-top'>
			<div class='navbar-header'>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown">
					<i class="fa fa-bars fa-2x"></i>
				</button>
				<a href="#"><img src='img/mobius2.png' alt='Wimbletim' /></a><a class="navbar-brand" href="#">TIMOTHY WOJTYLAK<span style="padding-left: 2px;">FULL STACK WEB DEVELOPER</span></a>
			</div>
		
			<div class="navbar-collapse collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li id='home' class='activeNavLink'><a href="#section1">HOME</a></li>
					<li id='skill'><a href="#skillSection">SKILLS</a></li>
					<li id='project'><a href="#projectSection">PROJECTS</a></li>
					<li id='gMap'><a href="#map">CONTACT</a></li>
					<li><a href="resume.pdf">RESUME</a></li>
				</ul>
			</div>
			<div class="collapse opened" id="dropdown">
				<ul>
					<li><a href="#section1">HOME</a></li>
					<li><a href="#skillSection">SKILLS</a></li>
					<li><a href="#projectSection">PROJECTS</a></li>
					<li><a href="#map">CONTACT</a></li>
					<li><a href="resume.pdf">RESUME</a></li>
				</ul>
			</div>
		</nav>
	</div>
	
	<section id='section1'>
		<div class='row intro'>
			<div class='col-sm-3'></div>
			<div class='col-sm-6'>
				<h1>Websites done your way.</h1>
				<p>My name is Timothy Wojtylak and I'm a full stack web developer from Windermere, Florida. I enjoy building everything from small business sites to rich interactive web apps and everything in between. I have a diverse set of skills ranging from HTML5/CSS3, Javascript, and Angular to PHP, Laravel, and MySQL. If you are seeking a web presence or are an employer looking to hire, you can get in touch with me <a href="#contact">here.</a></p>
			</div>
			<div class='col-sm-3'></div>
		</div>
		
		<div class='row hireLinks'>
			<div class='col-sm-3'></div>
			<div class='col-sm-6'>
				<a class="iNeed" href="#contact">I need a website<i class="fa fa-chevron-right"></i></a><a class="iHire" href="resume.pdf">I'm looking to hire<i class="fa fa-chevron-right"></i></a>
			</div>
			<div class='col-sm-3'></div>
		</div>

	</section>
	
	<section id='skillSection'>
		<div class='row skillHeader'>
			<div class='col-lg-4'></div>
			<div class='col-lg-4'>
				<h1>Skills</h1>
				<hr />
				<hr />
			</div>
			<div class='col-lg-4'></div>
		</div>
		
		<div class='row skills'>
			<div class='col-lg-2'></div>
			<div class='col-lg-4'>
				<div class="row">
					<div class='col-sm-6'>
						<i class="fa fa-code"></i>
						<h1>Front-End</h1>
						<p>HTML5/CSS3, SASS, Javascript (jQuery & AJAX), Meteor.js, XML, Gulp</p>
					</div>
					
					<div class='col-sm-6'>
						<i class="fa fa-database"></i>
						<h1>Back-End</h1>
						<p>PHP, CodeIgniter 3, Laravel 5, MySQL, MongoDB</p>
					</div>
				</div>
			</div>
			<div class='col-lg-4'>
				<div class="row">
					<div class='col-sm-6'>
							<i class="fa fa-mobile"></i>
							<h1>Responsive Design</h1>
							<p>Cross-device mobile design and development for new and existing sites using Twitter Bootstrap</p>
						</div>
					<!-- <div class='col-sm-6'>
						<i class="fa fa-database"></i>
						<h1>Server-side</h1>
						<p>PHP, MySQL, MongoDB, WAMP/LAMP, Web/Database Migration, Database Normalization</p>
					</div> -->
					
					<div class='col-sm-6'>
						<i class="fa fa-tasks"></i>
						<h1>Server</h1>
						<p>WAMP/LAMP, Git, Ionic, Google Maps API, Google Cloud Platform</p>
					</div>
				</div>
			</div>
			<div class='col-lg-2'></div>
		</div>
	</section>
	
	<section id="projectSection">
		<div class='row projectHeader'>
			<div class='col-lg-4'></div>
			<div class='col-lg-4'>
				<h1>Projects</h1>
				<hr />
				<hr />
			</div>
			<div class='col-lg-4'></div>
		</div>


		<div class="row sol">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<h1><a href="https://www.mygspn.com">myGSPN</a></h1>
				<p>myGSPN is a mobile and web application whose purpose is two-fold. First, it is a social network that aims to bring people of all sport levels together. Second, it provides tools for schools and sports teams to help them manage things like their roster and schedule. On the desktop, it is written using Angular for the front-end framework and CodIgniter 3 as the back-end framework. It utilizes a custom token system to connect to the API. The mobile app was created with Ionic.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>JQuery</span>
					<span>Angular</span>
					<span>CodeIgniter 3</span>
					<span>Git</span>
					<span>LAMP</span>
					<span>UI Router</span>
					<span>Lazy Load</span>
					<span>Ionic</span>
				</div>
			</div>
			<div class="col-lg-4">
				<a href="https://www.mygspn.com"><img src="img/mygspn.png" alt='myGSPN' /></a>
			</div>
			<div class="col-lg-2"></div>
		</div>




		<div class="row sp">
			<div class="col-lg-2"></div>
            <div class="col-lg-4 col-lg-push-4">
				<h1><a href="http://www.plainbudget.com">Plain Budget</a></h1>
				<p>Plain Budget started out as a small application I made to help me budget. I realized other people might also want to use it, so I'm turning it into a full-fledged
				web application. It uses Angular for the front-end framework and JSON web tokens to connect to the Laravel API.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>JQuery</span>
					<span>Angular</span>
					<span>Laravel 5</span>
					<span>JSON Web Tokens</span>
					<span>MySQL</span>
					<span>UI Router</span>
					<span>Lazy Load</span>
					<span>Git</span>
					<span>Google Cloud Platform</span>
				</div>
			</div>
            
            <div class="col-lg-4 col-lg-pull-4">
				<a href="http://www.plainbudget.com"><img src="img/sp.png" alt='Plain Budget' /></a>
			</div>
			<div class="col-lg-3"></div>
		</div>





		<div class="row sol">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<h1><a href="http://www.libertydryclean.com">Liberty Cleaners</a></h1>
				<p>I was appraoched by a friend of mine saying his grandparents would like a wesbite for their dry cleaning business here in Orlando. I told him it wouldn't be a problem and was able to build it in about 4 hours. It's also mobile friendly.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>Javascript</span>
				</div>
			</div>
			<div class="col-lg-4">
				<a href="http://www.libertydryclean.com"><img src="img/liberty.png" alt='Liberty Dry Clean' /></a>
			</div>
			<div class="col-lg-2"></div>
		</div>

		<div class="row sp">
			<div class="col-lg-2"></div>
            <div class="col-lg-4 col-lg-push-4">
				<h1><a href="http://www.wimbletim.com/test">Tiara Anderson Compositions</a></h1>
				<p>I made a website a while back for a young lady striving to be a freelance writer. Recently, I decided to redesign the site to make it more modern. I ended up only redesigning the home page. The site consists of live pull of her blogfeed using PHP and a backend administration page where she is able to utilize a text editor to write her content.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>Javascript</span>
					<span>jQuery</span>
					<span>Bootstrap 3</span>
					<span>PHP</span>
				</div>
			</div>
            
            <div class="col-lg-4 col-lg-pull-4">
				<a href="http://www.wimbletim.com/test"><img src="img/tac.png" alt='Tiara Anderson Compositions' /></a>
			</div>
			<div class="col-lg-3"></div>
		</div>
		
		<div class="row sol">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<h1><a href="http://www.sidesoflifephotography.com">Sides of Life Photography</a></h1>
				<p>I built this website for a young photographer who needed something simple to showcase her amazing photography skills. She came to me with the design
				in hand I made that design a reality.  It utilizes Bootstrap to help make it mobile friendly.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>Javascript</span>
					<span>jQuery</span>
					<span>Bootstrap 3</span>
				</div>
			</div>
			<div class="col-lg-4">
				<a href="http://www.sidesoflifephotography.com"><img src="img/sol.png" alt='Sides of Life Photography' /></a>
			</div>
			<div class="col-lg-2"></div>
		</div>
		
		



		<div class="row sp">
			<div class="col-lg-2"></div>
            <div class="col-lg-4 col-lg-push-4">
				<h1><a href="http://www.wimbletim.com/projects/sky.html">Sky Box</a></h1>
				<p>Sky Box is a real-time application that charts the sun and moon onto your computer screen, relative to their location in the sky. No need for a screen 
				refresh to make it work. Once the sun sets, the screen will darken, the stars come out, and then the moon makes its appearance for its nightly round.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>Javascript</span>
					<span>jQuery</span>
					<span>HTML5 Canvas</span>
				</div>
			</div>
            
            <div class="col-lg-4 col-lg-pull-4">
				<a href="http://www.wimbletim.com/projects/sky.html"><img src="img/sky.png" alt='Sky Box' /></a>
			</div>
			<div class="col-lg-3"></div>
		</div>






        
        <div class="row sol">
			<div class="col-lg-2"></div>
			<div class="col-lg-4">
				<h1><a href="http://wwww.wimbletim.com/projects/physics.html">Physics Playground</a></h1>
				<p>This is a neat little application that let's you control the gravity affecting a bunch of small marbles. I wanted to test my abilities with real world 
				physics and the HTML 5 canvas.</p>
				
				<div class="langs">
					<span>HTML5</span>
					<span>CSS3</span>
					<span>Javascript</span>
					<span>jQuery</span>
					<span>HTML5 Canvas</span>
				</div>
			</div>
			<div class="col-lg-4">
				<a href="http://www.wimbletim.com/projects/physics.html"><img src="img/physics.png" alt='Physics' /></a>
			</div>
			<div class="col-lg-2"></div>
		</div>

		
        
	</section>

	
	<section id='map'>
		<div class='row mapHeader'>
			<div class='col-lg-4'></div>
			<div class='col-lg-4'>
				<h1>Contact</h1>
				<hr />
				<hr />
			</div>
			<div class='col-lg-4'></div>
		</div>
		<div id="map-canvas"></div>
	</section>
	
	<footer>
		<div class='row'>
			<div class='col-lg-2'>
			</div>

			<div class='col-lg-2'>
				<h5>MENU</h5>
				<ul id="footerNavLinks">
					<li id='home'><a href="#section1">HOME</a></li>
					<li id='skill'><a href="#skillSection">SKILLS</a></li>
					<li id='project'><a href="#projectSection">PROJECTS</a></li>
					<li id='gMap'><a href="#map">CONTACT</a></li>
					<li><a href="resume.pdf">RESUME</a></li>
				</ul>
			</div>
			<div class='col-lg-2'>
				<h5>SOCIAL</h5>
				<a href='https://www.facebook.com/timothy.wojtylak'><i class="fa fa-facebook"></i></a>
				<a href='https://www.linkedin.com/in/timothywojtylak'><i class="fa fa-linkedin-square"></i></a><br />
				<a href='https://plus.google.com/+TimothyWojtylak/posts/p/pub'><i class="fa fa-google-plus"></i></a>
				<a href='http://www.github.com/wojo1086'><i class="fa fa-github"></i></a>
			</div>

			<div class='col-lg-2'>
				<h5>CONTACT</h5>
				<div><i class="fa fa-envelope"></i>t.wojtylak@gmail.com</div>
				<div><i class="fa fa-phone-square"></i>407.446.6925</div>
			</div>

			<div class='col-lg-2'>
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

			<div class='col-lg-2'>

			</div>
		</div>
		<span>&copy; wimbletim.com 2015</span>
	</footer>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="loadCSS-master/src/loadCSS.js"></script>
<script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="projects/bw/bw.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2HK7NirYMB-UGuLXTEuJr5PAk_MHwVYY"></script>
<script>
	loadCSS( "css/main.min.css" );
	loadCSS( "font-awesome/css/font-awesome.min.css" );
	
	function initialize() {
		var styles = 
			[
		  {
			"featureType": "landscape",
			"stylers": [
			  { "color": "#e4e4e4" }
			]
		  },{
			"featureType": "poi",
			"stylers": [
			  { "color": "#e4e4e4" }
			]
		  },{
			"featureType": "water",
			"stylers": [
			  { "color": "#ffffff" }
			]
		  },{
			"featureType": "road.highway",
			"stylers": [
			  { "color": "#AAAAAA" }
			]
		  },{
			"elementType": "labels",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "administrative",
			"stylers": [
			  { "color": "#e4e4e4" }
			]
		  },{
			"featureType": "poi",
			"elementType": "labels.icon"  }
		]
		var image = 'img/mapMarker.png';
		var myLatlng = new google.maps.LatLng(28.4953320,-81.5934430);
		var styledMap = new google.maps.StyledMapType(styles,
			{name: "Styled Map"});
		
        var mapOptions = {
          center: myLatlng,
          zoom: 14,
		  scrollwheel: false,
		  disableDefaultUI: true,
		  mapTypeControlOptions: {
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			}
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
			
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
		
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Orlando, FL',
			icon: image
		  });

		var infowindow = new google.maps.InfoWindow({
			content:"Windermere, FL"
		});

		infowindow.open(map,marker);
      }
	  
      google.maps.event.addDomListener(window, 'load', initialize);
	  
</script>
<script>
$(document).ready(function(){
	var toggle = false;
	var skillPos = $('#skillSection').offset();
	var projPos = $('#projectSection').offset();
	var contPos = $('#map').offset();
	var $navi = $('ul.navbar-right li');
	checkScroll();
	navCheck();

	$('#tryme').on('click', function(){
		if(toggle == false)
		{
			$('#bw-wrapper').bw('dull');
			toggle = true;
		}else{
			$('#bw-wrapper').bw('bright');
			toggle = false;
		}
	});

	$("#myNavbar ul li").on("click", function(){
		$("#dropdown").css("display", "none");
	});
	
	$(".navbar-toggle").on("click", function(){
		$("#dropdown").toggleClass("collapse")
	});	
	
	$('ul.nav a').on('click', function(){
			
		$(".navbar-toggle").click();
	});
	
	$(document).on("scroll", function(){
		//$("nav.navbar").css("background","white");
		checkScroll();
		navCheck();
		
	});

	$('ul.navbar-right').on('click', 'li', function() {
		var listID = $(this).prop('id');
		switch(listID)
		{
			case 'home':
				var scroller = $('#section1');
				break;
			case 'skill':
				var scroller = $('#skillSection');
				break;
			case 'project':
				var scroller = $('#projectSection');
				break;
			case 'gMap':
				var scroller = $('#map');
				break;
		}
		$('html, body').animate({scrollTop: scroller.offset().top}, 1000);
		return false;
	});

	$("a.iNeed").on("click", function() {
		$('html, body').animate({scrollTop: $('#map').offset().top}, 1000);
		return false;//Stops the dumb flash that happens when link is clicked
	});

	$('footer button').on('click', function(){
		var name = $("footer input[name='name']").val();
		var email = $("footer input[name='email']").val();
		var phone = $("footer input[name='phone']").val();
		var message = $("footer textarea").val();
		$("footer span.response").text("");
		$.ajax(
		{
			type: 'post',
			url: 'php-handling/send-mail.php',
			data: {
				name: name,
				email: email,
				phone: phone,
				message: message},

			success: function(data){
				switch(data)
				{
					case "0":
						$("footer span.response").text("Message sent! Thank you and I will be in touch shortly!");
						$("footer input[name='name']").val("");
						$("footer input[name='email']").val("");
						$("footer input[name='phone']").val("");
						$("footer textarea").val("");
						break;
					case "1":
						$("footer span.response").text("Looks like there was an issue. Please try again.");
						break;
					case "2":
						$("footer span.response").text("The mail was not sent. Please try again.");
						break;
					default:
						$("footer span.response").text("Message sent! Thank you and I will be in touch shortly!");
						$("footer input[name='name']").val("");
						$("footer input[name='email']").val("");
						$("footer input[name='phone']").val("");
						$("footer textarea").val("");
						break;
				}
			},
			error: function(err){
				
			}
		});
	});
    
    function checkScroll()
    {
    	if($(window).scrollTop() > 0)
		{
			$("nav.navbar").addClass("scrolled");
			
		}else{
			$("nav.navbar").removeClass("scrolled");
		}
    }

    function navCheck()
    {
    	var w = $(document).scrollTop();
    	var cont = contPos.top - w;
    	var proj = projPos.top - w;
    	var skill = skillPos.top - w;

		if(skill < 575 && skill > 0)
    	{
    		removeBorder(1);
    	} else if(cont > 575 && proj < 575)
    	{
    		removeBorder(2);
    	} else if(cont < 575 && cont > 0)
    	{
    		removeBorder(3);	
    	} else if (skill > 575)
    	{
    		removeBorder(0);
    	}
    }

    function removeBorder(child)
    {
    	$navi.each(function(){
			$(this).removeClass('activeNavLink');
		});
		$navi.eq(child).addClass('activeNavLink');
    }
 
});
	
</script>
</body>
</html>