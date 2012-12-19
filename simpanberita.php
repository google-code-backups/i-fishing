<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>simpan berita</title>
</head>

<body>
<?php
$inputjudul=$_POST['inputJudul'];
$inputtanggal=$_POST['inputTanggal'];
$inputwaktu=$_POST['inputWaktu'];
$inputisi=$_POST['inputIsi'];
$inputgambar=$_POST['inputGambar'];

$host  ="localhost";
$user ="root";
$pwd ="";
$db_name ="ifishing";

$conn = @mysql_connect ($host, $user, $pwd)
or die ("Koneksi Gagal, karena " . mysql_error());
mysql_select_db("$db_name")or die("cannot select database");

$insertdata = "INSERT INTO BERITA (ID_BERITA, JUDUL_BERITA, TANGGAL_BERITA, WAKTU_BERITA, ISI_BERITA, FOTO_BERITA)
VALUES('','$inputjudul', '$inputtanggal', '$inputwaktu', '$inputisi', '$inputgambar')";
$hasil=mysql_query($insertdata);

?>
<p><center><a>Berita has been saved</a></center></p>
</body>
<script src="js/bootstrap.js"></script>
</html>
