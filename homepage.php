<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location: home.php');
	exit;
}
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div class="hero row">
		<div class="hero-container">
			<div class="span8">
				<h2>Website Pemancingan Terintegrasi</h2>
				<h6>"Trust us to be your fishing partner"</h6>
			</div>
			<div><img src="img/logo.png" width="250" height="150" align="right">
			</div>
		</div>
</div>
<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/slide1.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slide2.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slide3.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
				  <div class="item">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
			  
<div id="content">
	<div class="wrapper">

		<div id="main">
			<div class="mode">
				 <div class="bs-docs-example">
					<ul class="nav nav-pills">
						<li class="active">
							<a href="homepage.html">Home</a>
						</li>
						<li><a href="profil.php">Profile</a></li>
						<li class="Dropdown">
						<a class="Dropdown" id="drop1" role="button" data-toggle="dropdown" href="#">Event 
						<b class="caret"></b></a>
						<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
						<li><a tabindex="-1" href="lomba.php">Perlombaan</a></li>
						<li><a tabindex="-1" href="#">Berita</a></li>
						<li><a tabindex="-1" href="#">Tips and Trik</a></li>
						</ul>
              </li>
						<li><a href="wisata.php">Wisata Pancing</a></li>
						<li><a href="w.html">About I-Fishing</a></li>
						<li><a href="logout.php">log out</a></li>
					</ul>

				</div>
			<div class="row">	
			<div class="span6">
	<tr>
	<div id="wrapper" align="left">
				
				<!-- Slider -->
				
			<legend>Healines</legend>
			
			<td><img src="berita/image/ifishing 2.jpg" width="300" height="300"></td>
			</tr>
		</div>
		</div>
		
				<div class="span3">
<div id="div-regForm">
		<div class="form-title">Login to your account
		<div class="form-sub-title">We're happy to see you return! Please login to continue
		<table><form id="regForm" action="proses.php" method="post">
		<div class="control-group">
				<td><strong>Form Login </strong></td>
			  <tr>
				<td>Username: <input name="email" type="text" id="email" /></td>
			  </tr>
			  <tr>
				<td>Password: <input name="pass" type="password" id="pass" /></td>
			  </tr>
			  </div>
				<td>
				<div class="control-group">
				<div class="controls">
				<label class="checkbox">
					<input type="checkbox"> Remember me
				</label>
				</td>
				</div>
				<tr><td>
				<div class="control-group">
			<div class="controls">
			<button type="submit" class="btn btn-success">Submit</button>
			<button type="button" class="btn" href="register.php">Sign up</button>
			</div>
			  </tr>
			  
		</div>
		</div>
			</div>
			  
	<br>
	<td>
	<td>
		<br>
	</td>
	</br>
	</div>
		</form></table>
		</div>
		</div>
		</div>
		
		<br>
		<p><img src="logo.png" width="250" height="150"></img>
		  <BR>
		  <address>
		    <strong>Komunitas Pemancingan</strong><br>
					  Sukolilo <br>
					  Surabaya, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
		  </address>
					 
					<address>
					<strong>apa</strong><br>
					  <a href="mailto:#">i-fishing@gmail.com</a>
					</address>
		</br>			
	</ul>				
		

	<ul>
		

		<div class="clearfix"></div>
	</div>

</div>
</div>
</body>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'random',
			directionNavHide: false,
			pauseOnHover: true,
			captionOpacity: 1,
			prevText: '<',
			nextText: '>'
		});
	});
</script>

<script src="js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>

</html>
