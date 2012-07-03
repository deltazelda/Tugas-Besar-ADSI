<?php
	include ('../Lib/class koneksi.php');
								
	$koneksi = new koneksi();
	$koneksi->cekKoneksi();
	$tambah = $_POST['tambah'];
	
	if($tambah==1)
	{
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$tempat = $_POST['tempatLahir'];	
		$tanggal_lahir = $_POST['tgl_lahir'];
		$cabol = $_POST['cabol'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class Atlet.php');
		$atlet = new atlet();
		$atlet->nama = $nama;
		$atlet->jk = $jk;
		$atlet->tempat_lahir = $tempat;
		$atlet->tanggal_lahir = $tanggal_lahir;
		$atlet->cabang = $cabol;
		$atlet->kecamatan = $kecamatan;
		$atlet->tambah();
		
	}else
	if($tambah==2)
	{
		$nama = $_POST['nama'];
		$pdk = $_POST['pdk'];
		$klasifikasi = $_POST['klasifikasi'];
		$lis = $_POST['lis'];
		$beriLis = $_POST['beriLis'];
		$cabol = $_POST['cabol'];
		$profesi = $_POST['prof'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class SDM.php');
		$wasit = new sdm();
		$wasit->nama = $nama;
		$wasit->pendidikan = $pdk;
		$wasit->lisensi = $lis;
		$wasit->pemberi_lisensi = $beriLis;
		$wasit->cabang_olahraga = $cabol;
		$wasit->profesi = $profesi;
		$wasit->kecamatan = $kecamatan;
		$wasit->klasifikasi = $klasifikasi;
		$wasit->tambah_wasit();
	}else
	if($tambah==3)
	{
		$nama = $_POST['nama'];
		$pdk = $_POST['pdk'];
		$klasifikasi = $_POST['klasifikasi'];
		$lis = $_POST['lis'];
		$beriLis = $_POST['beriLis'];
		$cabol = $_POST['cabol'];
		$profesi = $_POST['prof'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class SDM.php');
		$pelatih = new sdm();
		$pelatih->nama = $nama;
		$pelatih->pendidikan = $pdk;
		$pelatih->lisensi = $lis;
		$pelatih->pemberi_lisensi = $beriLis;
		$pelatih->cabang_olahraga = $cabol;
		$pelatih->profesi = $profesi;
		$pelatih->kecamatan = $kecamatan;
		$pelatih->klasifikasi = $klasifikasi;
		$pelatih->tambah_pelatih();
	}else
	if($tambah==4)
	{
		$nama_gedung =$_POST['nama'];
		$cb_olahraga = $_POST['cabol'];
		$std_sarana = $_POST['std_sarana'];
		$status_kepemilikan =$_POST['status'];
		$no_registrasi=$_POST['noreg'];
		$alamat=$_POST['alamat'];
		$kecamatan=$_POST['kecamatan'];
		include ('../Lib/class gor.php');
		$gor = new gor();
		$gor->namaGedung = $nama_gedung;
		$gor->cabang = $cb_olahraga;
		$gor->standar = $std_sarana;
		$gor->status  = $status_kepemilikan;
		$gor->registrasi = $no_registrasi;
		$gor->alamat = $alamat;
		$gor->kecamatan = $kecamatan;
		$gor->tambah();
	}else
	if($tambah==5)
	{
		$nama = $_POST['nama'];
		$cabol = $_POST['cabol'];
		$ketua = $_POST['ketua'];
		$sekre = $_POST['sekretaris'];
		$alamat = $_POST['alamat'];
		$kecamatan = $_POST['kecamatan'];
		include ('../Lib/class club.php');
		$sor = new club();
		$sor->nama = $nama;
		$sor->cabang = $cabol;
		$sor->ketua = $ketua;
		$sor->sekretaris = $sekre;
		$sor->alamat = $alamat;
		$sor->kecamatan = $kecamatan;
		$sor->tambah();
	}else
	if($tambah==6)
	{
		include ('../Lib/class prestasiAtlet.php');
		$prestasiAtlet = new prestasiAtlet();
		$prestasiAtlet->id_atlet = $_POST['id_atlet'];
		$prestasiAtlet->nama = $_POST['nama'];
		$prestasiAtlet->prestasi = $_POST['prestasi'];
		$prestasiAtlet->tahun = $_POST['tahun'];
		$prestasiAtlet->tingkat = $_POST['tingkat'];
		$prestasiAtlet->tambah();
	}else
	if($tambah==7)
	{
		include ('../Lib/class prestasiClub.php');
		$prestasiClub = new prestasiClub();
		$prestasiClub->id_atlet = $_POST['id_club'];
		$prestasiClub->nama = $_POST['nama'];
		$prestasiClub->prestasi = $_POST['prestasi'];
		$prestasiClub->tahun = $_POST['tahun'];
		$prestasiClub->tingkat = $_POST['tingkat'];
		$prestasiClub->tambah();
	}else
	echo "ditolak";
?>

