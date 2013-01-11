<?php
include "configtips.php";
require "functions1.php";

//get the value from form update
 $nama = $_GET['nama']; //get the no which will deleted

//query for update data in database
 $query = "DELETE from TIPS_TRIK WHERE nama = '$nama'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "tipsdantrik.html";
	echo "<h4> delete data success </h4>";
}
?>
