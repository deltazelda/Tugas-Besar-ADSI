<?php
class gor
{
	public $id;
	public $namaGedung;
	public $cabang;
	public $kondisi;
	public $status;
	public $registrasi;
	public $alamat;
	public $kecamatan;
	public $standar;
	public $tabel = 't_gor';
	
	function tambah() 
    {
		$sql="INSERT INTO t_gor (id_gor, Nama_gedung, Cb_olahraga, std_sarana, Status_kepemilikan, No_registrasi, alamat, kecamatan)   VALUES ('', '$this->namaGedung', '$this->cabang',  '$this->standar',  '$this->status',  '$this->registrasi', '$this->alamat',  '$this->kecamatan')";
		
		$eksekusi_query = mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		} 
		else
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menambahkan 1 GOR !!");
			document.location="page.php?page=1&halaman=4";
			</script>
            <?php
		}
    }
	function edit()
	{
		$sql = mysql_query("update t_gor set nama_gedung='$this->namaGedung', cb_olahraga='$this->cabang', std_sarana='$this->standar', status_kepemilikan='$this->status', no_registrasi='$this->registrasi', alamat='$this->alamat', kecamatan='$this->kecamatan' where id_gor='$this->id'") or die(mysql_error());

		if (sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil mengubah 1 GOR !!");
			document.location="page.php?page=1&halaman=4";
			</script>
            <?php
		}
	}
	function hapus()
	{
		$sql = mysql_query("delete from t_gor where id_gor='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			?>
			<script language="javascript">
			alert("Terima Kasih, Anda berhasil menghapus 1 GOR !!");
			document.location="page.php?page=1&halaman=4";
			</script>
            <?php
		}
	}		
	function formCari()
	{
		?>
		<form name="proses_cari" method="get" action="pageCari.php">
        <input type="hidden" name="halaman" value="4" />
        <input type="hidden" name="page" value="1" />
        <input type="hidden" name="t" value="t_gor" />
        <input type="hidden" name="statSDM" value="biasa" />
        <table border="0">
        <tr>
        <td>Field</td>
        <td>
            <select name="field">
                <option value="nama_gedung">Nama</option>
                <option value="Cb_Olahraga">Cabang Olahraga</option>
                <option value="Alamat">Alamat</option>
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