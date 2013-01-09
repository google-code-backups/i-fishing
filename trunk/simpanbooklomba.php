<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>simpan book lomba</title>
</head>

<body>
<?php
include "config.php";

$inputpilihlomba=$_POST['inputPilihLomba'];
$inputnamaketua=$_POST['inputNamaKetua'];
$inputalamatketua=$_POST['inputAlamatKetua'];
$inputhpketua=$_POST['inputHPKetua'];
$inputnamaanggota1=$_POST['inputNamaAnggota1'];
$inputalamatanggota1=$_POST['inputAlamatAnggota1'];
$inputhpanggota1=$_POST['inputHPAnggota1'];
$inputnamaanggota2=$_POST['inputNamaAnggota2'];
$inputalamatanggota2=$_POST['inputAlamatAnggota2'];
$inputhpanggota2=$_POST['inputHPAnggota2'];
date_default_timezone_set ('Asia/Jakarta');
$inputtanggal= date_default_timezone_get('y-m-d');
$fileName = $_FILES['inputGambar']['name']; //get the file name
$fileSize = $_FILES['inputGambar']['size']; //get the size
$fileError = $_FILES['inputGambar']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
	$move = move_uploaded_file($_FILES['inputGambar']['tmp_name'], 'C:/xampp/htdocs/ifishing/lomba/image/'.$fileName); //save image to the folder
	if($move)
	{
		echo "<h3>Success! </h3>";
		$insertdata = "INSERT INTO BOOKING_LOMBA (ID_DAFTAR_LOMBA, JENIS_LOMBA, NAMA_KETUA, ALAMAT_BOOK_LOMBA, NO_HP_BOOK_LOMBA, NAMA_ANGGOTA1, ALAMAT_ANGGOTA1, HP_ANGGOTA1, NAMA_ANGGOTA2, ALAMAT_ANGGOTA2, HP_ANGGOTA2, KTP_KETUA, filename, TANGGAL_BOOK_LOMBA)
		VALUES('', '$inputpilihlomba','$inputnamaketua', '$inputalamatketua', '$$inputhpketua','$inputnamaanggota1', '$inputalamatanggota1', '$inputhpanggota1', '$inputnamaanggota2', '$inputalamatanggota2', '$inputhpanggota2','lomba/image/$fileName', '$fileName', '$inputtanggal')";
		$hasil=mysql_query($insertdata) or die (mysql_error());
		$getfoto = "SELECT KTP_KETUA from BOOKING_LOMBA where FILENAME = '$fileName' limit 1 "; //get the image that have been uploaded
		$hasilfoto = mysql_query($getfoto);
		while ($data = mysql_fetch_array($hasilfoto))
		{
			$loc = $data['KTP_KETUA']; 
?>
			<br/>
			<h2> This is the Image : </h2>
			<img src="<?php echo $loc; ?>" width="300" height="400"/> <!-- menampilkan gambar-->
<?php
		}
	} else
		{
			echo "<h3>Failed! </h3>";
		}
} else 
	{
		echo "Failed to Upload : ".$fileError;
	}
?>
<p><center><a>Berita has been saved</a></center></p>
<button type="button" class="btn"><a href="bookinglomba.html">Back</a></button>
</body>
<script src="js/bootstrap.js"></script>
</html>
