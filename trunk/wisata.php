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
//file form insert dan edit
$host  ="localhost";
$user ="root";
$pwd ="";
$db_name ="ifishing";
$tbl_name ="wp";

$conn = @mysql_connect ($host, $user, $pwd)
or die ("Koneksi Gagal, karena " . mysql_error());
mysql_select_db("$db_name")or die("cannot select database");

$sql = "SELECT nama,tanggal,waktu,isi,link FROM wp";
$exec = mysql_query($sql) or die(mysql_error());
?>
<link href="View/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="View/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link  href="View/bootstrap/js/bootstrap.min.js" rel="stylesheet"/>
<script type="text/javascript" src="View/bootstrap/js/jquery-latest.js"></script>
</head>

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
		<!--<a href=\"".$_SERVER['PHP_SELF']."?op=edit&nama=".$data['nama']."\">Edit</a>-->
		<td><a href="editwp.php?op=edit&nama=<?php echo $res[0]; ?>">Edit</a> | <a href="delete.php?nama=<?php echo $res[0];?>" onClick="show_alert()"> Del </a></td>
	<?php
		}
	?>
	
</table>

<br>
			<div>
					
				<form method="post" action="tambahwisata.html">
					<button class="btn btn-primary" type="submit">Tambah wisata pancing</button>
				</form>
			</div>
		</br>
			
		</div>
		</div>
		</div>
		<aside>
	<ul>
		<br>
		<p><img src="logo.png" width="250" height="150"></img>
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
	</div>				
</aside>

		<div class="clearfix"></div>
	</div>

</div>
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

<script src="js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
</html>
