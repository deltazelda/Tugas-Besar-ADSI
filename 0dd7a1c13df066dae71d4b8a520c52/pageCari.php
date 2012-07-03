<?php session_start();
if(!isset($_SESSION['id']))
{
	?>
	<script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="../4dm11n/login.php";
	</script>
	<?php
}
else{
	$id=$_SESSION['id'];
	$user=$_SESSION['user'];
	$kecamatan=$_SESSION['kecamatan'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Creatif</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
</head>

<body>
    <div id="main">
    	<div class="container">
        
        	<div id="header">
            
            	<ul id="menu">
                	<?php
					include ('../Lib/class koneksi.php');
					$koneksi = new koneksi();
					$koneksi->cekKoneksi();
					
					$field = $_GET['field'];
					$key = $_GET['key'];
					$halaman = $_GET['halaman'];
					$tabel = $_GET['t'];
					$statSDM = $_GET['statSDM'];
	
               		if($halaman==1)
					{
						$cols = 6;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1" class="active">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
                        <?php
					}else
					if($halaman==2)
					{
						$cols = 6;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1" class="active">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
                        <?php
					}else
					if($halaman==3)
					{
						$cols = 6;
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1" class="active">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
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
                        <li><a href="page.php?halaman=4&page=1" class="active">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
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
                        <li><a href="page.php?halaman=5&page=1" class="active">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
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
                        <li><a href="page.php?halaman=6&page=1" class="active">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
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
                        <li><a href="login/logout.php">Logout</a></li>
                        <?php
					}else
					{
						echo "Halaman tidak ditemukan";
					}?>
                	
                </ul>
                
            	<div>
                	<h1>Disbudparpora</h1>
                    <small>Dinas Budaya Pariwisata Pemuda dan Olahraga Sumedang</small>
                </div>
            
            </div>
            
            
            <div id="block_content">
            
            	<div id="content_area" class="block">
                    <div class="block_inside">
                     
                        <h4>Services</h4>                        	
    					<h2>Branding</h2>
                        <br />
                        <p>
	<?php

	if($statSDM == 'biasa')
	{
		$query = "SELECT COUNT(*) AS jumData FROM $tabel where Kecamatan='$kecamatan' and $field like '%$key%'";
	}else
	if($statSDM == 'WASIT')
	{
		$query = "SELECT COUNT(*) AS jumData FROM $tabel where Kecamatan='$kecamatan' and Profesi='WASIT' and $field like '%$key%'";
	}else
	if($statSDM == 'PELATIH')
	{
		$query = "SELECT COUNT(*) AS jumData FROM $tabel where Kecamatan='$kecamatan' and Profesi='PELATIH' and $field like '%$key%'";
	}else
	if($statSDM == 'prestasi_atlet')
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_prestasi_atlet, t_atlet where t_atlet.Id_atlet=t_prestasi_atlet.id_atlet and t_atlet.Kecamatan='$kecamatan'";
	}else
	if($statSDM == 'prestasi_club')
	{
		$query = "SELECT COUNT(*) AS jumData FROM t_prestasi_club, t_sor where t_sor.id_sor=t_prestasi_club.id_club and t_sor.Kecamatan='$kecamatan'";
	}
	$hasil  = mysql_query($query);
	$data     = mysql_fetch_array($hasil);
	
	$jumData = $data['jumData'];
	
	if(($jumData != 0) and ($key !=''))
	{
		echo "<table border='1'>";
		if($halaman==1)
						{
							?>
							<tr bgcolor="#517DAE">
							<h1 align="center" >Data Atlet</h1><br>
                            <td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
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
                            <td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
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
                            <td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
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
                            <td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
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
                            <td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
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
                            <td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
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
		if($statSDM == "biasa")
		{
			$query = "SELECT * FROM $tabel where Kecamatan='$kecamatan' and $field like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($statSDM == "WASIT")
		{
			$query = "SELECT * FROM $tabel where Kecamatan='$kecamatan' and Profesi='$statSDM' and $field like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($statSDM == "PELATIH")
		{
			$query = "SELECT * FROM $tabel where Kecamatan='$kecamatan' and Profesi='$statSDM' and $field like '%$key%' LIMIT $offset, $dataPerPage";
		}
		else
		if($statSDM == "prestasi_atlet")
		{
			$query = "SELECT * FROM t_prestasi_atlet, t_atlet where t_atlet.Id_atlet=t_prestasi_atlet.id_atlet and t_atlet.Kecamatan='$kecamatan' and $field like '%$key%' LIMIT $offset, $dataPerPage";
		}else
		if($statSDM == "prestasi_club")
		{
			$query = "SELECT * FROM t_prestasi_club, t_sor where t_sor.id_sor=t_prestasi_club.id_club and t_sor.Kecamatan='$kecamatan' and $field like '%$key%' LIMIT $offset, $dataPerPage";
		}
		else "data tidak ditemukan!";
		$result = mysql_query($query) or die('Error');
		while($data = mysql_fetch_array($result))
		{
			echo "<tr><td>
			<a href='formEdit.php?bag=$halaman&idEdit=".$data[0]."'>Edit</a> ||
			<a href='hapus.php?idDelete=".$data[0]."&bag=$halaman' onClick='return warning();'>Hapus</a>
			</td>";
			if($halaman==1)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td><td>"	.$data[6]."</td></tr>";
			}else
			if($halaman==2)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[7]."</td><td>"	.$data[9]."</td></tr>";
			}else
			if($halaman==3)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[7]."</td><td>"	.$data[9]."</td></tr>";
			}else
			if($halaman==4)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[6]."</td><td>".$data[7]."</td></tr>";
			}else
			if($halaman==5)
			{
				echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[5]."</td><td>"	.$data[6]."</td></tr>";
			}else
			if($halaman==6)
			{
				echo "<td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
			}else
			if($halaman==7)
			{
				echo "<td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
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
					else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."&halaman=1&field=".$field."&key=".$key."'>".$page."</a> ";
					$showPage = $page;          
				 }
		}
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."&halaman=".$halaman."&field=".$field."&key=".$key."'><font color='#FFFFFF'>Next &gt;&gt;</font></a>";
		if($halaman==1)
						{
							echo "</td><td><a href='formTambah.php?tambah=1'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						if($halaman==2)
						{
							echo "</td><td><a href='formTambah.php?tambah=2'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						if($halaman==3)
						{
							echo "</td><td><a href='formTambah.php?tambah=3'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						if($halaman==4)
						{
							echo "</td><td><a href='formTambah.php?tambah=4'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						if($halaman==5)
						{
							echo "</td><td><a href='formTambah.php?tambah=5'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						if($halaman==6)
						{
							echo "</td><td><a href='formTambah.php?tambah=6'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						if($halaman==7)
						{
							echo "</td><td><a href='formTambah.php?tambah=7'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
						}else
						{
							echo "Halaman tidak ditemukan";
						}
		echo "</font></td></tr></table>";
	}else
	echo "Data yang anda cari tidak ada!";
	?>
                            	
                        </p>
						
                        
                    </div>
                 </div>
                 <div id="sidebar">
     				<img src="../images/ribbon_navigation.png" class="ribbon" alt="Featured Project"/>
                 	<div class="block_inside">
                    
                    	<h3>Pencarian</h3>
                        <?php
                        	if($halaman==1)
							{
								include ('../Lib/class Atlet.php');
								$atlet = new atlet();
								$atlet->formCari();
							}else
							if($halaman==2)
							{
								include ('../Lib/class SDM.php');
								$sdm = new sdm();
								$sdm->formCari_wasit();
							}else
							if($halaman==3)
							{
								include ('../Lib/class SDM.php');
								$sdm2 = new sdm();
								$sdm2->formCari_pelatih();
							}else
							if($halaman==4)
							{
								include ('../Lib/class gor.php');
								$gor = new gor();
								$gor->formCari();
							}else
							if($halaman==5)
							{
								include ('../Lib/class club.php');
								$club = new club();
								$club->formCari();
							}else
							if($halaman==6)
							{
								include ('../Lib/class prestasiAtlet.php');
								$prestasi_atlet = new prestasiAtlet();
								$prestasi_atlet->formCari();
							}else
							if($halaman==7)
							{
								include ('../Lib/class prestasiClub.php');
								$prestasi_club = new prestasiClub();
								$prestasi_club->formCari();
							}else
							{
								echo "Halaman tidak ditemukan";
							}
                          ?>
                 	
                    </div>
                 </div>
                 
                 <!-- a Clearing DIV to clear the DIV's because overflow:auto doesn't work here -->
                 <div style="clear:both"></div>
                   
            </div>
            
            
            
            </div>
            
            
        </div>
    </div>

    <div id="footer">
    	<div class="container">
        
        	<div class="footer_column long">
                <h3>Designed by Collis Ta'eed, do with this as you please</h3>
                <p>You can read a photoshop tutorial for creating the design at <a href="http://psdtuts.com">PSDTUTS</a>, You can read a PS->HTML tutorial for creating the site at <a href="http://nettuts.com">NETTUTS</a> and you can learn how to turn the HTML into a Wordpress theme in the upcoming book <a href="http://freelanceswitch.com/book">How to be a Rockstar Wordpress Designer</a></p>
			</div>

	        <div class="footer_column">
                <h3>More Links</h3>
				<ul>
                    <li><a href="http://vectortuts.com">VECTORTUTS</a></li>
            		<li><a href="http://flashden.net">FlashDen</a></li>
            		<li><a href="http://audiojungle.net">AudioJungle</a></li>
            		<li><a href="http://freelanceswitch.com">FreelanceSwitch</a></li>
            		<li><a href="http://faveup.com">FaveUp</a></li>
                </ul>
            </div>
            
            <div class="footer_column">
                <h3>RSS</h3>
				<ul>
                    <li><a href="">RSS Feed</a></li>
            		<li><a href="">What is RSS?</a></li>
                </ul>
            </div>
        
        </div>
    </div>
</body>
</html>
<?php
}?>





