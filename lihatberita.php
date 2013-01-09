<html>
<body>
<?php
include "config.php";
mysql_select_db("ifishing");  
//get the value from form update
 $nama = $_GET['judul_berita']; //get the no which will deleted

//query for update data in database
 $query = "select JUDUL_BERITA, ISI_BERITA, FOTO_BERITA from berita WHERE judul_berita = '$nama'" ;
 $hasil = mysql_query($query);
 //see the result
 include'berita.php';
 $data = mysql_fetch_row ($hasil){?>
    	<div class="row">
              <li class="span4">
                <div class="thumbnail">
                  <img src="<?php echo $data[2];?>" width="500" height="400">
                  <div class="caption">
                    <h3><?php echo $data[1];?> <a href="lihatberita.php?judul_berita=<? echo $data[1];?>" ></a></h3>
                    <p><?php echo $data[0];?></p>
                    <p><a href="editberita.html" class="btn btn-primary" name="hapus" id="hapus">Edit</a> <a href="hapusberita.php" class="btn">Hapus</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
</body>
</html>