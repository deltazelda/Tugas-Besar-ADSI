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
  <header>
    <h1><a href="index.html">Disbudparpora</a></h1>
    <p id="tagline"><strong>Dinas Kebudayaan, Pariwisata, Pemuda dan Olahraga</strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Tel: +62 22 7273209 | Mail: <a href="mailto:disparbud@disparbud.jabarprov.go.id">disparbud@disparbud.jabarprov.go.id</a></p></div>
    <div class="tagline_right">

    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
        <li><a href="index.php" >Beranda</a></li>
        <li><a href="page.php?halaman=1&page=1" class="active">Atlet</a></li>
        <li><a href="page.php?halaman=2&page=1">Wasit</a></li>
        <li><a href="page.php?halaman=3&page=1">Pelatih</a></li>
        <li><a href="page.php?halaman=4&page=1">GOR</a></li>
        <li><a href="page.php?halaman=5&page=1">Club</a></li>
        <li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
        <li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
        <li><a href="">Berita</a></li>
        <li><a href="page.php?halaman=8&page=1">User</a></li>
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
	echo "<table border='0'><tr><td><h1>Data Berita</h1></td><td><a href='isiberita.php'>Tambah Berita</a></td><tr>";
	echo "<tr><td>Jumlah berita yang ada sebanyak $jumData buah.</td></tr></table>";
	?>
	</article>
                     
   
    
	
	
	<br><article class="box" id="home_featured21">
	<h1>Berita</h1>
                    <?php
					include ('../Lib/class koneksi.php');
								
					$koneksi = new koneksi();
					$koneksi->cekKoneksi();
					$dataPerPage = 10;
					if(isset($_GET['page']))
					{
						$noPage = $_GET['page'];
					} 
					else $noPage = 1;
					$offset = ($noPage - 1) * $dataPerPage;
					$result = mysql_query("SELECT * FROM berita ORDER BY id DESC LIMIT $offset, $dataPerPage");
					?>
                    <table border="0">
                    <?php
					while ($data = mysql_fetch_row($result))
					{
						echo "<tr><td>";
						echo "<hr/> <b><font color='#000000'> $data[1]</font> | $data[3] </b><br/>";
						echo "</td><td><a href='hapusBerita.php?idDelete=".$data[0]."'>X</a></td></tr><tr><td colspan=2>";
						echo("".substr($data[2],0,150)." <a href='detail_berita.php?id=$data[0]&judul=$data[1]'><h7><i>Baca Selengkapnya</i></h7></a>");
						echo "</td></tr>";
					}
					echo"<br></table>";
					$query   = "SELECT COUNT(*) AS jumData FROM berita";
					$hasil  = mysql_query($query);
					$data     = mysql_fetch_array($hasil);
	
					$jumData = $data['jumData'];
					$jumPage = ceil($jumData/$dataPerPage);
					if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";
					for($page = 1; $page <= $jumPage; $page++)
					{
						if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
						{   
							if ($page == $noPage) echo " <b>".$page."</b> ";
							else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
							$showPage = $page;          
						}
					}
					if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;";
					
					
					
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