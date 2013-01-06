<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>simpan berita</title>
</head>

<body>
<?php
include "config.php";
$inputjudul=$_POST['inputJudul'];
$inputtanggal=$_POST['inputTanggal'];
$inputwaktu=$_POST['inputWaktu'];
$inputisi=$_POST['inputIsi'];
$fileName = $_FILES['inputGambar']['name']; //get the file name
$fileSize = $_FILES['inputGambar']['size']; //get the size
$fileError = $_FILES['inputGambar']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
	$move = move_uploaded_file($_FILES['inputGambar']['tmp_name'], 'C:/xampp/htdocs/ifishing/berita/image/'.$fileName); //save image to the folder
	if($move)
	{
		echo "<h3>Success! </h3>";
		$insertdata = "INSERT INTO BERITA (ID_BERITA, JUDUL_BERITA, TANGGAL_BERITA, WAKTU_BERITA, ISI_BERITA, FOTO_BERITA, FILENAME)
		VALUES('','$inputjudul', '$inputtanggal', '$inputwaktu', '$inputisi', 'berita/image/$fileName', '$fileName')";
		$hasil=mysql_query($insertdata);
		$getfoto = "SELECT FOTO_BERITA from BERITA where FILENAME = '$fileName' limit 1 "; //get the image that have been uploaded
		$hasilfoto = mysql_query($getfoto);
		while ($data = mysql_fetch_array($hasilfoto))
		{
			$loc = $data['FOTO_BERITA']; 
?>
			<br/>
			<h2> This is the Image : </h2>
			<img src="<?php echo $loc; ?>" /> <!-- menampilkan gambar-->
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
</body>
<script src="js/bootstrap.js"></script>
</html>
