<html>
<head>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TambahBerita</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
<link rel="stylesheet" href="css/nivo-slider.css" media="screen">
<link rel="stylesheet" href="css/futurico-theme.css" media="screen">
</head>
<meta name="robots" content="noindex,follow" />

<body>
<div class="hero row">
		<div class="hero-container">
		<div class="action pull-right"><img src="img/logo.png" width="350" height="250"></img>
			</div>
			<div class="span6">
				<h2>Website Pemancingan Terintegrasi</h2>
				<h6>"Trust us to be your fishing partner"</h6>
			</div>
		</div>
	</div>


<div id="content">
	<div class="wrapper">

		<div id="main">
			<div class="mode">
				 <div class="bs-docs-example">
					<ul class="nav nav-pills">
						<li class="active">
							<a href="homepage.html">Home</a>
						</li>
						<li><a href="profile.html">Profile</a></li>
						<li class="Dropdown">
						<a class="Dropdown" id="drop1" role="button" data-toggle="dropdown" href="#">Event 
						<b class="caret"></b></a>
						<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
						<li><a tabindex="-1" href="lomba.html">Perlombaan</a></li>
						<li><a tabindex="-1" href="#">Berita</a></li>
						<li><a tabindex="-1" href="#">Tips and Trik</a></li>
						</ul>
              </li>
						<li><a href="wp.php">Wisata Pancing</a></li>
						<li><a href="w.html">About I-Fishing</a></li>
					</ul>

				</div>
				
			</div>
			<hr class="bs-docs-separator">
<!--<div class="container-fluid">
<div class="row-fluid">
    <div class="span12">-->
	<?php  
    include 'config.php'; 
    mysql_select_db("ifishing");  
    // Langkah 1	 tentukan batas, cek halaman & posisi data  
    $batas = 4;   
  if(isset($_GET['halaman'])) {
					$halaman = $_GET['halaman'];
					$posisi = ($halaman - 1) * $batas;
				}
				else {
					$posisi = 1;
					$halaman = 1;
				} 
  
    // Langkah 2 Sesuaikan perintah SQL 
	$batas=$batas+1;
    $tampil = "SELECT JUDUL_BERITA, ISI_BERITA, FOTO_BERITA FROM berita LIMIT $posisi, $batas";  
    $hasil = mysql_query($tampil);
	while ($data = mysql_fetch_row (($hasil))){
	$no = $posisi +1 ;
	?>
              <li class="span3">
                <div class="thumbnail">
                  <img src="<?php echo $data[2];?>" width="500" height="400">
                  <div class="caption">
                    <h3><?php echo $data[1];?></h3>
                    <p><?php echo $data[0];?></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
		  </div>
		  <?php
    $no++; 	
    
	}
	 
	 // Langkah 3 hitung total data dan halaman  
    $tampil2 = mysql_query("SELECT JUDUL_PERLOMBAAN, TANGGAL_LOMBA, WAKTU_LOMBA, TEMPAT_LOMBA, GAMBAR_LOMBA FROM perlombaan ");
    $jmlData = mysql_num_rows($tampil2);  
    $jmlHal = ceil($jmlData/$batas);  
	//Link ke halaman sebelumnya (Prev)  
    if ($halaman > 1){  
        $prev = $halaman - 1;  
        echo "<a href=$_SERVER[PHP_SELF]?halaman=$prev << Prev </a>";  
    }  else {  
        echo "<center> << Prev";  
    }  
  
    //Tampilkan link halaman 1,2,3,...  
    for($i=1;$i<=$jmlHal;$i++){  
        if ($i != $halaman){  
            echo "<a href=$_SERVER[PHP_SELF]?halaman=$i>| $i | </a>";  
        }  else {  
            echo " $i ";  
        }  
    }  
  
    //Link ke halaman berikutnya (Next)  
    if ($halaman < $jmlHal){  
        $next = $halaman + 1;  
        echo "<a href=$_SERVER[PHP_SELF]?halaman=$next> | Next >></a>";  
    }else{  
        echo "Next >> </center>";  
    }  
?>
	 
	 	
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
