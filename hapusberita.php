<?php
include "config.php";
//get the value from form update
 $nama = $_GET['judul_berita']; //get the no which will deleted

//query for update data in database
 $query = "DELETE from berita WHERE judul_berita = '$nama'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "listberita.php";
	echo "<h4> delete data success </h4>";
}
?>
