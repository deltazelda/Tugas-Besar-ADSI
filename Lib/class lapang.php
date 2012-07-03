<?php
class lapang
{
	public $id; 
	public $nama;
	public $cabang;
	public $kondisi;
	public $status;
	public $registrasi;
	public $alamat;
	public $kecamatan;
	
	function tambah() 
    {
		$sql="INSERT INTO t_lapang (id_lapang, Nama_lapang, Cb_olahraga, Kondisi, Status_kepemilikan, No_registrasi, alamat, kecamatan)   VALUES ('', '$this->nama', '$this->cabang',  '$this->kondisi',  '$this->status',  '$this->registrasi', '$this->alamat',  '$this->kecamatan')";
		
		$eksekusi_query = mysql_query($sql);
		if(!$eksekusi_query)
		{
			die("Query kamu salah dikarenakan:". mysql_error());
		} 
		else
		{
			header('location:index.php');
		}
    }
	function edit()
	{
		$sql = mysql_query("update t_lapang set nama_lapang='$this->nama', cb_olahraga='$this->cabang', Kondisi='$this->kondisi', status_kepemilikan='$this->status', no_registrasi='$this->registrasi', alamat='$this->alamat', kecamatan='$this->kecamatan' where id_lapang='$this->id'") or die(mysql_error());

		if (sql) 
		{
			header('location:index.php');
		}
	}
	function hapus()
	{
		$sql = mysql_query("delete from t_lapang where id_lapang='$this->id'") or die(mysql_error());
		if ($sql) 
		{
			header('location:index.php?message=delete');
		}
	}	
}
?>
