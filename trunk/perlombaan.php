<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>simpan lomba</title>
</head>

<body>
<?php
include "config.php";
 
if(empty($_POST['inputJudul']) || empty($_POST['inputJudul']) || empty($_POST['inputWaktu']) || empty($_POST['inputTempat']) || empty($_POST['inputGambar']))
{
	die(msg(0,"Semua field harus terisi!"));
}

$inputjudul=$_POST['inputJudul'];
$inputtanggal=$_POST['inputTanggal'];
$inputwaktu=$_POST['inputWaktu'];
$inputtempat=$_POST['inputTempat'];
$inputisi=$_POST['inputIsi'];
$fileName = $_FILES['inputGambar']['name']; //get the file name
$fileSize = $_FILES['inputGambar']['size']; //get the size
$fileError = $_FILES['inputGambar']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
	$move = move_uploaded_file($_FILES['inputGambar']['tmp_name'], 'C:/xampp/htdocs/ifishing/ifishing/lomba/image/'.$fileName); //save image to the folder
	if($move)
	{
		echo "<h3>Success! </h3>";
		$insertdata = "INSERT INTO PERLOMBAAN (ID_PERLOMBAAN, JUDUL_PERLOMBAAN, TANGGAL_LOMBA, WAKTU_LOMBA, TEMPAT_LOMBA, ISI_PERLOMBAAN, GAMBAR_LOMBA, FILENAME)
		VALUES('','$inputjudul', '$inputtanggal', '$inputwaktu', '$inputtempat','$inputisi', 'lomba/image/$fileName', '$fileName')";
		$hasil=mysql_query($insertdata);
		$getfoto = "SELECT GAMBAR_LOMBA from PERLOMBAAN where FILENAME = '$fileName' limit 1 "; //get the image that have been uploaded
		$hasilfoto = mysql_query($getfoto);
		while ($data = mysql_fetch_array($hasilfoto))
		{
			$loc = $data['GAMBAR_LOMBA']; 
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
<button type="button" class="btn"><a href="tambahlomba.html">Back</a></button>
</body>
<script src="js/bootstrap.js"></script>
</html>
