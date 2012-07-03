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
</head>
<body>

<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Selamat Bekerja Admin..</div>
    
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      		
			<li><a href="isiberita.php">Berita</a></li>
			<li><a href="page.php?halaman=1&amp;page=1">Atlet</a></li>
			<li><a href="page.php?halaman=2&amp;page=1">Wasit</a></li>
			<li><a href="page.php?halaman=3&amp;page=1">Pelatih</a></li>
			<li><a href="page.php?halaman=4&amp;page=1">GOR</a></li>
			<li><a href="page.php?halaman=5&amp;page=1">Club</a></li>
			<li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
			<li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
			<li><a href="d56b699830e77ba53855679cb1d252/logout.php">Logout</a></li>	
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">
<br />
    <article class="box" id="home_featured21">
	<?php
		mysql_connect('localhost', 'root', '');
		mysql_select_db('dbolahraga');
		$query   = "SELECT COUNT(*) AS jumData FROM berita";
		$hasil   = mysql_query($query);
		$data    = mysql_fetch_array($hasil);	
		$jumData = $data['jumData'];					
	echo "<h1>Data Berita</h1>";
	echo "<br>Jumlah berita yang ada sebanyak $jumData buah.";
	?>
	</article>
	<br><article class="box" id="home_featured21">
	
	 <?php
        mysql_connect("localhost","root","") or die("Gagal Konek Ke Server".mysql_error());
        mysql_select_db("dbolahraga") or die ("Gagal Konek Ke Database".mysql_error());
        $kode_artikel = $_GET['id'];
        $judul_artikel = $_GET['judul'];
        echo "<h1>".$judul_artikel."</h1>";
        $sql = mysql_query("SELECT id AS kode_artikel, judul, isi, tanggal"." FROM berita WHERE id='$kode_artikel' ");
        while ($data=mysql_fetch_row($sql)) 
        {
            echo "<tr><td><font color='#000000'>$data[1] </font> | $data[3]</td><td><a href='hapusBerita.php?idDelete=".$data[0]."'>X</a></td></tr><tr><td>$data[2]</td></tr>";
            echo "<br><br><tr><td><a href=berita.php>kembali</a></td></tr>";
        }
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