<?php
//koneksi ke server localhost
    mysql_connect("localhost", "root", "");
//mengambil database sesuaikan dengan database yang agan buat
    mysql_select_db("ifishing");
   
//fungsi jika di klik login pada form login
if ($_POST['Login']) {
$email=$_POST['email'];
$pass=$_POST['pass'];

//jika username dan password tidak diisi
if (empty($email) OR empty($pass)) {
echo "<center>Username dan password harus diisi <br> <a href=javascript:history.back()>Kembali</a></center>"; }

//jika username dan password diisi
else {
 $periksa=mysql_query( "SELECT email FROM member WHERE email='$email' AND pass LIKE BINARY '$pass'" ) ;
  if( mysql_num_rows( $periksa ) != 1 ) {
    echo "<center>Username dan password tidak ada dalam database <br><a href=javascript:history.back()>Kembali</a></center>"; }
   
    // Login Berhasil
    else {
            $_SESSION['email']=$email; //session
      echo '<center><b> Login Berhasil  dengan username : '.$_SESSION['email'].'</b></center>';
     } }
}
?>