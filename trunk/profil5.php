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
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li><a tabindex="-1" href="#">Action</a></li>
                  <li><a tabindex="-1" href="#">Another action</a></li>
                  <li><a tabindex="-1" href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
	
	<li><a href="#">Wisata Pancing</a></li>
    </ul>

<form class="form-search">
  <input type="text" class="input-medium search-query" placeholder="Search" name="searchterm">
 <a type="submit" class="btn btn-small" href="search4.php"><i class="icon-search"></i></a>
</form>

<form method="post" action="search4.php">
<input type="text" name="searchterm" size=25 maxlength=25>
<input type="Submit" name="Submit" value="Submit">
</form>

</div>
</head>
<body>
<legend><strong>PROFIL</strong></legend>

<center><img src="img/balon.png";" class="img-circle"><center>
<?php
include 'tampilprofil2.php';
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