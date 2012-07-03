<!DOCTYPE html>
<title>Disbudparpora Sumedang</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<script src="scripts/elegant-press.js" type="text/javascript"></script>
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
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"   onfocus="if (this.value == 'Search Our Website&hellip;') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Our Website&hellip;';}" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      		
			<li><a href="" class="active">Beranda</a></li>
			<li><a href="page.php?halaman=1&amp;page=1">Atlet</a></li>
			<li><a href="page.php?halaman=2&amp;page=1">Wasit</a></li>
			<li><a href="page.php?halaman=3&amp;page=1">Pelatih</a></li>
			<li><a href="page.php?halaman=4&amp;page=1">GOR</a></li>
			<li><a href="page.php?halaman=5&amp;page=1">Club</a></li>
			<li><a href="page.php?halaman=6&page=1">Prestasi Atlet</a></li>
			<li><a href="page.php?halaman=7&page=1">Prestasi Club</a></li>
			<li><a href="about.php">About</a></li>	
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">
  <div id="mySlides">
    <div id="slide1">    
        <img src="images/badminton.jpg" alt="Slide 1 jFlow Plus" />
        <span><b class="slideheading">Bulutangkis</b></span>
	</div>    	
    <div id="slide2">
        <img src="images/silat.jpg" alt="Slide 2 jFlow Plus" />
        <span><b class="slideheading">Pencak Silat</b></span>
    </div>   
	<div id="slide3">
        <img src="images/bola.jpg" alt="Slide 3 jFlow Plus" />
        <span><b class="slideheading">Sepak Bola</b></span>
    </div>
	<div id="slide4">
        <img src="images/sepeda.jpg" alt="Slide 4 jFlow Plus" />
        <span><b class="slideheading">Sepeda</b></span>
    </div>
</div>

<div id="myController">
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
</div>

<section class="jFlowPrev"><div></div></section>
<section class="jFlowNext"><div></div></section>
<br />
<br />

    <article class="box" id="home_featured21">
      <table width="550" border="0" align="center">
							<?php
								mysql_connect("localhost","root","") or die("Gagal Konek Ke Server".mysql_error());
								mysql_select_db("dbolahraga") or die ("Gagal Konek Ke Database".mysql_error());
								$kode_artikel = $_GET['id'];
								$sql = mysql_query("SELECT id AS kode_artikel, judul, isi, tanggal"." FROM berita WHERE id='$kode_artikel' ");
								while ($data=mysql_fetch_row($sql)) {
								echo "<tr><td>$data[1] | $data[3]</td></tr><tr><td align='justify'>$data[2]</td></tr>";
								
								echo "<tr><td><a href=index.php>kembali</a></td></tr>";
								}
							?>
						</table>
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
