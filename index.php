<!--

Tutoralzine Demo 
Original tutorial: Creating a Facebook-like Registration Form with jQuery
Tutorial URL: http://tutorialzine.com/2009/08/creating-a-facebook-like-registration-form-with-jquery/

You are free to use the following demo code for any purpose you see fit.

-->


<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";
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
    <li class="active">
    <a href="#">Home</a>
    </li>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Event</a></li>
	<li><a href="#">Wisata Pancing</a></li>
    </ul>
</div>
</head>

<div class="form-title">Login to your account</div>
<div class="form-sub-title">We're happy to see you return! Please login to continue </div>
<form id="regForm" action="submit.php" method="post">
<table>
  <tbody>
  <tr>
    <td><label for="email">Email</label></td>
    <td><div class="input-container"><input name="email" id="email" type="text" placeholder="Email"/></div></td>
  </tr>
  <tr>
    <td><label for="pass">Password</label></td>
    <td><div class="input-container"><input name="pass" id="pass" type="password" placeholder="Password"/></div></td>
  </tr>
       	  <tr>
  <td>&nbsp;</td>
  <td><div class="control-group">
    <div class="controls">
    <label class="checkbox">
		<input type="checkbox"> Remember me
    </label><button type="submit" class="btn btn-primary"></i>Sign In</button>
<img id="loading" src="img/ajax-loader.gif" alt="working.." />
</td>
  </tr>
<div>
<br>
	<td>
	<td>
	<p>Belum punya akun....<a href="register.php">    Sign Up now?!</a></p>
	<br><p>Bermasalah dengan password.....<a href="forgot.php">    Forgot password!</a></p></br></td>
	</td>
	</br>
</div>
  </table>

</form>

<div id="error">
&nbsp;
</div>

</div>
</div>
</div>
</div>
</body>
<script src="js/bootstrap.js">
</html>
