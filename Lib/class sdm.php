<?php
class sdm
{
	public $id; 
	public $nama;
	public $jk;
	public $pendidikan;
	public $klasifikasi;
	public $lisensi;
	public $pemberi_lisensi;
	public $cabang_olahraga;
	public $profesi;
	public $kecamatan;	
	public $tabel = 't_sdm';
	
	function tambah_wasit() 
    {
		$sql="INSERT INTO t_sdm (Id_profesi, Nama, Jenis_Kelamin, Pendidikan, Klasifikasi, Lisensi, Pemberi_Lisensi, Cabang_Olahraga, Profesi, Kecamatan)   VALUES ('','$this->nama', '$this->jk', '$this->pendidikan', '$this->klasifikasi', '$this->lisensi', '$this->pemberi_lisensi', '$this->cabang_olahraga', '$this->profesi', '$this->kecamatan')";

		$eksekusi_query=mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		}else
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menambahkan 1 Wasit !!");
			document.location="page.php?page=1&halaman=2";
			</script>
            <?php
		}
    }
	function tambah_pelatih() 
    {
		$sql="INSERT INTO t_sdm (Id_profesi, Nama, Jenis_Kelamin, Pendidikan, Klasifikasi, Lisensi, Pemberi_Lisensi, Cabang_Olahraga, Profesi, Kecamatan)   VALUES ('','$this->nama', '$this->jk', '$this->pendidikan', '$this->klasifikasi', '$this->lisensi', '$this->pemberi_lisensi', '$this->cabang_olahraga', '$this->profesi', '$this->kecamatan')";

		$eksekusi_query=mysql_query($sql);
		if(!$eksekusi_query){
		die("Query kamu salah dikarenakan:". mysql_error());
		} 
		else
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menambahkan 1 Pelatih !!");
			document.location="page.php?page=1&halaman=3";
			</script>
            <?php
		}
    }
	function edit_wasit()
	{
		$sql = mysql_query("update t_sdm set Nama='$this->nama', Jenis_Kelamin='$this->jk', Pendidikan='$this->pendidikan', Klasifikasi='$this->klasifikasi', Lisensi='$this->lisensi', Pemberi_Lisensi='$this->pemberi_lisensi', Cabang_Olahraga='$this->cabang_olahraga', Profesi='$this->profesi', Kecamatan='$this->kecamatan' where Id_profesi='$this->id'") or die(mysql_error());

		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil mengubah 1 Wasit !!");
			document.location="page.php?page=1&halaman=2";
			</script>
            <?php
		}
	}
	function edit_pelatih()
	{
		$sql = mysql_query("update t_sdm set Nama='$this->nama', Jenis_Kelamin='$this->jk', Pendidikan='$this->pendidikan', Klasifikasi='$this->klasifikasi', Lisensi='$this->lisensi', Pemberi_Lisensi='$this->pemberi_lisensi', Cabang_Olahraga='$this->cabang_olahraga', Profesi='$this->profesi', Kecamatan='$this->kecamatan' where Id_profesi='$this->id'") or die(mysql_error());

		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil mengubah 1 Pelatih !!");
			document.location="page.php?page=1&halaman=3";
			</script>
            <?php
		}
	}
	function hapus_wasit()
	{
		$sql = mysql_query("delete from t_sdm where id_profesi='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			?>
			<script language="javascript">
			document.location="page.php?page=1&halaman=2";
			alert("Terima Kasih, Anda berhasil menghapus 1 Wasit !!");
			
			</script>
            <?php
		}
	}
	function hapus_pelatih()
	{
		$sql = mysql_query("delete from t_sdm where id_profesi='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menghapus 1 Pelatih !!");
			document.location="page.php?page=1&halaman=3";
			</script>
            <?php
		}
	}
	function formCari_wasit()
	{
		?>
		<form name="proses_cari" method="get" action="pageCari.php">
        <input type="hidden" name="halaman" value="2" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_sdm" />
        <input type="hidden" name="statSDM" value="WASIT" />
        <table border="0">
        <tr>
        <td>Field</td>
        <td>
            <select name="field">
                <option value="Nama">Nama</option>
                <option value="Cabang_Olahraga">Cabang Olahraga</option>
                <option value="Klasifikasi">Klasifikasi</option>
                <option value="Kecamatan">Kecamatan</option>
            </select>
        </td>
        <tr><td>Kata Kunci</td><td><input type="text" name="key" /></td></tr>
        <tr><td><input type="submit" value="Cari" /></td></tr>
        </table>
        </form>
        <?php
	}	
	function formCari_pelatih()
	{
		?>
		<form name="proses_cari" method="get" action="pageCari.php">
        <input type="hidden" name="halaman" value="3" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_sdm" />
        <input type="hidden" name="statSDM" value="PELATIH" />
        <table border="0">
        <tr>
        <td>Field</td>
        <td>
            <select name="field">
                <option value="Nama">Nama</option>
                <option value="Cabang_Olahraga">Cabang Olahraga</option>
                <option value="Klasifikasi">Klasifikasi</option>
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
