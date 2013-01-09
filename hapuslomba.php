<html>
<body>
<?php
include "config.php";
mysql_select_db("ifishing");  
//get the value from form update
 $nama = $_GET['JUDUL_PERLOMBAAN']; //get the no which will deleted
 //var_dump($nama);
//query for update data in database
 $query = "DELETE from perlombaan WHERE JUDUL_PERLOMBAAN = '$nama'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "lomba.php";
	echo "<h4> delete data success </h4>";
}
else{echo "<h4>maaf ya gagal</h4>";};
?>
</body>
</html>
