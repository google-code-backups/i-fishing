<?php
include "configwp.php";
require "functions1.php";

//get the value from form update
 $nama = $_GET['nama']; //get the no which will deleted

//query for update data in database
 $query = "DELETE from wp WHERE nama = '$nama'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "wisata.php";
	echo "<h4> delete data success </h4>";
}
?>
