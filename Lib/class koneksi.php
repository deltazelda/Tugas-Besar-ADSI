<?php
class koneksi
{
	public $host = 'localhost';
	public $db = 'dbolahraga';
	public $username = 'root';
	public $password = '';
	
	function cekKoneksi()
	{
		mysql_connect($this->host, $this->username, $this->password) or DIE('Connection to host is failed, perhaps the service is down!');

		mysql_select_db($this->db) or DIE('Database name is not available!');
	}
}

?>