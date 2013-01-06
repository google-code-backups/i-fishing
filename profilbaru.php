<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<body>
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
  <input type="text" class="input-medium search-query" placeholder="Search" name "search">
 <a type="submit" class="btn btn-small" href="seachprofil.php"><i class="icon-search"></i></a>
</form>

<form method="post" action="search5.php">
<input type="text" name="searchterm" size=25 maxlength=25>
<input type="Submit" name="Submit" value="Submit">
</form>

</div>
</head>
<body>
<legend><strong>PROFIL</strong></legend>

<center><img src="img/balon.png";" class="img-circle"><center>
<?php
include 'config.php';
include 'session.php';

    $tampil = "SELECT fname, lname, sex, day, month, year FROM member where email= '".$_SESSION['email']."'"; 
echo $tampil;
    $hasil = mysql_query($tampil);
	echo $hasil;
	while ($data = mysql_fetch_row ($hasil)){
	?> <br>
			<tr>
				<th>Nama Depan     : </th> <td><?php echo $data[0]?></td>
			</tr>
			</br>
			<br>
				<th>Nama Belakang  : </th> <td><?php echo $data[1]?></td>
			</tr>
			</br>
			<br>
			<tr>
				<th>Jenis Kelamin     : </th> <td><?php echo $data[2]?></td>
			</tr>
			</br>
			<br>
				<th>Tanggal Lahir  : </th> <td><?php echo $data[3]?></td> <td><?php echo $data[4]?></td> <td><?php echo $data[5]?></td> 
			</tr>
			</br>
	 <?php }?>
	 	
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