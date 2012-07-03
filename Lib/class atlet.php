<?php
class atlet
{
	public $id; 
	public $nama;
	public $jk;
	public $cabang;
	public $kecamatan;
	public $tempat_lahir;
	public $tanggal_lahir;
	public $tabel = 't_atlet';
	
	function tambah() 
    {
		$sql="INSERT INTO t_atlet (Id_atlet, Nama, Jenis_Kelamin, Tempat_Lahir, Tanggal_Lahir, Cabang_Olahraga, Kecamatan)   
			  VALUES ('','$this->nama', '$this->jk', '$this->tempat_lahir', '$this->tanggal_lahir', '$this->cabang', 
			  '$this->kecamatan')";

		$eksekusi_query=mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		}else
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil memasukan 1 atlet !!");
			document.location="page.php?page=1&halaman=1";
			</script>
            <?php
		}
    }
	function edit()
	{
		$sql = mysql_query("update $this->tabel SET Nama='$this->nama', Jenis_Kelamin='$this->jk', Tempat_Lahir='$this->tempat_lahir', Tanggal_Lahir='$this->tanggal_lahir', Cabang_Olahraga='$this->cabang', Kecamatan='$this->kecamatan' where Id_atlet='$this->id'") or die(mysql_error());

		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil mengubah 1 atlet !!");
			document.location="page.php?page=1&halaman=1";
			</script>
            <?php
		}
	}
	function hapus()
	{
		$sql = mysql_query("delete from t_atlet where id_atlet='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menghapus 1 atlet !!");
			document.location="page.php?page=1&halaman=1";
			</script>
            <?php
		}
	}
	function tampil_prestasi($id)
	{
		$query = "SELECT * FROM t_prestasi_atlet where id_atlet='$id'";
		$result = mysql_query($query) or die('Error');
		while($data = mysql_fetch_array($result))
		{
	   		echo "<tr><td>".$data[2]."</td><td><center>".$data[3]."</center></td><td>".$data[4]."</td><td>".$data[5]."</td></tr>";
		}
	}
	function formCari()
	{
		?>
		<form name="proses_cari" method="get" action="pageCari.php">
        <input type="hidden" name="halaman" value="1" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_atlet" />
        <input type="hidden" name="statSDM" value="biasa" />
        <table border="0">
        <tr>
        <td>Field</td>
        <td>
            <select name="field">
                <option value="Nama">Nama</option>
                <option value="Cabang_Olahraga">Cabang Olahraga</option>
                <option value="Kecamatan">Kecamatan</option>
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
