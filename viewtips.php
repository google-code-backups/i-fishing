<html>
<head>
	<title>View</title>
<script language="JavaScript">
function show_alert() {
    return alert('Data berhasil dihapus :D');
}
</script>
</head>
<body>
<?php
//file form insert dan edit
$host  ="localhost";
$user ="root";
$pwd ="";
$db_name ="ifishing";
$tbl_name ="tips";

$conn = @mysql_connect ($host, $user, $pwd)
or die ("Koneksi Gagal, karena " . mysql_error());
mysql_select_db("$db_name")or die("cannot select database");

$sql = "SELECT judul,tanggal,waktu,isi,link FROM tips";
$exec = mysql_query($sql) or die(mysql_error());
?>
<link href="View/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="View/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link  href="View/bootstrap/js/bootstrap.min.js" rel="stylesheet"/>
<script type="text/javascript" src="View/bootstrap/js/jquery-latest.js"></script>
</head>
<h1>View Data</h1>

<table class="table table-striped" cellspacing=7 cellpadding=7>
	<tr>
		<td>Judul</td>
		<td>Tanggal</td>
		<td>Waktu</td>
		<td>Isi</td>
		<td>Image</td>
	</tr>
	<?php
		while($res = mysql_fetch_row($exec)){
	?>
	<tr>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td><?php echo $res[3]; ?></td>
		<td><?php echo $res[4]; ?></td>
		<td><a href="edit.php?judul=<?php echo $res[0]; ?>">Edit</a> | <a href="prosesdelete.php?judul=<?php echo $res[0];?>" onClick="show_alert()"> Hapus </a></td>
	<?php
		}
	?>
	
</table>
<td align="right" colspan="3"></label><button onclick="entry()" class="btn btn-primary"></i>Entry Data</button> 
<p></p>
</body>
</html>
