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
<title>Sign Up</title>

<link rel="stylesheet" type="text/css" href="demo1.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>


</head>

<body>

<div><div class="page-header">
    <h1>Sign Up for I-Fishing Member <small>Register ur account to be new member</small></h1>
</div></div>

<div id="div-regForm">
<form id="regForm" action="sumbit.php" method="post">

<div><table>
  <tbody>
  <tr>
    <td><label for="fname">Nama Depan:</label></td>
    <td><div class="input-container"><input name="fname" id="fname" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="lname">Nama Belakang:</label></td>
    <td><div class="input-container"><input name="lname" id="lname" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="email">Email:</label></td>
    <td><div class="input-container"><input name="email" id="email" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="pass">Password:</label></td>
    <td><div class="input-container"><input name="pass" id="pass" type="password" /></div></td>
  </tr>
  <tr>
    <td><label for="sex">Jenis Kelamin:</label></td>
    <td>
    <div class="input-container">
    <select name="sex" id="sex">
    <option value="0">Pilih JK:</option>
    <option value="1">Laki-laki</option>
    <option value="2">Perempuan</option>
    </select>
    </div>
    
    </td>
  </tr>
  <tr>
    <td><label>Tanggal Lahir:</label></td>
    <td>
    <div class="input-container">
    <select name="month"><option value="0">Bulan:</option><?=generate_options(1,12,'callback_month')?></select>
    <select name="day"><option value="0">Tanggal:</option><?=generate_options(1,31)?></select>
	<select name="year"><option value="0">Tahun:</option><?=generate_options(date('Y'),1900)?></select>
    </div>
    </td>
	
  <tr>
    <td><label for="P1">Pertanyaan 1:</label></td>
    <td><div class="input-container"><input name="P1" id="P1" type="text" /></div></td>
  </tr>
	<tr>
    <td><label for="J1">Jawaban 1:</label></td>
    <td><div class="input-container"><input name="J1" id="J1" type="text" /></div></td>
  </tr><tr>
    <td><label for="P2">Pertanyaan 2:</label></td>
    <td><div class="input-container"><input name="P2" id="P2" type="text" /></div></td>
  </tr><tr>
    <td><label for="J2">Jawaban 2:</label></td>
    <td><div class="input-container"><input name="J2" id="J2" type="text" /></div></td>
  </tr>
	
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><button type="submit" class="btn btn-primary"></i>Submit</button> <button type="reset" class="btn btn-primary"></i>Batal</button>
</td>
  </tr>
  
    </tbody>
</table><div>

</form>

<div id="error">
&nbsp;
</div>

</div>
</div>
 </div>

</body>
<script src="js/bootstrap.js">
</html>
