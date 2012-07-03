<?php
class prestasiClub
{
	public $id; 
	public $id_club;
	public $nama;
	public $prestasi;
	public $tahun;
	public $tingkat;
	public $tabel = 't_prestasi_club';
	
	function tambah() 
    {
		$sql="INSERT INTO t_prestasi_club (id_prestasi, id_club, Nama, Prestasi, Tahun, Tingkat)   VALUES ('', '$this->id_atlet', '$this->nama',  '$this->prestasi',  '$this->tahun',  '$this->tingkat')";
		
		$eksekusi_query = mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		} 
		else
		{
			header('location:page.php?page=1&halaman=7');
		}
    }
	function edit()
	{
		$sql = mysql_query("update t_prestasi_club set id_club='$this->id_club', Nama='$this->nama', Prestasi='$this->prestasi', Tahun='$this->tahun', Tingkat='$this->tingkat' where id_prestasi='$this->id'") or die(mysql_error());

		if (sql) 
		{
			header('location:page.php?page=1&halaman=7');
		}
	}
	function hapus()
	{
		$sql = mysql_query("delete from t_prestasi_club where id_prestasi='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			header('location:page.php?page=1&halaman=7');
		}
	}
	function formCari()
	{
		?>
		<form name="proses_cari" method="get" action="pageCari.php">
        <input type="hidden" name="halaman" value="7" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_prestasi_club" />
        <input type="hidden" name="statSDM" value="prestasi_club" />
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
