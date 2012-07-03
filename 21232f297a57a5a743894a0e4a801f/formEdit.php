<?php session_start();
if(!isset($_SESSION['id']))
{
	?>
	<script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="../index.php";
	</script>
	<?php
}
else{
	$id=$_SESSION['id'];
	$user=$_SESSION['user'];
?>

<!DOCTYPE html>
<title>Disbudparpora Sumedang</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../styles/elegant-press.css" type="text/css" />
<script src="../scripts/elegant-press.js" type="text/javascript"></script>
<!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->

<script type="text/javascript" src="ui.datepicker.js"></script>
    <script type="text/javascript" src="ui.datepicker-id.js"></script>
	<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>
<link type="text/css" href="base/ui.all.css" rel="stylesheet" /> 

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
  	$bag = $_GET['bag'];
  	?>

    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <?php
                	if($bag==1)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
                        <li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==2)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==3)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==4)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==5)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==6)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==7)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="page.php?halaman=8&page=1">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
                        <?php
					}else
					if($bag==8)
					{
						?>
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
                        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
                        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
                        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
                        <li><a href="page.php?halaman=5&page=1">Club</a></li>
                        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
                        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="">User</a></li>
        				<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
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

						include ('../Lib/class koneksi.php');
								
						$koneksi = new koneksi();
						$koneksi->cekKoneksi();
						
						$id = $_GET['idEdit'];
												
						if($bag==1)
						{
							$query = mysql_query("select * from t_atlet where Id_atlet='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Atlet</h2>
							<form name="Edit_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_atlet" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=1 />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required" value="<?php echo $data['Nama']; ?>" /></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><select name="jk">
                                		<?php
											if($data['Jenis_Kelamin']=='L')
											{
												?>
												<option value="L" selected>Laki-laki</option>
                                       			<option value="P">Perempuan</option>
                                                <?php
											}else
											if($data['Jenis_Kelamin']=='P')
											{
												?>
												<option value="L">Laki-laki</option>
                                       			<option value="P" selected>Perempuan</option>
                                                <?php
											}
										?>
                                		
                                    </select></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Tempat Lahir</td>
								<td>:</td>
								<td><input type="text" name="tempatLahir" maxlength="100" value="<?php echo $data['Tempat_Lahir']; ?>"></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td>:</td>
								<td>
								<input type="text" id="tanggal" name="tanggalLahir" maxlength="100" value="<?php echo $data['Tanggal_Lahir']; ?>"/>
								</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Cabang Olahraga</td>
								<td>:</td>
								<td><input type="text" name="cabol" required="required" value="<?php echo $data['Cabang_Olahraga']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Kecamatan</td>
								<td>:</td>
								<td><input type="text" name="kecamatan" maxlength="30" required="required" value="<?php echo $data['Kecamatan']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						if($bag==2)
						{
							$query = mysql_query("select * from t_sdm where id_profesi='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Wasit</h2>
							<form name="input_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_wasit" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=2 />
                            <input type="hidden" name="page" value="<?php echo $page; ?>" />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required"  value="<?php echo $data['Nama']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><select name="jk">
                                		<?php
											if($data['Jenis_Kelamin']=='L')
											{
												?>
												<option value="L" selected>Laki-laki</option>
                                       			<option value="P">Perempuan</option>
                                                <?php
											}else
											if($data['Jenis_Kelamin']=='P')
											{
												?>
												<option value="L">Laki-laki</option>
                                       			<option value="P" selected>Perempuan</option>
                                                <?php
											}
										?>
                                		
                                    </select></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Pendidikan</td>
								<td>:</td>
								<td><input type="text" name="pdk" maxlength="10" required="required"  value="<?php echo $data['Pendidikan']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Klasifikasi</td>
								<td>:</td>
								<td><input type="text" name="klasifikasi" maxlength="20" value="<?php echo $data['Klasifikasi']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Lisensi</td>
								<td>:</td>
								<td><input type="text" name="lis" maxlength="20" value="<?php echo $data['Lisensi']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Pemberi Lisensi</td>
								<td>:</td>
								<td><input type="text" name="beriLis" maxlength="20" value="<?php echo $data['Pemberi_Lisensi']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Cabang Olahraga</td>
								<td>:</td>
								<td><input type="text" name="cabol" maxlength="20" required="required"  value="<?php echo $data['Cabang_Olahraga']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Profesi</td>
								<td>:</td>
								<td><select name="prof">
                                		<?php
											if($data['Profesi']=='WASIT')
											{
												?>
												<option value="WASIT" selected>Wasit</option>
                                       			<option value="PELATIH">Pelatih/Pembina</option>
                                                <?php
											}else
											if($data['Profesi']=='PELATIH')
											{
												?>
												<option value="WASIT">Wasit</option>
                                       			<option value="PELATIH" selected>Pelatih/Pembina</option>
                                                <?php
											}
										?>
                                    </select>
                                </td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Kecamatan</td>
								<td>:</td>
								<td><input type="text" name="kecamatan" maxlength="30" required="required"  value="<?php echo $data['Kecamatan']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						if($bag==3)
						{
							$query = mysql_query("select * from t_sdm where id_profesi='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Pelatih atau Pembina</h2>
							<form name="input_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_pelatih" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=3 />
                            <input type="hidden" name="page" value="<?php echo $page; ?>" />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required"  value="<?php echo $data['Nama']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><select name="jk">
                                		<?php
											if($data['Jenis_Kelamin']=='L')
											{
												?>
												<option value="L" selected>Laki-laki</option>
                                       			<option value="P">Perempuan</option>
                                                <?php
											}else
											if($data['Jenis_Kelamin']=='P')
											{
												?>
												<option value="L">Laki-laki</option>
                                       			<option value="P" selected>Perempuan</option>
                                                <?php
											}
										?>
                                    	</select>
                                      </td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Pendidikan</td>
								<td>:</td>
								<td><input type="text" name="pdk" maxlength="10" required="required"  value="<?php echo $data['Pendidikan']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Klasifikasi</td>
								<td>:</td>
								<td><input type="text" name="klasifikasi" maxlength="20" value="<?php echo $data['Klasifikasi']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Lisensi</td>
								<td>:</td>
								<td><input type="text" name="lis" maxlength="20" value="<?php echo $data['Lisensi']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Pemberi Lisensi</td>
								<td>:</td>
								<td><input type="text" name="beriLis" maxlength="20" value="<?php echo $data['Pemberi_Lisensi']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Cabang Olahraga</td>
								<td>:</td>
								<td><input type="text" name="cabol" maxlength="20" required="required"  value="<?php echo $data['Cabang_Olahraga']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Profesi</td>
								<td>:</td>
								<td><select name="prof">
                                		<?php
											if($data['Profesi']=='WASIT')
											{
												?>
												<option value="WASIT" selected>Wasit</option>
                                       			<option value="PELATIH">Pelatih/Pembina</option>
                                                <?php
											}else
											if($data['Profesi']=='PELATIH')
											{
												?>
												<option value="WASIT">Wasit</option>
                                       			<option value="PELATIH" selected>Pelatih/Pembina</option>
                                                <?php
											}
										?>
                                    </select></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Kecamatan</td>
								<td>:</td>
								<td><input type="text" name="kecamatan" maxlength="30" required="required"  value="<?php echo $data['Kecamatan']; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						if($bag==4)
						{
							$query = mysql_query("select * from t_gor Where id_gor='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Gedung Olahraga (GOR)</h2>
							<form name="input_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_gor" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=4 />
                            <input type="hidden" name="page" value="<?php echo $page; ?>" />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Nama Gedung</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required"  value="<?php echo $data[1]; ?>" /></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Cabang Olahraga</td>
								<td>:</td>
								<td><input type="text" name="cabol" maxlength="40" required="required"  value="<?php echo $data[2]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Standar Sarana</td>
								<td>:</td>
								<td><input type="text" name="std_sarana" maxlength="100" required="required"  value="<?php echo $data[3]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Status Kepemilikan</td>
								<td>:</td>
								<td><input type="text" name="status" maxlength="100"  value="<?php echo $data[4]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>No. Registrasi</td>
								<td>:</td>
								<td><input type="text" name="noreg" value="<?php echo $data[5]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><textarea name="alamat" ><?php echo $data[6]; ?></textarea>
								</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Kecamatan</td>
								<td>:</td>
								<td><input type="text" name="kecamatan" maxlength="30" required="required"  value="<?php echo $data[7]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						if($bag==5)
						{
							$query = mysql_query("select * from t_sor Where id_sor='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Sarana Olahraga (SOR)</h2>
							<form name="input_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_sor" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=5 />
                            <input type="hidden" name="page" value="<?php echo $page; ?>" />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Nama CLub</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required"  value="<?php echo $data[1]; ?>" /></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Cabang Olahraga</td>
								<td>:</td>
								<td><input type="text" name="cabol" maxlength="40" required="required"  value="<?php echo $data[2]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Ketua</td>
								<td>:</td>
								<td><input type="text" name="ketua" maxlength="100" required="required"  value="<?php echo $data[3]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Sekretaris</td>
								<td>:</td>
								<td><input type="text" name="sekretaris" maxlength="100"  value="<?php echo $data[4]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><textarea name="alamat"><?php echo $data[5]; ?></textarea>
								</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Kecamatan</td>
								<td>:</td>
								<td><input type="text" name="kecamatan" maxlength="30" required="required"  value="<?php echo $data[6]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						if($bag==6)
						{
							$query = mysql_query("select * from t_prestasi_atlet Where id_prestasi='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Prestasi Atlet</h2>
							<form name="input_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_prestasi" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=6 />
                            <input type="hidden" name="page" value="<?php echo $page; ?>" />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Id Atlet</td>
								<td>:</td>
								<td><input type="text" name="id_atlet" maxlength="20" required="required"   value="<?php echo $data[1]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required"   value="<?php echo $data[2]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Prestasi</td>
								<td>:</td>
								<td><input type="text" name="prestasi" maxlength="100" required="required"   value="<?php echo $data[3]; ?>" /></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Tahun</td>
								<td>:</td>
								<td><input type="text" name="tahun" maxlength="100"   value="<?php echo $data[4]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
                            <tr>
								<td>Tingkat</td>
								<td>:</td>
								<td><input type="text" name="tingkat" maxlength="100"   value="<?php echo $data[5]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						if($bag==7)
						{
							$query = mysql_query("select * from t_prestasi_club Where id_prestasi='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <h2>Ubah Data Prestasi Club</h2>
							<form name="input_data" action="prosesEdit.php" method="post">
							<input type="hidden" name="id_prestasi" value="<?php echo $id; ?>" />
							<input type="hidden" name="edit" value=7 />
                            <input type="hidden" name="page" value="<?php echo $page; ?>" />
							<table border="0" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td>Id Club</td>
								<td>:</td>
								<td><input type="text" name="id_club" maxlength="20" required="required"   value="<?php echo $data[1]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama" maxlength="40" required="required"   value="<?php echo $data[2]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Prestasi</td>
								<td>:</td>
								<td><input type="text" name="prestasi" maxlength="100" required="required"   value="<?php echo $data[3]; ?>" /></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Tahun</td>
								<td>:</td>
								<td><input type="text" name="tahun" maxlength="100"   value="<?php echo $data[4]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
                            <tr>
								<td>Tingkat</td>
								<td>:</td>
								<td><input type="text" name="tingkat" maxlength="100"   value="<?php echo $data[5]; ?>"/></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php
						}else
						echo "ditolak";
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
<?php
}?>
