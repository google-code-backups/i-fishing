<!DOCTYPE html>
<html lang="en">
<head>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Berita</title>
</head>
<link rel="stylesheet" type="text/css" href="demo.css" />
<body>
<?php  
    include 'config.php'; 
    mysql_select_db("ifishing");  
    // Langkah 1	 tentukan batas, cek halaman & posisi data  
    $batas = 4;   
  if(isset($_GET['halaman'])) {
					$halaman = $_GET['halaman'];
					$posisi = ($halaman - 1) * $batas;
				}
				else {
					$posisi = 1;
					$halaman = 1;
				} 
  
    // Langkah 2 Sesuaikan perintah SQL 
	$batas=$batas+1;
    $tampil = "SELECT Nama_Depan, Jenis_Kelamin, Nama_Belakang,email FROM AKUN_PENGGUNA LIMIT $posisi, $batas";  
    $hasil = mysql_query($tampil);
	while ($data = mysql_fetch_row (($hasil))){
	$no = $posisi +1 ;
	?>
              <li class="span4">
                <div class="thumbnail">
                  <div class="caption">
                    <h3><?php echo $data[0]."-".$data[2];?></h3>
                    <p><?php echo "Jenis Kelamin :".$data[1];?></p>
					<p><?php echo "E-mail        :".$data[3];?></p>
                    <p><a  class="btn-primary" name="hapus" id="hapus"></a> <a href="hapusberita.php" class="btn">Hapus</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
		  </div>
		  <?php
    $no++; 	
    
	}
	
    // Langkah 3 hitung total data dan halaman  
    $tampil2 = mysql_query("SELECT Nama_Depan, Jenis_Kelamin, Nama_Belakang,email FROM AKUN_PENGGUNA");  
    $jmlData = mysql_num_rows($tampil2);  
    $jmlHal = ceil($jmlData/$batas);  
  
    //Link ke halaman sebelumnya (Prev)  
    if ($halaman > 1){  
        $prev = $halaman - 1;  
        echo "<a href=$_SERVER[PHP_SELF]?halaman=$prev << Prev </a>";  
    }  else {  
        echo "<center> << Prev";  
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
</body>
<script src="js/bootstrap.js"></script>
</html>