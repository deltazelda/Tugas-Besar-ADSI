<!DOCTYPE html>
<title>Disbudparpora Sumedang</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<script src="scripts/elegant-press.js" type="text/javascript"></script>
<!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->
</head>
<body>
<div class="main-container">
  <header>
    <h1><a href="index.html">Disbudparpora</a></h1>
    <p id="tagline"><strong>Dinas Kebudayaan, Pariwisata, Pemuda dan Olahraga</strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Tel: +62 22 7273209 | Mail: <a href="mailto:disparbud@disparbud.jabarprov.go.id">disparbud@disparbud.jabarprov.go.id</a></p></div>
    <div class="tagline_right">

      <?php
	  $halaman = $_GET['halaman'];
	  ?>
    <form name="proses_cari" method="get" action="pagePencarian.php">
        <input type="hidden" name="halaman" value="<?php echo $halaman;?>" />
        <input type="hidden" name="page" value="1" />
        <input type="text" name="key" value="Pencarian&hellip;"   onfocus="if (this.value == 'Pencarian&hellip;') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Pencarian&hellip;';}" />
        <input type="submit" name="go" id="go" value="Search" />
    </form>

    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <?php
					include ('Lib/class koneksi.php');
					$koneksi = new koneksi();
					$koneksi->cekKoneksi();
					$key = $_GET['key'];	
                	if($halaman==1)
					{
						$cols = 6;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==2)
					{
						$cols = 6;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==3)
					{
						$cols = 6;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==4)
					{
						$cols = 5;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==5)
					{
						$cols = 5;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==6)
					{
						$cols = 4;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==7)
					{
						$cols = 4;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==8)
					{
						$cols = 4;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1" class="active">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					{
						echo "Halaman tidak ditemukan";
					}?>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">




    <article class="box" id="home_featured21">
       <?php
                        
	if($halaman == 1)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_atlet where Nama like '%$key%' or Cabang_Olahraga like '%$key%' or Kecamatan like '%$key%'";
	}else
	if($halaman == 2)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_sdm where Profesi='WASIT' and  Nama like '%$key%' or Klasifikasi like '%$key%' or Kecamatan like '%$key%' or Cabang_Olahraga like '%$key%'";
	}else
	if($halaman == 3)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_sdm where Profesi='PELATIH' and  Nama like '%$key%' or Klasifikasi like '%$key%' or Kecamatan like '%$key%' or Cabang_Olahraga like '%$key%'";
	}else
	if($halaman == 4)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_gor where nama_gedung like '%$key%' or cb_olahraga like '%$key%' or Kecamatan like '%$key%'";
	}else
	if($halaman == 5)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_sor where club like '%$key%' or cb_olahraga like '%$key%' or Kecamatan like '%$key%'";
	}else
	if($halaman == 6)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_prestasi_atlet where Nama like '%$key%' or Tahun like '%$key%' or Prestasi like '%$key%' or Tingkat like '%$key%'";
	}else
	if($halaman == 7)
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_prestasi_club where Nama like '%$key%' or Tahun like '%$key%' or Prestasi like '%$key%' or Tingkat like '%$key%'";
	}
	if($halaman == 8)
	{
		$query = "SELECT COUNT(*) AS jumData FROM petugas where nama like '%$key%' or email like '%$key%' or kecamatan like '%$key%' or user like '%$key%'";
	}
	$hasil  = mysql_query($query);
	$data   = mysql_fetch_array($hasil);
	
	$jumData = $data['jumData'];
	
	if(($jumData != 0) and ($key !=''))
	{
		echo "<table border='1'>";
		if($halaman==1)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Atlet</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama</b></center></td>
				<td width="50"><font color="#FFFFFF"><center><b>Jenis Kelamin</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Tempat Lahir</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Tanggal Lahir</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Cabang Olahraga</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Kecamatan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==2)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Wasit</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama</b></center></td>
				<td width="50"><font color="#FFFFFF"><center><b>Jenis Kelamin</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Pendidikan</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Klasifikasi</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Cabang Olahraga</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Kecamatan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==3)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Pelatih</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama</b></center></td>
				<td width="50"><font color="#FFFFFF"><center><b>Jenis Kelamin</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Pendidikan</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Klasifikasi</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Cabang Olahraga</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Kecamatan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==4)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Gedung Olahraga (GOR)</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Nama Gedung</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Cabang Olahraga</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Standar Sarana</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Alamat</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Kecamatan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==5)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Sarana Olahraga (SOR)</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama Club</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Cabang Olahraga</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Ketua</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Alamat</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Kecamatan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==6)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Prestasi Atlet</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama Atlet</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Prestasi</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Tahun</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Tingkat Kejuaraan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==7)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data Prestasi Club</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama Club</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Prestasi</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Tahun</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Tingkat Kejuaraan</b></center></td>
				</tr>
				<?php
			}else
			if($halaman==8)
			{
				?>
				<tr bgcolor="#517DAE">
				<h1 align="center" >Data User Kecamatan</h1><br>
				<td width="107"><font color="#FFFFFF"><center><b>Nama</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>E-mail</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Kecamatan</b></center></td>
				<td width="107"><font color="#FFFFFF"><center><b>Username</b></center></td>
				</tr>
				<?php
			}else
			{
				echo "Halaman tidak ditemukan";
			}
	
		$dataPerPage = 10;
		if(isset($_GET['page']))
		{
			$noPage = $_GET['page'];
		} 
		else $noPage = 1;
		$offset = ($noPage - 1) * $dataPerPage;
		if($halaman == 1)
		{
			$query = "SELECT * FROM t_atlet where Nama like '%$key%' or Cabang_Olahraga like '%$key%' or Kecamatan like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($halaman == 2)
		{
			$query = "SELECT * FROM t_sdm where Profesi='WASIT' and Nama like '%$key%' or Klasifikasi like '%$key%' or Kecamatan like '%$key%' or Cabang_Olahraga like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($halaman == 3)
		{
			$query = "SELECT * FROM t_sdm where Profesi='PELATIH' and Nama like '%$key%' or Klasifikasi like '%$key%' or Kecamatan like '%$key%' or Cabang_Olahraga like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($halaman == 4)
		{
			$query = "SELECT * FROM t_gor where nama_gedung like '%$key%' or cb_olahraga like '%$key%' or Kecamatan like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($halaman == 5)
		{
			$query = "SELECT * FROM t_sor where club like '%$key%' or cb_olahraga like '%$key%' or Kecamatan like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($halaman == 6)
		{
			$query = "SELECT * FROM t_prestasi_atlet where Nama like '%$key%' or Tahun like '%$key%' or Prestasi like '%$key%' or Tingkat like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($halaman == 7)
		{
			$query = "SELECT * FROM t_prestasi_club where Nama like '%$key%' or Tahun like '%$key%' or Prestasi like '%$key%' or Tingkat like '%$key%' LIMIT $offset, $dataPerPage";
		}
		if($halaman == 8)
		{
			$query = "SELECT * FROM petugas where nama like '%$key%' or email like '%$key%' or kecamatan like '%$key%' or user like '%$key%' LIMIT $offset, $dataPerPage";
		}
		$result = mysql_query($query) or die('Error');
		while($data = mysql_fetch_array($result))
		{
			echo "<tr>";
			if($halaman==1)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4].
				"</td><td>".$data[5]."</td><td>"	.$data[6]."</td></tr>";
			}else
			if($halaman==2)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4].
				"</td><td>".$data[7]."</td><td>"	.$data[9]."</td></tr>";
			}else
			if($halaman==3)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4].
				"</td><td>".$data[7]."</td><td>"	.$data[9]."</td></tr>";
			}else
			if($halaman==4)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[6].
				"</td><td>".$data[7]."</td></tr>";
			}else
			if($halaman==5)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[5].
				"</td><td>"	.$data[6]."</td></tr>";
			}else
			if($halaman==6)
			{
				echo "<td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
			}else
			if($halaman==7)
			{
				echo "<td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
			}else
			if($halaman==8)
			{
				echo "<td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td></tr>";
			}else
			{
				echo "Halaman tidak ditemukan";
			}
		}
	
		$jumPage = ceil($jumData/$dataPerPage);
		echo "<tr bgcolor='#517DAE'><td colspan=".$cols."><font color='#FFFFFF'>";
		if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";
		for($page = 1; $page <= $jumPage; $page++)
		{
				 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
				 {   
					//if (($noPage == 1) && ($page != 2))  echo "..."; 
					//if (($noPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
					if ($page == $noPage) echo " <b>".$page."</b> ";
					else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."&halaman=".$halaman."&key=".$key."'>".$page."</a> ";
					$showPage = $page;          
				 }
		}
		if ($noPage < $jumPage) 
			echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."&halaman=".$halaman."&key=".$key."'>
			<font color='#FFFFFF'>Next &gt;&gt;</font></a>";
		echo "</td></tr></table>";
		echo "</font></td></tr></table>";
	}else
	echo "Data yang anda cari tidak ada!";
	?>    	
</p>
                    </div>
                 </div>
                 <div id="sidebar">
                 	<div class="block_inside">
                    </div>
                 </div> 	
 </div>
<br /><br />
</div>
<div class="main-container">
 </div>
 
 <footer>
    <p class="tagline_left">Copyright &copy; 2012 - Disbudparpora Sumedang </p>
    <p class="tagline_right">Design by ADSI Kelompok 1</p>
    <br class="clear" />
  </footer>

<br />
<br />

    </body>
</html>
