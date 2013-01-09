<!DOCTYPE html>
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
<title>Berita</title>
</head>
<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
<link rel="stylesheet" href="css/nivo-slider.css" media="screen">
<link rel="stylesheet" href="css/futurico-theme.css" media="screen">

<div class="hero row">
		<div class="hero-container">
		<div class="action pull-right"><img src="img/logo.png" width="350" height="250"></img>
			</div>
			<div class="span6">
				<h2>Website Pemancingan Terintegrasi</h2>
				<h6>"Trust us to be your fishing partner"</h6>
			</div>
		</div>
	</div>

<body>
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
						<li><a tabindex="-1" href="berita.html">Berita</a></li>
						<li><a tabindex="-1" href="#">Tips and Trik</a></li>
						</ul>
              </li>
						<li><a href="wisata.php">Wisata Pancing</a></li>
						<li><a href="w.html">About I-Fishing</a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>

				</div>
				
			</div>
			<hr class="bs-docs-separator">

<body>
<form class="form-horizontal" name="formtambah" action="simpanprofil2.php" method="post" enctype="multipart/form-data">
<legend><strong>EDIT PROFIL</strong></legend>
		<div class="control-group">
			<label class="control-label" for="inputNamaDepan">Nama Depan</label>
			<div class="controls">
			<input name="inputNamaDepan" class="span4" type="text" id="inputNamaDepan" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inpuNamaBelakang">Nama Belakang</label>
			<div class="controls">
			<input name="inputNamaBelakang" class="span4" type="text" id="inputNamaBelakang" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmotion">Jenis Kelamin</label>
			<div class="controls">
			<select name="inputJenisKelamin" class="span4" type="text" id="inputJenisKelamin">
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Tanggal Lahir</label>
			<div class="controls">
			<input name="inputTanggalLahir" class="span4" type="date" id="inputTanggalLahir" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Email</label>
			<div class="controls">
			<input name="inputEmail" class="span4" type="text" id="inputEmail" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Password</label>
			<div class="controls">
			<input name="inputPassword" class="span3" type="password" id="inputPassword" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Foto</label>
			<div class="controls">
			<input name="inputGambar" class="span4" type="file" id="inputGambar" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Pertanyaan 1</label>
			<div class="controls">
			<input name="inputPertanyaan1" class="span4" type="text" id="inputPertanyaan1" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Jawaban 1</label>
			<div class="controls">
			<input name="inputJawaban1" class="span4" type="text" id="inputJawaban1" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Pertanyaan 2</label>
			<div class="controls">
			<input name="inputPertanyaan2" class="span4" type="text" id="inputPertanyaan2" required="true">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Jawaban 2</label>
			<div class="controls">
			<input name="inputJawaban2" class="span4" type="text" id="inputJawaban2" required="true">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button type="submit" class="btn btn-primary"></i>Save</button>
			<button type="button" class="btn"><a href="profil.php">Back</a></button>
			</div>
		</div>
	</form>
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