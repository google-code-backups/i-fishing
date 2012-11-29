<html>
<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";
?>


<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROFIL</title>


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
    <li class="active"><a href="profil.html">Profile</a></li>
    <li><a href="#">Event</a></li>
	<li><a href="#">Wisata Pancing</a></li>
    </ul>
</div>
</head>
<body>
<form class="form-horizontal" name="formtambah" action="simpanprofil.php" method="post" enctype="multipart/form-data">
<legend><strong>EDIT PROFIL</strong></legend>
		<div class="control-group">
			<label class="control-label" for="inputNamaDepan">Nama Depan</label>
			<div class="controls">
			<input name="inputNamaDepan" class="span4" type="text" id="inputNamaDepan">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inpuNamaBelakang">Nama Belakang</label>
			<div class="controls">
			<input name="inputNamaBelakang" class="span4" type="text" id="inputNamaBelakang">
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
			<input name="inputTanggalLahir" class="span4" type="date" id="inputTanggalLahir">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Email</label>
			<div class="controls">
			<input name="inputEmail" class="span4" type="text" id="inputEmail">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Password</label>
			<div class="controls">
			<input name="inputPassword" class="span3" type="text" id="inputPassword">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Foto</label>
			<div class="controls">
			<input name="inputGambar" class="span4" type="file" id="inputGambar">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Pertanyaan 1</label>
			<div class="controls">
			<input name="inputPertanyaan1" class="span4" type="text" id="inputPertanyaan1">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Jawaban 1</label>
			<div class="controls">
			<input name="inputJawaban1" class="span4" type="text" id="inputJawaban1">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Pertanyaan 2</label>
			<div class="controls">
			<input name="inputPertanyaan2" class="span4" type="text" id="inputPertanyaan2">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Jawaban 2</label>
			<div class="controls">
			<input name="inputJawaban2" class="span4" type="text" id="inputJawaban2">
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