<!--

Tutoralzine Demo 
Original tutorial: Creating a Facebook-like Registration Form with jQuery
Tutorial URL: http://tutorialzine.com/2009/08/creating-a-facebook-like-registration-form-with-jquery/

You are free to use the following demo code for any purpose you see fit.

-->


<?php
	define('INCLUDE_CHECK',1);
	
?>


<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<body>
<div class="style3">
	  <div align="center" class="style2">
		<pre class="style3 style1 style1">
	
		SELAMAT DATANG
		-- Komunitas Pemancingan --</pre>
			  <BR><BR>
	  </div>
	</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
    <p><img src="logo.png" width="250" height="150"
		  <BR>
		  <address>
		    <strong>Komunitas Pemancingan</strong><br>
					  Sukolilo <br>
					  Surabaya, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
		  </address>
					 
					<address>
					<strong>apa</strong><br>
					  <a href="mailto:#">apaaja@gmail.com</a>
					</address>

			<div>
					
		<form method="post" action="logout.php"><legend>LOG OUT</legend>

			<button class="btn btn-danger" type="submit">Log Out</button>
		</form>
			</div>
    </div>
<!--

span2

-->
  <div class="span10">
 <div>
    <ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li> 
    <li><a href="#">Profile</a></li>
    <li class="active">
	<a href="tips.php">Event</a></li>
	<li><a href="#">Wisata Pancing</a></li>
    </ul>
</div>
</head>

<div class="form-title">Welcome to Event</div>
<div class="form-sub-title">Dapatkan tips n trick yang menarik seputar pemancingan - Enjoy it </div>
<br>
<div>
					
		<form method="post" action="tambah.php"><legend>Tips and Trick</legend>

			<button class="btn btn-primary" type="submit">Tambah tips n trick</button>
		</form>
			</div>
</br>
</div>
</div>
</div>

</body>
<script src="js/bootstrap.js">


