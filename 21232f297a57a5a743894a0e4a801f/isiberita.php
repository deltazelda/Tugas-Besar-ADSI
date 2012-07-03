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

                	<li><a href="index.php">Beranda</a></li>
                	<li><a href="page.php?halaman=1&amp;page=1">Atlet</a></li>
                    <li><a href="page.php?halaman=2&amp;page=1">Wasit</a></li>
                    <li><a href="page.php?halaman=3&amp;page=1">Pelatih</a></li>
                    <li><a href="page.php?halaman=4&amp;page=1">GOR</a></li>
                    <li><a href="page.php?halaman=5&amp;page=1">Club</a></li>
                	<li><a href="page.php?halaman=6&amp;page=1">Prestasi Atlet</a></li>
                    <li><a href="page.php?halaman=7&amp;page=1">Prestasi Club</a></li>
					<li><a href="" class="active">Berita</a></li>
                    <li><a href="formUser.php">User</a></li>
                	<li><a href="login/logout.php">Logout</a></li>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">




    <article class="box" id="home_featured21">
      <h1>Tambah Berita</h1>
                    <form name="form1" method="post" action="">
                            Judul :
                            <input type="text" name="judul">
                            <br>
                            isi :<br>
                            <textarea name="isi" cols="45" rows="10"></textarea>
                            <br>
                            <input type="submit" name="submit" value="Simpan">
                            <input type="reset" name="reset" value="Batal">
                            </form>
                            
                            <?php
                            //if ($submit) {
                            mysql_connect("localhost", "root", "");
                            mysql_select_db("dbolahraga");
                            if((isset($_POST['judul']))and(isset($_POST['isi'])))
                            {
                                $judul=$_POST['judul'];
                                $isi=$_POST['isi'];
                                $result = mysql_query("INSERT INTO berita VALUES ('', '$judul', '$isi',NOW() )");
								header("location: berita.php");
                            }                                                        
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
