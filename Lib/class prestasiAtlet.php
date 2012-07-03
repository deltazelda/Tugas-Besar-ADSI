<?php
class prestasiAtlet
{
	public $id; 
	public $id_atlet;
	public $nama;
	public $prestasi;
	public $tahun;
	public $tingkat;
	public $tabel = 't_prestasi_atlet';
	
	function tambah() 
    {
		$sql="INSERT INTO t_prestasi_atlet (id_prestasi, id_atlet, Nama, Prestasi, Tahun, Tingkat)   VALUES ('', '$this->id_atlet', '$this->nama',  '$this->prestasi',  '$this->tahun',  '$this->tingkat')";
		
		$eksekusi_query = mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		} 
		else
		{
			header('location:page.php?page=1&halaman=6');
		}
    }
	function edit()
	{
		$sql = mysql_query("update t_prestasi_atlet set id_atlet='$this->id_atlet', Nama='$this->nama', Prestasi='$this->prestasi', Tahun='$this->tahun', Tingkat='$this->tingkat' where id_prestasi='$this->id'") or die(mysql_error());

		if (sql) 
		{
			header('location:page.php?page=1&halaman=6');
		}
	}
	function hapus()
	{
		$sql = mysql_query("delete from t_prestasi_atlet where id_prestasi='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			header('location:page.php?page=1&halaman=6');
		}
	}	
		
	function tampil_admin()
	{
		?>
		<table border='1'>
		<tr bgcolor="#517DAE">
		<h1 align="center" >Data Prestasi Atlet</h1><br>
		<td width="107"><font color="#FFFFFF"><center><b>Opsi</b></center></td>
      	<td width="107"><font color="#FFFFFF"><center><b>Nama Atlet</b></center></td>
	  	<td width="107"><font color="#FFFFFF"><center><b>Prestasi</b></center></td>
	  	<td width="107"><font color="#FFFFFF"><center><b>Tahun</b></center></td>
	  	<td width="107"><font color="#FFFFFF"><center><b>Tingkat Kejuaraan</b></center></td>
   		</tr>
        <?php
		$dataPerPage = 10;
		if(isset($_GET['page']))
		{
			$noPage = $_GET['page'];
		} 
		else $noPage = 1;
		$offset = ($noPage - 1) * $dataPerPage;
		$query = "SELECT * FROM t_prestasi_atlet order by Id_atlet LIMIT $offset, $dataPerPage";
		$result = mysql_query($query) or die('Error');
		while($data = mysql_fetch_array($result))
		{
			echo "<tr><td>
			<a href='formEdit.php?id_atlet=".$data[0]."&bag=1'>Edit</a> ||
			<a href='hapus.php?id_atlet=".$data[0]."&bag=1' onClick='return warning();'>Hapus</a>
			</td>";
	   		echo "<td>".$data[1]."</td><td><center>".$data[2]."</center></td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td><td>"	.$data[6]."</td></tr>";
		}
		$query   = "SELECT COUNT(*) AS jumData FROM t_prestasi_atlet";
		$hasil  = mysql_query($query);
		$data     = mysql_fetch_array($hasil);
		$jumData = $data['jumData'];
		$jumPage = ceil($jumData/$dataPerPage);
		echo "<tr bgcolor='#517DAE'><td colspan=6><font color='#FFFFFF'>";
		if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";
		for($page = 1; $page <= $jumPage; $page++)
		{
			 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
			 {   
				//if (($noPage == 1) && ($page != 2))  echo "..."; 
				//if (($noPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
				if ($page == $noPage) echo " <b>".$page."</b> ";
				else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."&halaman=1'>".$page."</a> ";
				$showPage = $page;          
			 }
		}
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."&halaman=1'><font color='#FFFFFF'>Next &gt;&gt;</font></a>";
		echo "</td><td><a href='formTambah.php?tambah=1'><font color='#FFFFFF'>Tambah</font></a></td></tr></table>";
	}
	function formCari()
	{
		?>
		<form name="proses_cari" method="get" action="pageCari.php">
        <input type="hidden" name="halaman" value="6" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_prestasi_atlet" />
        <input type="hidden" name="statSDM" value="prestasi_atlet" />
        <table border="0">
        <tr>
        <td>Field</td>
        <td>
            <select name="field">
                <option value="Nama">Nama</option>
                <option value="Prestasi">Prestasi</option>
                <option value="Tahun">Tahun</option>
                <option value="Tingkat">Tingkat</option>
            </select>
        </td>
        <tr><td>Kata Kunci</td><td><input type="text" name="key" /></td></tr>
        <tr><td><input type="submit" value="Cari" /></td></tr>
        </table>
        </form>
        <?php
	}
}
?>
