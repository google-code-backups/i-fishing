
<?php
include "configwp.php";
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$isi = $_POST['isi'];
$fileName = $_FILES['picture']['name']; //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
$move = move_uploaded_file($_FILES['picture']['tmp_name'], 'C:/xampp/htdocs/I-Fishing/wp/image/'.$fileName); //save image to the folder
if($move){
echo "<h3>Success! </h3>";
$q = "INSERT into wp VALUES('$fileName','','$nama','$tanggal','$waktu','$isi','image/$fileName')"; //insert image property to database
$result = mysql_query($q);

$q1 = "SELECT link from wp where filename = '$fileName' limit 1 "; //get the image that have been uploaded
$result = mysql_query($q1);
while ($data = mysql_fetch_array($result)) {
$loc = $data['link']; ?>
<br/>
<h2> This is the Image : </h2>
<img src="<?php echo $loc; ?>" /> <!-- show the image using img src -->
<?php
}
} else{
echo "<h3>Failed! </h3>";
}
} else {
echo "Failed to Upload : ".$fileError;
}
?>