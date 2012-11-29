<html>
<head>
<?php
 include ('editprofil.php');
?>
<body>
<?php

$inputnamadepan=$_POST['inputNamaDepan'];
$inputnamabelakang=$_POST['inputNamaBelakang'];
$inputjeniskelamin=$_POST['inputJenisKelamin'];
$inputtanggalLahir=$_POST['inputTanggalLahir'];
$inputemail=$_POST['inputEmail'];
$inputpassword=$_POST['inputPassword'];
$inputgambar=$_POST['inputGambar'];
$inputpertanyaan1=$_POST['inputPertanyaan1'];
$inputjawaban1=$_POST['inputJawaban1'];
$inputpertanyaan2=$_POST['inputPertanyaan2'];
$inputjawaban2=$_POST['inputJawaban2'];

 include ('config.php');
 include ('fungsi_upload.php');
	
 $db_gresicha = mysql_select_db("ifishing", $id_mysql);
 
 $halaman = $_GET['halaman'];  
    if (empty ($halaman)){  
        $posisi = 0;  
        $halaman = 1;  
    }  else {  
        $posisi = ($halaman - 1);  
    }  
  $no = $posisi + 1; 
  $no++; 
 $insertdata = "INSERT INTO akun_pengguna (ID_MEMBER, NAMA_DEPAN, NAMA_BELAKANG, JENIS_KELAMIN, TANGGAL_LAHIR, EMAIL, PASSWORD, FOTO, PERTANYAAN_1, JAWABAN_1, PERTANYAAN_2, JAWABAN_2) 
 VALUES('$no', '$inputnamadepan','$inputnamabelakang', '$inputjeniskelamin', '$inputtanggalLahir', '$inputemail', '$inputpassword', '$inputgambar', '$inputpertanyaan1', '$inputjawaban1', '$inputpertanyaan2', '$inputjawaban2')";
 $hasil=mysql_query($insertdata, $id_mysql);
 
 ?>
 <p><center><a>Profil has been saved</a></center></p>
 </body>
 
<script src="js/bootstrap.js"></script>
</html>