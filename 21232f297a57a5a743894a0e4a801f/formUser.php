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




    <article class="box" id="home_featured21">
      <h1>User Kecamatan</h1>
                           <table border="0">
                            <form name="form1" method="post" action="">
                            <tr><td>Nama :</td>
                            	<td><input type="text" name="nama" required="required"></td></tr>
                            <tr><td>E-mail :</td>
                            	<td><input type="text" name="email" required="required"></td></tr>
                          	<tr><td> Kecamatan :</td>
                            	<td><input type="text" name="kecamatan" required="required"></td></tr>
                            <tr><td>Username :</td>
                            	<td><input type="text" name="username" required="required"></td></tr>
                            <tr><td>Password :</td>
                            	<td><input type="password" name="password" required="required"></td></tr>                          
                            <tr><td></td>
                            	<td><input type="submit" name="submit" value="Simpan"></td></tr>
                            </form>
                            </table>                            
                            <?php
                            //if ($submit) {
                            mysql_connect("localhost", "root", "");
                            mysql_select_db("dbolahraga");
                            if((isset($_POST['nama']))and(isset($_POST['email']))and(isset($_POST['kecamatan']))and(isset($_POST['username']))and(isset($_POST['password'])))
                            {
                                $nama=$_POST['nama'];
                                $email=$_POST['email'];
                                $kecamatan=$_POST['kecamatan'];
								$username=$_POST['username'];
                                $password=$_POST['password'];
                                $result = mysql_query("INSERT INTO petugas VALUES ('', '$nama', '$email', '$kecamatan', '$username', MD5('$password'))");
								?>
								<script language="javascript">
								alert("Terima Kasih, Anda berhasil memasukan 1 user untuk kecamatan !!");
								document.location="formUser.php";
								</script>
                                <?php
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
