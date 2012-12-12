<?php
include ('config.php');
$db_gresicha = mysql_select_db("ifishing", $id_mysql);
$tbl_name ="akun_pengguna";
$search = htmlspecialchars(addslashes($_POST['searchterm']), ENT_QUOTES); 
if(isset($_POST['Submit'])) { 
if(!$search) { 
echo "No search entered, please go back and fill in the fields properly."; 
} 
else { 
$query = mysql_query("SELECT * FROM akun_pengguna WHERE NAMA_DEPAN LIKE '%$search%'"); 
$resultnum = mysql_num_rows($query); // Just print $resultnum if you want to show how many results returned 

if($resultnum>0) { // Echos out matches if anything was found 

while($row=mysql_fetch_array($query)) { // Starts spitting out the data 
echo "<br><br> sukses,'$search' ada <br /> <br />";
echo "INI HASILNYA :";
var_dump($row);
echo "<br>";
}
/*
$tampil1 = "SELECT NAMA_DEPAN, NAMA_BELAKANG, JENIS_KELAMIN, TANGGAL_LAHIR FROM AKUN_PENGGUNA where '$query'";  
$hasil1 = mysql_query($tampil1);
while ($data = mysql_fetch_row (($hasil1))){
	echo "<br>
			<tr>
				<th>Nama Depan     : </th> <td>'$search', $data[0]</td>
			</tr>
			</br>
			<br>
				<th>Nama Belakang  : </th> <td>$data[1]</td>
			</tr>
			</br>
			<br>
			<tr>
				<th>Jenis Kelamin     : </th> <td>$data[2]</td>
			</tr>
			</br>
			<br>
				<th>Tanggal Lahir  : </th> <td>$data[3]</td>
			</tr>
			</br>";*/
	 }
} 
} 
else { 
echo "<p>No search entered?</p>"; 
}
?>