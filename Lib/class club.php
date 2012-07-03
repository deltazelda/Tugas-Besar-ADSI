<?php
class club
{
	public $id; 
	public $nama;
	public $cabang;	
	public $ketua;
	public $sekretaris;
	public $alamat;
	public $kecamatan;
	public $tabel = 't_sor';
	
	function tambah() 
    {
		$sql="INSERT INTO t_sor (id_sor, club, cb_olahraga, ketua, sekretaris, alamat, kecamatan)   VALUES ('', '$this->nama', '$this->cabang',  '$this->ketua',  '$this->sekretaris',  '$this->alamat', '$this->kecamatan')";
		
		$eksekusi_query = mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		} 
		else
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menambahkan 1 Club !!");
			document.location="page.php?page=1&halaman=5";
			</script>
            <?php
		}
    }
	function edit()
	{
		$sql = mysql_query("update t_sor set club='$this->nama', cb_olahraga='$this->cabang', ketua='$this->ketua', sekretaris='$this->sekretaris', alamat='$this->alamat', kecamatan='$this->kecamatan' where id_sor='$this->id'") or die(mysql_error());
		if (sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil mengubah 1 Club !!");
			document.location="page.php?page=1&halaman=5";
			</script>
            <?php
		}
	}
	function hapus()
	{
		$sql = mysql_query("delete from t_sor where id_sor='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menghapus 1 Club !!");
			document.location="page.php?page=1&halaman=5";
			</script>
            <?php
		}
	}			
	function tampil_prestasi($id)
	{
		$query = "SELECT * FROM t_prestasi_club where id_club='$id'";
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
        <input type="hidden" name="halaman" value="5" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_sor" />
        <input type="hidden" name="statSDM" value="biasa" />
        <table border="0">
        <tr>
        <td>Field</td>
        <td>
            <select name="field">
                <option value="club">Nama</option>
                <option value="Cb_Olahraga">Cabang Olahraga</option>
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
