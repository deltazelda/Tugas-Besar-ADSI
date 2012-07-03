<?php

	include ('../Lib/class koneksi.php');
								
	$koneksi = new koneksi();
	$koneksi->cekKoneksi();
	
	$id = $_GET['idDelete'];
	
	$sql = mysql_query("delete from berita where id='$id'") or die(mysql_error());
	if ($sql) 
	{
		header('location:berita.php');
	}
?>