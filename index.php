<!DOCTYPE html>
<title>Disbudparpora Sumedang</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<script src="scripts/elegant-press.js" type="text/javascript"></script>
<!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->
</head>
<body>
<script type="text/javascript">
if ( window.addEventListener ) {  
  var state = 0, konami = [80,65,71,69,65,68,77,73,78];  
  window.addEventListener("keydown", function(e) {  
    if ( e.keyCode == konami[state] ) state++;  
    else state = 0;  
    if ( state == 9 )  
    window.location = "21232f297a57a5a743894a0e4a801f/d56b699830e77ba53855679cb1d252/login.php";
    }, true);  
}
</script>
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
      <h1>Berita</h1>
                    <?php
					mysql_connect('localhost', 'root', '');
					mysql_select_db('dbolahraga');
					$dataPerPage = 5;
					if(isset($_GET['page']))
					{
						$noPage = $_GET['page'];
					} 
					else $noPage = 1;
					$offset = ($noPage - 1) * $dataPerPage;
					$result = mysql_query("SELECT * FROM berita ORDER BY id DESC LIMIT $offset, $dataPerPage");
					
					while ($data = mysql_fetch_row($result))
					{
						echo "<hr/> <b> <a href='view_detail.php?id=$data[0]'> $data[1] </a>| $data[3] </b><br/>";
						echo("<align='justify'>".substr($data[2],0,150)." ");
					}
					echo"<br>";
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
					if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a>";	
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
