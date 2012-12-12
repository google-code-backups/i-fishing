<?php
include 'config.php';
include 'session.php';
	$db = mysql_select_db("ifishing", $id_mysql);
	$tampil = "SELECT fname, lname, sex, day, month, year FROM member where email= '".$_SESSION['email']."'";  
    $hasil = mysql_query($tampil);
?>