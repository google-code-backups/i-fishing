<html>
<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";
?>


<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil</title>

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
    <li class="active"><a href="profil.php">Profile</a></li>
    <li><a href="#">Event</a></li>
	<li class="dropdown">
                <a class="dropdown-toggle" 
				data-toggle="dropdown" 
				href="event.php">Event <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="profil.php">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
    </li>
	
	<ul class="nav nav-pills">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
        Dropdown
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
      <!-- links -->
    </ul>
  </li>
</ul>
	
	<li><a href="#">Wisata Pancing</a></li>
    </ul>
</div>
</head>
<body>
<legend><strong>PROFIL</strong></legend>
<center><img src="img/balon.png";" class="img-circle"><center>
<?php

include 'tampilprofil.php';
	while ($data = mysql_fetch_row (($hasil))){
	echo "<br>
			<tr>
				<th>Nama Depan     : </th> <td>$data[0]</td>
			</tr>
			</br>
			<br>
				<th>Nama Belakang  : </th> <td>$data[1]</td>
			</tr>
			</br>
			<br>
			<tr>
				<th>Jenis Kelamin     : </th> <td>$data[2]</td>
			</tr>
			</br>
			<br>
				<th>Tanggal Lahir  : </th> <td>$data[3]</td>
			</tr>
			</br>";
	 }
	 
?>	
	</div>
    </div>
	</div>
    </div>
<!--

span5

-->


</body>

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