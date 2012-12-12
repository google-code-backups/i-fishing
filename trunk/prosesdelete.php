<?php
include "configtips.php";

//get the value from form update
 $judul = $_GET['judul']; //get the no which will deleted

//query for update data in database
 $query = "DELETE from tips WHERE judul = '$judul'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "campuraduk.php";
	echo "<h4> delete data success </h4>";
}
?>
