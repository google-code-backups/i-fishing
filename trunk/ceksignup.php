<?php
include'config.php';

$strSQL = "INSERT INTO member (fname,lname,email,pass,sex-select,day,monthyear,P1,J1,P2,J2)

VALUES ($_POST['fname']','$_POST['lname']','$_POST['email']','$_POST['pass']','$_POST['sex-select']','$_POST['day']','$_POST['month']','$_POST['year']','$_POST['P1']','$_POST['J1']','$_POST['P2']','$_POST['J2'])

$qry = @mysql_query($strSQL,$conn)

or die ("Query salah, karena: " . mysql_error());

?>

<H2> Diary telah ditambahkan </H2>

<A HREF="tablenew.php"> Klik di sini </A> untuk melihat history.