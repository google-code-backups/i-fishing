<?function uploadfoto ($filefoto) { 
	$folder='./D:'; 
	$filetujuan=$folder.$filefoto['name'];
	(move_uploaded_file($filefoto['tmp_name'], $filetujuan)) { return true; } else { return false; } 
	}
	$prosesupload = uploadfoto($_FILES['foto']); 
if ($prosesupload) { 
		echo "<table border='1' cellpadding='4'><tr><td colspan='2'><b>Upload Sukses</td></tr>"; 
		echo "<tr><td>File name </td><td>".$_FILES['foto']['name']."</td></tr>"; 
		echo "<tr><td>File type </td><td>".$_FILES['foto']['type']."</td></tr>";
		echo "<tr><td>File size </td><td>".$_FILES['foto']['size']."byte</td></tr>"; 
		echo "<tr><td>File View </td><td><img src='image/".$_FILES['foto']['name']."'></td></tr></table>"; 
	else { 
		echo "Upload foto gagal..."; 
		} 
	?>	