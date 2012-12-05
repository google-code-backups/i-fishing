<HTML>

<HEAD>

<TITLE> Hapus </TITLE>


</HEAD>

<BODY>

<CENTER>

<img src=logo.png width=600 height=300> <br>Artikel telah dihapus</br>

<BR><BR>Sukses hahaha</BR></BR>

<?

$host = "localhost";

$user = "root";

$pwd = "";

$conn = @mysql_connect ($host, $user, $pwd)

or die ("Koneksi Gagal: " . mysql_error());

mysql_select_db("ifishing",$conn);

mysql_query("DELETE FROM tips WHERE judul='ggf'");

mysql_close($conn);

?>

</TABLE>

</BODY>


<INPUT TYPE="button" VALUE="Back" onClick="history.go(-2);return true;"()>

<INPUT TYPE="button" VALUE="LogOut" onClick="history.go(-3);return true;"()>



</HTML>