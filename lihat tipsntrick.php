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

<?php  
	include "connect.php";  
	$sql = mysql_query("SELECT TipsnTrick, Tanggal, Kategori FROM tipsntrick WHERE ID=".$_SESSION['ID']."");
	$row = mysql_fetch_row($sql);  
	if(!$row){
		echo "no list"; 
	} else  
		{
		
		echo "<tr>";
		echo "<td><center>tipsntrick</center></td>"; 
		echo "<td><center>tanggal</center></td>";
		echo "<td><center>kategori</center></td>"; 
	
		echo "</tr>";  
      
		do{   
			list($tipsntrick,$tanggal,$kategori)=$row;  
			echo "<tr>";
			echo "<td>$tipsntrick</td>";		
			echo "<td>$tanggal</td>";
			echo "<td>$kategori</td>";
			
			echo "</tr>";  
		} while($row=mysql_fetch_row($sql));  
	}
	?>

</body>
<script src="js/bootstrap.js">
</html>
