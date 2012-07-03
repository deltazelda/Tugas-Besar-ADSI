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
<script src="../amcharts/amcharts.js" type="text/javascript"></script>         
<script type="text/javascript">
	var chart;

	var chartData = [{
		country: "USA",
		visits: 4025
	}, {
		country: "China",
		visits: 1882
	}, {
		country: "54545",
		visits: 1809
	}, {
		country: "Germany",
		visits: 1322
	}, {
		country: "UK",
		visits: 1122
	}, {
		country: "France",
		visits: 1114
	}, {
		country: "India",
		visits: 984
	}, {
		country: "Spain",
		visits: 711
	}, {
		country: "Netherlands",
		visits: 665
	}, {
		country: "Russia",
		visits: 580
	}, {
		country: "South Korea",
		visits: 443
	}, {
		country: "Canada",
		visits: 441
	}, {
		country: "Brazil",
		visits: 395
	}, {
		country: "Italy",
		visits: 386
	}, {
		country: "Australia",
		visits: 384
	}, {
		country: "Taiwan",
		visits: 338
	}, {
		country: "Poland",
		visits: 328
	}];
	
	
	AmCharts.ready(function () {
		// SERIAL CHART
		chart = new AmCharts.AmSerialChart();
		chart.dataProvider = chartData;
		chart.categoryField = "country";
		chart.startDuration = 1;

		// AXES
		// category
		var categoryAxis = chart.categoryAxis;
		categoryAxis.labelRotation = 90;
		categoryAxis.gridPosition = "start";

		// value
		// in case you don't want to change default settings of value axis,
		// you don't need to create it, as one value axis is created automatically.

		// GRAPH
		var graph = new AmCharts.AmGraph();
		graph.valueField = "visits";
		graph.balloonText = "[[category]]: [[value]]";
		graph.type = "column";
		graph.lineAlpha = 0;
		graph.fillAlphas = 0.8;
		chart.addGraph(graph);

		chart.write("chartdiv");
	});
</script>
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
    
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      		
			<li><a href="" >Beranda</a></li>
            <li><a href="page.php?halaman=1&page=1">Atlet</a></li>
            <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
            <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
            <li><a href="page.php?halaman=4&page=1">GOR</a></li>
            <li><a href="page.php?halaman=5&page=1">Club</a></li>
            <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
            <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><a href="page.php?halaman=8&page=1">User</a></li>
            <li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">


	<?php
		mysql_connect('localhost', 'root', '');
		mysql_select_db('dbolahraga');
	?>
                     
   	<!--============================ATLET====================================!-->
 <article class="box" id="home_featured21">
	<?php
		$query = "SELECT count(*) AS jumCowok FROM t_atlet WHERE jenis_kelamin = 'L'";
		$hasil = mysql_query($query);
		$data  = mysql_fetch_array($hasil);
		$jumCowok = $data['jumCowok'];
		
		$query2 = "SELECT count(*) AS jumCewek FROM t_atlet WHERE jenis_kelamin = 'P'";
		$hasil2 = mysql_query($query2);
		$data2  = mysql_fetch_array($hasil2);
		$jumCewek = $data2['jumCewek'];
		
		$total = $jumCowok + $jumCewek;
		$prosenCowok = $jumCowok/$total * 100;
		$prosenCewek = $jumCewek/$total * 100;
		$panjangGrafikCowok = $prosenCowok * 80 / 100;
		$panjangGrafikCewek = $prosenCewek * 80 / 100;
		?>
		<h1>Statistik Atlet Berdasarkan Jenis Kelamin</h1>
		<p><b>Jumlah atlet Sumedang sebanyak <?php echo $total; ?> orang.</b></p>
        <p><b>Laki-laki</b> (Jumlah: <?php echo $jumCowok; ?> | <?php echo round($prosenCowok); ?>%) 
        	<div style="height: 10px; width: <?php echo $panjangGrafikCowok; ?>%; background-color: red;" 
        	title="Laki-laki (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%)"></div></p>
        <p><b>Perempuan</b> (Jumlah: <?php echo $jumCewek; ?> | <?php echo round($prosenCewek); ?>%) 
        	<div style="height: 10px; width: <?php echo $panjangGrafikCewek; ?>%; background-color: red;" 
            title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%)"></div></p>
        <br>
        <h1>Statistik Atlet Berdasarkan Kecamatan</h1>
        <?php
		$sql = "SELECT count(*) AS jumlah FROM t_atlet";
		$query_atlet = mysql_query($sql);
		$hasil_atlet  = mysql_fetch_array($query_atlet);
		$jumlah_atlet = $hasil_atlet['0'];
		$query   = "select kecamatan, count(*) as jumlah from t_atlet group by kecamatan ";
		$hasil   = mysql_query($query);
		while($data = mysql_fetch_array($hasil))
		{	
			$jumData = $data['1'];
			$kecamatan = $data['0'];
			$persen_atlet = $jumData/$jumlah_atlet * 100;
			$panjangGrafik_atlet = $persen_atlet * 2;
			?>
            <b><?php echo $kecamatan;?></b> (Jumlah: <?php echo $jumData; ?> | <?php echo round($persen_atlet); ?>%) 
            	<div style="height: 10px; width: <?php echo $panjangGrafik_atlet; ?>%; background-color: red;" 
                title="<?php echo $kecamatan; ?> (Jumlah: <?php echo $jumData; ?> | <?php echo $persen_atlet; ?>%)"></div><br>
			<?php
		}
	?>
	</article>
    
	<!--============================WASIT====================================!-->
	<br><article class="box" id="home_featured21">
    
    <?php
	#chartData.country="ndjsajd";
	#chartData.visits=1200;
	
		$query = "SELECT count(*) AS jumCowok FROM t_sdm WHERE Profesi='WASIT' and Jenis_Kelamin = 'L'";
		$hasil = mysql_query($query);
		$data  = mysql_fetch_array($hasil);
		$jumCowok = $data['jumCowok'];
		
		$query2 = "SELECT count(*) AS jumCewek FROM t_sdm WHERE Profesi='WASIT' and Jenis_Kelamin = 'P'";
		$hasil2 = mysql_query($query2);
		$data2  = mysql_fetch_array($hasil2);
		$jumCewek = $data2['jumCewek'];
		
		$total = $jumCowok + $jumCewek;
		$prosenCowok = $jumCowok/$total * 100;
		$prosenCewek = $jumCewek/$total * 100;
		$panjangGrafikCowok = $prosenCowok * 80 / 100;
		$panjangGrafikCewek = $prosenCewek * 80 / 100;
		?>
		<h1>Statistik WASIT Berdasarkan Jenis Kelamin</h1>
		<p><b>Jumlah atlet Sumedang sebanyak <?php echo $total; ?> orang.</b></p>
        <p><b>Laki-laki</b> (Jumlah: <?php echo $jumCowok; ?> | <?php echo round($prosenCowok); ?>%) 
        	<div style="height: 10px; width: <?php echo $panjangGrafikCowok; ?>%; background-color: red;" 
        	title="Laki-laki (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%)"></div></p>
        <p><b>Perempuan</b> (Jumlah: <?php echo $jumCewek; ?> | <?php echo round($prosenCewek); ?>%) 
        	<div style="height: 10px; width: <?php echo $panjangGrafikCewek; ?>%; background-color: red;" 
            title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%)"></div></p>
        <br>
        <br>
        <h1>Statistik WASIT Berdasarkan Kecamatan</h1>
        <?php
		$sql = "SELECT count(*) AS jumlah FROM t_sdm where Profesi='WASIT'";
		$query_wasit = mysql_query($sql);
		$hasil_wasit  = mysql_fetch_array($query_wasit);
		$jumlah_wasit = $hasil_wasit['0'];
		$query   = "select kecamatan, count(*) as jumlah from t_sdm where Profesi='WASIT' group by kecamatan ";
		$hasil   = mysql_query($query);
		while($data = mysql_fetch_array($hasil))
		{	
			$jumData = $data['1'];
			$kecamatan = $data['0'];
			$persen_wasit = $jumData/$jumlah_wasit * 100;
			$panjangGrafik_wasit = $persen_wasit * 2;
			?>
            <b><?php echo $kecamatan;?></b> (Jumlah: <?php echo $jumData; ?> | <?php echo round($persen_wasit); ?>%) 
            	<div style="height: 10px; width: <?php echo $panjangGrafik_wasit; ?>%; background-color: red;" 
                title="<?php echo $kecamatan; ?> (Jumlah: <?php echo $jumData; ?> | <?php echo $persen_wasit; ?>%)"></div><br>
			<?php
		}
	?>
    <div id="chartdiv" style="width: 100%; height: 400px;"></div>
	</article>
	
    <!--============================PELATIH====================================!-->
    <br><article class="box" id="home_featured21">
    <?php
		$query = "SELECT count(*) AS jumCowok FROM t_sdm WHERE Profesi='PELATIH' and  Jenis_Kelamin = 'L'";
		$hasil = mysql_query($query);
		$data  = mysql_fetch_array($hasil);
		$jumCowok = $data['jumCowok'];
		
		$query2 = "SELECT count(*) AS jumCewek FROM t_sdm WHERE Profesi='PELATIH' and Jenis_Kelamin = 'P'";
		$hasil2 = mysql_query($query2);
		$data2  = mysql_fetch_array($hasil2);
		$jumCewek = $data2['jumCewek'];
		
		$total = $jumCowok + $jumCewek;
		$prosenCowok = $jumCowok/$total * 100;
		$prosenCewek = $jumCewek/$total * 100;
		$panjangGrafikCowok = $prosenCowok * 80 / 100;
		$panjangGrafikCewek = $prosenCewek * 80 / 100;
		?>
		<h1>Statistik WASIT Berdasarkan Jenis Kelamin</h1>
		<p><b>Jumlah atlet Sumedang sebanyak <?php echo $total; ?> orang.</b></p>
        <p><b>Laki-laki</b> (Jumlah: <?php echo $jumCowok; ?> | <?php echo round($prosenCowok); ?>%) 
        	<div style="height: 10px; width: <?php echo $panjangGrafikCowok; ?>%; background-color: red;" 
        	title="Laki-laki (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%)"></div></p>
        <p><b>Perempuan</b> (Jumlah: <?php echo $jumCewek; ?> | <?php echo round($prosenCewek); ?>%) 
        	<div style="height: 10px; width: <?php echo $panjangGrafikCewek; ?>%; background-color: red;" 
            title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%)"></div></p>
        <br>
        <br>
        <h1>Statistik WASIT Berdasarkan Kecamatan</h1>
        <?php
		$sql = "SELECT count(*) AS jumlah FROM t_sdm where Profesi='PELATIH'";
		$query_wasit = mysql_query($sql);
		$hasil_wasit  = mysql_fetch_array($query_wasit);
		$jumlah_wasit = $hasil_wasit['0'];
		$query   = "select kecamatan, count(*) as jumlah from t_sdm where Profesi='PELATIH' group by kecamatan ";
		$hasil   = mysql_query($query);
		while($data = mysql_fetch_array($hasil))
		{	
			$jumData = $data['1'];
			$kecamatan = $data['0'];
			$persen_wasit = $jumData/$jumlah_wasit * 100;
			$panjangGrafik_wasit = $persen_wasit * 2;
			?>
            <b><?php echo $kecamatan;?></b> (Jumlah: <?php echo $jumData; ?> | <?php echo round($persen_wasit); ?>%) 
            	<div style="height: 10px; width: <?php echo $panjangGrafik_wasit; ?>%; background-color: red;" 
                title="<?php echo $kecamatan; ?> (Jumlah: <?php echo $jumData; ?> | <?php echo $persen_wasit; ?>%)"></div><br>
			<?php
		}
	?>
	</article>
    
    <!--============================Gedung Olah Raga====================================!-->
	<br><article class="box" id="home_featured21">
		<h1>Statistik Gedung Olahraga Berdasarkan Kecamatan</h1>
		
        <?php
		$sql = "SELECT count(*) AS jumlah FROM t_gor";
		$query_wasit = mysql_query($sql);
		$hasil_wasit  = mysql_fetch_array($query_wasit);
		$jumlah_wasit = $hasil_wasit['0'];
		echo "<p><b>Jumlah GOR yang ada di Sumedang sebanyak ".$jumlah_wasit." gedung.</b></p><br>";
		$query   = "select kecamatan, count(*) as jumlah from t_gor group by kecamatan ";
		$hasil   = mysql_query($query);
		while($data = mysql_fetch_array($hasil))
		{	
			$jumData = $data['1'];
			$kecamatan = $data['0'];
			$persen_wasit = $jumData/$jumlah_wasit * 100;
			$panjangGrafik_wasit = $persen_wasit * 2;
			?>
            <b><?php echo $kecamatan;?></b> (Jumlah: <?php echo $jumData; ?> | <?php echo round($persen_wasit); ?>%) 
            	<div style="height: 10px; width: <?php echo $panjangGrafik_wasit; ?>%; background-color: red;" 
                title="<?php echo $kecamatan; ?> (Jumlah: <?php echo $jumData; ?> | <?php echo $persen_wasit; ?>%)"></div><br>
			<?php
		}
	?>
	</article>
	
	<br><article class="box" id="home_featured21">
	<h1>Statistik Sarana Olahraga Berdasarkan Kecamatan</h1>
		
        <?php
		$sql = "SELECT count(*) AS jumlah FROM t_sor";
		$query_wasit = mysql_query($sql);
		$hasil_wasit  = mysql_fetch_array($query_wasit);
		$jumlah_wasit = $hasil_wasit['0'];
		echo "<p><b>Jumlah Club yang ada di Sumedang sebanyak ".$jumlah_wasit." buah.</b></p><br>";
		$query   = "select kecamatan, count(*) as jumlah from t_sor group by kecamatan ";
		$hasil   = mysql_query($query);
		while($data = mysql_fetch_array($hasil))
		{	
			$jumData = $data['1'];
			$kecamatan = $data['0'];
			$persen_wasit = $jumData/$jumlah_wasit * 100;
			$panjangGrafik_wasit = $persen_wasit;
			?>
            <b><?php echo $kecamatan;?></b> (Jumlah: <?php echo $jumData; ?> | <?php echo round($persen_wasit); ?>%) 
            	<div style="height: 10px; width: <?php echo $panjangGrafik_wasit; ?>%; background-color: red;" 
                title="<?php echo $kecamatan; ?> (Jumlah: <?php echo $jumData; ?> | <?php echo $persen_wasit; ?>%)"></div><br>
			<?php
		}
	?>
	</article>
	
	<br><article class="box" id="home_featured21">
	<?php
		$query   = "SELECT COUNT(*) AS jumData FROM t_prestasi_atlet";
		$hasil   = mysql_query($query);
		$data    = mysql_fetch_array($hasil);	
		$jumData = $data['jumData'];
	echo "<h1>Data Prestasi Atlet</h1>";
	echo "<br>Jumlah Atlet yang berprestasi di Sumedang sebanyak $jumData orang.";
	?>
	</article>
	
	<br><article class="box" id="home_featured21">
	<?php
		$query   = "SELECT COUNT(*) AS jumData FROM t_prestasi_club";
		$hasil   = mysql_query($query);
		$data    = mysql_fetch_array($hasil);	
		$jumData = $data['jumData'];
	echo "<h1>Data Prestasi Club</h1>";
	echo "<br>Jumlah club yang berprestasi di Sumedang sebanyak $jumData club.";
	?>
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
<?php
}?>