<?php
	include ('../Lib/class koneksi.php');
								
	$koneksi = new koneksi();
	$koneksi->cekKoneksi();
	
	$edit = $_POST['edit'];
	
	if($edit==1)
	{
		include ('../Lib/class Atlet.php');
		$atlet = new atlet();
		$atlet->id = $_POST['id_atlet'];
		$atlet->nama = $_POST['nama'];
		$atlet->jk = $_POST['jk'];
		$atlet->tempat_lahir = $_POST['tempatLahir'];
		$atlet->tanggal_lahir = $_POST['tanggalLahir'];
		$atlet->cabang = $_POST['cabol'];
		$atlet->kecamatan = $_POST['kecamatan'];
		$atlet->edit();
		
	}else
	if($edit==2)
	{
		include ('../Lib/class SDM.php');
		$wasit = new sdm();
		$wasit->id = $_POST['id_wasit'];
		$wasit->nama = $_POST['nama'];
		$wasit->jk = $_POST['jk'];
		$wasit->pendidikan = $_POST['pdk'];
		$wasit->lisensi = $_POST['lis'];
		$wasit->pemberi_lisensi = $_POST['beriLis'];
		$wasit->cabang_olahraga = $_POST['cabol'];
		$wasit->profesi = $_POST['prof'];
		$wasit->kecamatan = $_POST['kecamatan'];
		$wasit->klasifikasi = $_POST['klasifikasi'];
		$wasit->edit_wasit();
	}else
	if($edit==3)
	{
		include ('../Lib/class SDM.php');
		$pelatih = new sdm();
		$pelatih->id = $_POST['id_pelatih'];
		$pelatih->nama = $_POST['nama'];
		$pelatih->jk = $_POST['jk'];
		$pelatih->pendidikan = $_POST['pdk'];
		$pelatih->lisensi = $_POST['lis'];
		$pelatih->pemberi_lisensi = $_POST['beriLis'];
		$pelatih->cabang_olahraga = $_POST['cabol'];
		$pelatih->profesi = $_POST['prof'];
		$pelatih->kecamatan = $_POST['kecamatan'];
		$pelatih->klasifikasi = $_POST['klasifikasi'];
		$pelatih->edit_pelatih();
	}else
	if($edit==4)
	{
		include ('../Lib/class gor.php');
		$gor = new gor();
		$gor->id = $_POST['id_gor'];
		$gor->namaGedung = $_POST['nama'];
		$gor->cabang = $_POST['cabol'];
		$gor->standar = $_POST['std_sarana'];
		$gor->status  = $_POST['status'];
		$gor->registrasi = $_POST['noreg'];
		$gor->alamat = $_POST['alamat'];
		$gor->kecamatan = $_POST['kecamatan'];
		$gor->edit();
	}else
	if($edit==5)
	{
		include ('../Lib/class club.php');
		$sor = new club();
		$sor->id = $_POST['id_sor'];
		$sor->nama = $_POST['nama'];
		$sor->cabang = $_POST['cabol'];
		$sor->ketua = $_POST['ketua'];
		$sor->sekretaris = $_POST['sekretaris'];
		$sor->alamat = $_POST['alamat'];
		$sor->kecamatan = $_POST['kecamatan'];
		$sor->edit();
	}else
	if($edit==6)
	{
		include ('../Lib/class prestasiAtlet.php');
		$prestasiAtlet = new prestasiAtlet();
		$prestasiAtlet->id = $_POST['id_prestasi'];
		$prestasiAtlet->id_atlet = $_POST['id_atlet'];
		$prestasiAtlet->nama = $_POST['nama'];
		$prestasiAtlet->prestasi = $_POST['prestasi'];
		$prestasiAtlet->tahun = $_POST['tahun'];
		$prestasiAtlet->tingkat = $_POST['tingkat'];
		$prestasiAtlet->edit();
	}else
	if($edit==7)
	{
		include ('../Lib/class prestasiClub.php');
		$prestasiClub = new prestasiClub();
		$prestasiClub->id = $_POST['id_prestasi'];
		$prestasiClub->id_club = $_POST['id_club'];
		$prestasiClub->nama = $_POST['nama'];
		$prestasiClub->prestasi = $_POST['prestasi'];
		$prestasiClub->tahun = $_POST['tahun'];
		$prestasiClub->tingkat = $_POST['tingkat'];
		$prestasiClub->edit();
	}else
	echo "ditolak";
?>

