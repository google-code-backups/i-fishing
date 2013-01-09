<?php
session_start();

include "config.php";
mysql_select_db("ifishing");
$username = $_POST['email'];
$pass     = $_POST['pass'];
		
$login = "SELECT * FROM akun_pengguna WHERE email='$username' AND password='$pass'";
$result = mysql_query($login);
$sql = mysql_fetch_assoc($result);
	if ($sql){
	
				$_SESSION['email']		= $_POST['email'];
				$_SESSION['password']	= $_POST['password'];
				
				if($sql['level']=="member"){
				echo "<script>window.location = 'homepage.php'</script>";
						}
				if($sql['level']=="admin"){
				echo "<script>window.location = 'lomba.php'</script>";
					}
		}
					else{
					echo "<script>alert('salah cyin!')javascript:history.go(-1);</script>";
					}
					?>