<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location: home.php');
	exit;
}
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tips dan Trik</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
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
			<div><img src="img/logo.png" width="250" height="150" align="right">
			</div>
		</div>
</div>
<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/slide1.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slide2.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slide3.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
                    </div>
                  </div>
				  <div class="item">
                    <img src="img/slide4.png" width="1800" height="50" alt="">
                    <div class="carousel-caption">
                      <h4>Ifishing</h4>
                      <p>"Trust us to be your fishing partner"</p>
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
						<li>
							<a href="homepage.html">Home</a>
						</li>
						<li><a href="profil.php">Profile</a></li>
						<li class="Dropdown">
						<a class="Dropdown" id="drop1" role="button" data-toggle="dropdown" href="#">Event 
						<b class="caret"></b></a>
						<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
						<li><a tabindex="-1" href="lomba.php">Perlombaan</a></li>
						<li><a tabindex="-1" href="berita.html">Berita</a></li>
						<li class="active"><a tabindex="-1" href="tipsdantrik.html">Tips and Trik</a></li>
						</ul>
              </li>
						<li><a href="wisata.php">Wisata Pancing</a></li>
						<li><a href="w.html">About I-Fishing</a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>

				</div>
				<legend>Wisata Pancing</legend>
<!--<div class="container-fluid">
<div class="row-fluid">
    <div class="span12">-->
<?php
	include 'config.php'; 
    mysql_select_db("ifishing");  
 
	//get the value from form update
	$nama = $_GET['JUDUL_TIPSTRIK']; //get the no which will deleted
	//var_dump($nama);
	//query for update data in database
    $tampil = "SELECT JUDUL_TIPSTRIK,TANGGAL_TIPS,WAKTU_TIPS,ISI_TIPSTRIK,GAMBARTIPS 
	FROM TIPS_TRIK where JUDUL_TIPSTRIK = '$nama'"; 
	$hasil = mysql_query($tampil);
	while ($data = mysql_fetch_row ($hasil)){
	?> <br>
	<div class="row">
	<div class="span2">
	<tr>
				<td><img src="<?php echo $data[4];?>" width="150" height="50"></td>
			</tr>
	</div>
			 <div class="span5">
			 <tr>
				<td><th>Judul TIPS DAN TRIK     : </th> <td><?php echo $data[0]?></td>
			</tr>
			</br>
			<br>
				<td><th>Tanggal  : </th> <td><?php echo $data[1]?></td>
			</tr>
			</br>
			<br>
			<tr>
				<td><th>Waktu    : </th> <td><?php echo $data[2]?></td>
			</tr>
			</br>
			<br>
				<td><th>Deskripsi TIPS DAN TRIK : </th> <td><?php echo $data[5]?></td>
			</tr>
			</br>
			 <br></br>
			 <br></br>
	<?php
	 $no++; ?>  </div></div><?php
	}?>
	 
	 	
	</div>
    </div>
	</div>
    </div>
	
	</div>
		</div>
<aside>
	<ul>
	<ul>
	<br>
	<br><br>
	<div class="row-fluid">
		 <div class="span2 offset4">
			</div>
		
		<br>
		<p><img src="logo.png" width="250" height="150"
		  <BR>
		  <address>
		    <strong>Komunitas Pemancingan</strong><br>
					  Sukolilo <br>
					  Surabaya, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
		  </address>
					 
					<address>
					<strong>apa</strong><br>
					  <a href="mailto:#">i-fishing@gmail.com</a>
					</address>
		</br>
			
	</ul>
	</ul>
	</div>				

</div>
</div>
	</aside>
</div>
</body>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'random',
			directionNavHide: false,
			pauseOnHover: true,
			captionOpacity: 1,
			prevText: '<',
			nextText: '>'
		});
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
</html>
