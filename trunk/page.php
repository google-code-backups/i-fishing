
<?php  
    include 'config.php'; 
    mysql_select_db("ifishing");  
  
    // Langkah 1 tentukan batas, cek halaman & posisi data  
    $batas = 5;  
    $halaman = $_GET['halaman'];  
    if (empty ($halaman)){  
        $posisi = 0;  
        $halaman = 1;  
    }  else {  
        $posisi = ($halaman - 1) * $batas;  
    }  
  
    // Langkah 2 Sesuaikan perintah SQL 
	$batas1=$batas+1;
    $tampil = "SELECT * FROM akun_pengguna LIMIT $posisi, $batas1";  
    $hasil = mysql_query($tampil);
	while ($data = mysql_fetch_row (($hasil))){
	$no = $posisi + 1; 
	echo "<tr><td>$no</td>
			  <td>$data[0]</td>
			  <td>$data[1]</td>
			  <td>$data[2]</td>
			  <td>$data[3]</td>
			  </tr>";
    while($r=mysql_fetch_array($hasil)){ 
	$nom = $no + 1; 
	while ($data1 = mysql_fetch_row (($hasil))){
	echo "<tr><td>$nom</td>
			  <td>$data1[0]</td>
			  <td>$data1[1]</td>
			  <td>$data1[2]</td>
			  <td>$data1[3]</td>
	</tr>";
    $nom++; 	
    } } 
	}
    echo "</table>  
";  
    //echo "SELECT * FROM diary LIMIT $posisi, $batas, $halaman";  
    // Langkah 3 hitung total data dan halaman  
    $tampil2 = mysql_query("SELECT * FROM akun_pengguna");  
    $jmlData = mysql_num_rows($tampil2);  
    $jmlHal = ceil($jmlData/$batas);  
  
    //Link ke halaman sebelumnya (Prev)  
    if ($halaman > 1){  
        $prev = $halaman - 1;  
        echo "<a href=$_SERVER[PHP_SELF]?halaman=$prev><< Prev </a>";  
    }  else {  
        echo "<< Prev";  
    }  
  
    //Tampilkan link halaman 1,2,3,...  
    for($i=1;$i<=$jmlHal;$i++){  
        if ($i != $halaman){  
            echo "<a href=$_SERVER[PHP_SELF]?halaman=$i>| $i | </a>";  
        }  else {  
            echo " $i ";  
        }  
    }  
  
    //Link ke halaman berikutnya (Next)  
    if ($halaman < $jmlHal){  
        $next = $halaman + 1;  
        echo "<a href=$_SERVER[PHP_SELF]?halaman=$next> | Next >></a>";  
    }else{  
        echo "Next >> </center>";  
    }  
?>