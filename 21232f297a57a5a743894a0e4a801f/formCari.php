<?php
	$bag = $_GET['bag'];
	include ('../Lib/class koneksi.php');
								
	$koneksi = new koneksi();
	$koneksi->cekKoneksi();
	$cari = $_POST['cari'];
	
	if($cari==1)
	{
		$nama = $_POST['nama'];
		$cabol = $_POST['cb_olahraga'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class Atlet.php');
		$atlet = new atlet();
		$atlet->nama = $nama;
		$atlet->cabang = $cabol;
		$atlet->kecamatan = $kecamatan;
		$atlet->cari();
		
	}else
	if($cari==2)
	{
		$nama = $_POST['nama'];
		$pdk = $_POST['pdk'];
		$cabol = $_POST['cabol'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class SDM.php');
		$wasit = new sdm();
		$wasit->nama = $nama;
		$wasit->pendidikan = $pdk;
		$wasit->cabang_olahraga = $cabol;
		$wasit->kecamatan = $kecamatan;
		$wasit->cari();
	}else
	if($cari==3)
	{
		$nama = $_POST['nama'];
		$pdk = $_POST['pdk'];
		$cabol = $_POST['cabol'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class SDM.php');
		$pelatih = new sdm();
		$pelatih->nama = $nama;
		$pelatih->pendidikan = $pdk;
		$pelatih->cabang_olahraga = $cabol;
		$pelatih->kecamatan = $kecamatan;
		$pelatih->cari();
	}else
	if($cari==4)
	{
		$nama_gedung =$_POST['nama'];
		$cb_olahraga = $_POST['cabol'];
		$alamat=$_POST['alamat'];
		$kecamatan=$_POST['kecamatan'];
		include ('../Lib/class gor.php');
		$gor = new gor();
		$gor->namaGedung = $nama_gedung;
		$gor->cabang = $cb_olahraga;
		$gor->alamat = $alamat;
		$gor->kecamatan = $kecamatan;
		$gor->cari();
	}else
	if($cari==5)
	{
		$nama = $_POST['nama'];
		$cabol = $_POST['cabol'];
		$alamat = $_POST['alamat'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class club.php');
		$sor = new club();
		$sor->nama = $nama;
		$sor->cabang = $cabol;
		$sor->alamat = $alamat;
		$sor->kecamatan = $kecamatan;
		$sor->cari();
	}else
	echo "ditolak";
?>