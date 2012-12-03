<?php
$host  ="localhost";
$user ="root";
$pwd ="";
$db_name ="ifishing";
$tbl_name ="tips";

$conn = @mysql_connect ($host, $user, $pwd)
or die ("Koneksi Gagal, karena " . mysql_error());
mysql_select_db("$db_name")or die("cannot select database");
?>