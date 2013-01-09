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
<title>Perlombaan</title>

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
                    <img src="img/slide4.png" width="1800" height="50" alt="">
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
						<li>
							<a href="homepage.html">Home</a>
						</li>
						<li><a href="profile.html">Profile</a></li>
						<li class="Dropdown">
						<a class="Dropdown" id="drop1" role="button" data-toggle="dropdown" href="#">Event 
						<b class="caret"></b></a>
						<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
						<li><a tabindex="-1" href="lomba.php">Perlombaan</a></li>
						<li><a tabindex="-1" href="berita.html">Berita</a></li>
						<li><a tabindex="-1" href="#">Tips and Trik</a></li>
						</ul>
              </li>
						<li><a href="wisata.php">Wisata Pancing</a></li>
						<li><a href="w.html">About I-Fishing</a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>

				</div>
<!--<div class="container-fluid">
<div class="row-fluid">
    <div class="span12">-->
	<button type="button" align="right" class="btn"><a href="editprofil.php">Edit profil</a></button>
	<br>
	</br>
<legend><strong>PROFIL</strong></legend>

<?php
include 'config.php';
	$tampil = "SELECT NAMA_DEPAN, NAMA_BELAKANG, JENIS_KELAMIN, TANGGAL_LAHIR, FOTO FROM akun_pengguna where email= '".$_SESSION['email']."'"; 
    //$tampil = "SELECT fname, lname, sex, day, month, year FROM akun_pengguna where email= '".$_SESSION['email']."'"; 
    $hasil = mysql_query($tampil);
	while ($data = mysql_fetch_row ($hasil)){
	?> <br>
			<tr>
				<td><img src="<?php echo $data[4];?>" width="150" height="50"></td>
			</tr>
			</br>
			<br>
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
				<th>Tanggal Lahir  : </th> <td><?php echo $data[3]?></td>
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