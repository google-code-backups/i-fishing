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

<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add tips n trick</title>

<link rel="stylesheet" type="text/css" href="demo1.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div><div class="page-header">
    <h1>Tambah event untuk Tips n Trik <small>Bagikan informasi mengenani tips dan trick dunia memancing</small></h1>
</div></div>
<div>
<div id="div-regForm">
<form name="form" method="post" enctype="multipart/form-data" action="proses.php">
<table>
  <tbody>
  <tr>
    <td><label for="judul">Judul:</label></td>
    <td><div class="input-container"><input name="judul" id="judul" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="tanggal">Tanggal:</label></td>
    <td><div class="control-label"><input name="tanggal" id="tanggal" type="date" /></div></td>
  </tr>
  <tr>
    <td><label for="waktu">Waktu:</label></td>
    <td><div class="control-label"><input name="waktu" id="waktu" type="time" /></div></td>
  </tr>
  <tr>
    <td><label for="isi">Isi:</label></td>
    <td><TEXTAREA NAME="isi" placeholder="Tuliskan tips n trick..." ROWS=10 COLS=30 >
</TEXTAREA></td>
  </tr>
<tr>
	<td><label for="picture">Image:</label></td>
    <td><div class="input-container"><input name="picture" id="picture" type="file" /></div></td>
</tr>
  <tr>
  <td>&nbsp;</td>
 <td><input type="submit" name="upload" value="Upload" />
 	</td>
  </tr>
  </tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>
</div>
</div>

</body>
<script src="js/bootstrap.js">
</html>
