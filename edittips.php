<html>
<head>
	<title>View</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="demo2.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>
<body>

<div class="hero row">
		<div class="hero-container">
			<div class="span8">
				<h2>Website Pemancingan Terintegrasi</h2>
				<h6>"Trust us to be your fishing partner"</h6>
			</div>
			<div><img src="logo.png" width="250" height="150" align="right">
			</div>
		</div>
</div>
<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/slide1.png" width="1160" height="300"alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slide4.png" width="1160" height="300"alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slide3.png" width="1160" height="300"alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
			  
<div id="content">
	<div class="wrapper">

		<div id="main">
			<div class="mode">
				 <div class="bs-docs-example">
					<ul class="nav nav-pills">
						<li><a href="homm.html">Home</a></li>
						<li><a href="profile.html">Profile</a></li>
						<li class="Dropdown">
						<a class="Dropdown" id="drop1" role="button" data-toggle="dropdown" href="#">Event 
						<b class="caret"></b></a>
						<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
						<li><a tabindex="-1" href="#">Perlombaan</a></li>
						<li><a tabindex="-1" href="#">Berita</a></li>
						<li><a tabindex="-1" href="#">Tips and Trik</a></li>
						</ul>
              </li>
						<li class="active"><a href="wisata.php">Wisata Pancing</a></li>
						<li><a href="w.html">About I-Fishing</a></li>
					</ul>

				</div>
				
			
			<div id="wrapper" align="left">
				
				<!-- Slider -->
				
		<div class="form-title">Welcome to Wisata Pancing</div>
		<div class="form-sub-title">Dapatkan informasi menarik seputar lokasi pemancingan yang cocok dengan kamu </div>
		<br>
<?php
include "configtips.php";

$op = $_GET['op'];

if ($op == "edit")
{

   // proses untuk menampilkan data yang akan diedit pada form

   $judul = $_GET['judul'];

   $query = "SELECT * FROM tips WHERE judul = '$judul'";
   $hasil = mysql_query($query);
   $data  = mysql_fetch_array($hasil);

   echo "<form method=\"post\" action=\"".$_SERVER['PHP_SELF'].
        "?op=update\">";
   echo "<table border=\"1\">";
   echo "<tr>
           <td>Judul</td>
           <td><input type=\"text\" name=\"judul\"
               value=\"".$data['judul']."\"></td>
         </tr>";

   echo "<tr>
         <td>Isi</td>
         <td><input type=\"textarea\" name=\"isi\"
              value=\"".$data['isi']."\"></td></tr>";
   echo "</table>";
   echo "<input type=\"hidden\" name=\"link\"
         value=\"".$data['link']."\">";
   echo "<input type=\"submit\" name=\"submit\"
         value=\"Simpan Perubahan\">";
   echo "</form>";
}
else if ($op == "update")
     {

       // proses untuk updating data setelah diedit

        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $link = $_POST['link'];

        $query = "UPDATE tips SET judul = '$judul', isi = '$isi'
                  WHERE link = '$link'";
        $hasil = mysql_query($query);

        if ($hasil) echo "<p>Proses Update Sukses</p>";
        else echo "<p>Proses Update Gagal</p>";
     }

?><table border="1">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Isi</th>
    <th>Action</th>
</tr>

<?php

// bagian ini digunakan untuk menampilkan semua data

$no = 1;$query = "SELECT * FROM tips";
$hasil = mysql_query($query);

while ($data = mysql_fetch_array($hasil))
{
   echo "<tr>";
   echo "<td>".$no."</td>";
   echo "<td>".$data['judul']."</td>";
   echo "<td>".$data['isi']."</td>";
   echo "<td><a href=\"".$_SERVER['PHP_SELF'].
        "?op=edit&judul=".$data['judul']."\">Edit</a></td>";
   echo "</tr>";
   $no++;
}

?>
