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
     <?php
				include ('Lib/class koneksi.php');
								
				$koneksi = new koneksi();
				$koneksi->cekKoneksi();
				
				$halaman = $_GET['halaman'];
				$page = $_GET['page'];
				?>
    <div class="tagline_right">
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
				
                	if($halaman==1)
					{
						?>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1" class="active">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="#">About</a></li>
                        <?php
					}else
					if($halaman==2)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1" class="active">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="#">About</a></li>
                        <?php
					}else
					if($halaman==3)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1" class="active">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="#">About</a></li>
                        <?php
					}else
					if($halaman==4)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1" class="active">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="#">About</a></li>
                        <?php
					}else
					if($halaman==5)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1" class="active">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="#">About</a></li>
                        <?php
					}else
					if($halaman==6)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1" class="active">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="">About</a></li>
                        <?php
					}else
					if($halaman==7)
					{
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
								$statSDM = 'biasa'; 
								if($page!=0)
								{
									if($halaman==1)
									{
										include ('Lib/class Atlet.php');
										$atlet = new atlet();
										$tabel = $atlet->tabel;
										$primer = 'Id_atlet';
									}else
									if($halaman==2)
									{
										include ('Lib/class SDM.php');
										$sdm = new sdm();
										$tabel = $sdm->tabel;
										$primer = 'id_profesi';
										$statSDM = 'WASIT'; 
									}else
									if($halaman==3)
									{
										include ('Lib/class SDM.php');
										$sdm2 = new sdm();
										$tabel = $sdm2->tabel;
										$primer = 'id_profesi';
										$statSDM = 'PELATIH'; 
									}else
									if($halaman==4)
									{
										include ('Lib/class gor.php');
										$gor = new gor();
										$tabel = $gor->tabel;
										$primer = 'id_gor'; 
									}else
									if($halaman==5)
									{
										include ('Lib/class club.php');
										$club = new club();
										$tabel = $club->tabel;
										$primer = 'id_sor';
									}else
									if($halaman==6)
									{
										include ('Lib/class prestasiAtlet.php');
										$prestasi_atlet = new prestasiAtlet();
										$tabel = $prestasi_atlet->tabel;
										$primer = 'id_atlet';
									}else
									if($halaman==7)
									{
										include ('Lib/class prestasiClub.php');
										$prestasi_club = new prestasiClub();
										$tabel = $prestasi_club->tabel;
										$primer = 'id_club';
									}else
									{
										echo "Halaman tidak ditemukan";
									}
								}else
								{
									echo "Halaman tidak ditemukan";
								}
								
                        
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
		if($statSDM == 'biasa')
		{
			$query = "SELECT * FROM $tabel order by $primer LIMIT $offset, $dataPerPage";
		}else
		if($statSDM == 'WASIT')
		{
			$query = "SELECT * FROM $tabel where Profesi='WASIT' order by $primer LIMIT $offset, $dataPerPage";
		}else
		if($statSDM == 'PELATIH')
		{
			$query = "SELECT * FROM $tabel where Profesi='PELATIH' order by $primer LIMIT $offset, $dataPerPage";
		}
		$result = mysql_query($query) or die('Error');
		while($data = mysql_fetch_array($result))
		{
			if($halaman==1)
			{
				echo "<tr><td><a href='page.php?id_atlet_prestasi=".$data[0]."&page=".$page."&halaman=".$halaman."'  style='color:#7f7d78'>".$data[1]."</a></td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td><td>"	.$data[6]."</td></tr>";
			}else
			if($halaman==2)
			{
				echo "<tr><td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[7]."</td><td>"	.$data[9]."</td></tr>";
			}else
			if($halaman==3)
			{
				echo "<tr><td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[7]."</td><td>"	.$data[9]."</td></tr>";
			}else
			if($halaman==4)
			{
				echo "<tr><td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[6]."</td><td>".$data[7]."</td></tr>";
			}else
			if($halaman==5)
			{
				echo "<tr><td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[5]."</td><td>"	.$data[6]."</td></tr>";
			}else
			if($halaman==6)
			{
				echo "<tr><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
			}else
			if($halaman==7)
			{
				echo "<tr><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
			}else
			{
				echo "Halaman tidak ditemukan";
			}
		}
		if($halaman == 1)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_atlet";
		}else
		if($halaman == 2)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_sdm where Profesi='WASIT'";
		}else
		if($halaman == 3)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_sdm where Profesi='PELATIH'";
		}else
		if($halaman == 4)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_gor";
		}else
		if($halaman == 5)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_sor";
		}else
		if($halaman == 6)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_prestasi_atlet";
		}else
		if($halaman == 7)
		{
			$query = "SELECT COUNT(*) AS jumData FROM t_prestasi_club";
		}
		if($halaman == 7)
		{
			$query = "SELECT COUNT(*) AS jumData FROM petugas";
		}
		
		$hasil  = mysql_query($query);
		$data     = mysql_fetch_array($hasil);
		$jumData = $data['jumData'];
		$jumPage = ceil($jumData/$dataPerPage);
		echo "<tr bgcolor='#517DAE'><td colspan=6><font color='#FFFFFF'>";
		if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";
		for($page = 1; $page <= $jumPage; $page++)
		{
			 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
			 {   
				//if (($noPage == 1) && ($page != 2))  echo "..."; 
				//if (($noPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
				if ($page == $noPage) echo " <b>".$page."</b> ";
				else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."&halaman=".$halaman."'>".$page."</a> ";
				$showPage = $page;          
			 }
		}
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."&halaman=".$halaman."'><font color='#FFFFFF'>Next &gt;&gt;</font></a>";
		echo "</td></tr></table>";
		?>
                            	
                        </p>
						
                        
                    </div>
                 </div>

                    
                    	
    </article>
    
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
