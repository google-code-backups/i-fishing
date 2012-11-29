
<?php
include 'config.php';
	$db_gresicha = mysql_select_db("ifishing", $id_mysql);
	
	$tampil = "SELECT NAMA_DEPAN, NAMA_BELAKANG, JENIS_KELAMIN, TANGGAL_LAHIR FROM AKUN_PENGGUNA";  
    $hasil = mysql_query($tampil);
?>