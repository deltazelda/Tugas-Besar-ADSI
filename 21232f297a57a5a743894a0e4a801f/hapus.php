<?php
	$bag = $_GET['bag'];
	include ('../Lib/class koneksi.php');
								
	$koneksi = new koneksi();
	$koneksi->cekKoneksi();
	
	$id = $_GET['idDelete'];
	
	if($bag==1)
	{
		include ('../Lib/class Atlet.php');
		$atlet = new atlet();
		$atlet->id = $id;
		$atlet->hapus();
	}else
	if($bag==2)
	{
		include ('../Lib/class SDM.php');
		$wasit = new sdm();
		$wasit->id = $id;
		$wasit->hapus_wasit();
	}else
	if($bag==3)
	{
		include ('../Lib/class SDM.php');
		$pelatih = new sdm();
		$pelatih->id = $id;
		$pelatih->hapus_pelatih();
	}else
	if($bag==4)
	{
		include ('../Lib/class gor.php');
		$gor = new gor();
		$gor->id = $id;
		$gor->hapus();
	}else
	if($bag==5)
	{
		include ('../Lib/class club.php');
		$club = new club();
		$club->id = $id;
		$club->hapus();
	}else
	if($bag==6)
	{
		include ('../Lib/class prestasiAtlet.php');
		$prestasiAtlet = new prestasiAtlet();
		$prestasiAtlet->id = $id;
		$prestasiAtlet->hapus();
	}else
	if($bag==7)
	{
		include ('../Lib/class prestasiClub.php');
		$prestasiClub = new prestasiClub();
		$prestasiClub->id = $id;
		$prestasiClub->hapus();
	}else
	echo "ditolak";
?>