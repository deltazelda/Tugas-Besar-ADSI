<?php session_start();
if (isset($_POST['admin']))
{
	include ("conn.php");
	$user_name=htmlentities((trim($_POST['admin'])));
	$password=htmlentities(md5($_POST['kunci']));
	$jenis_user=htmlentities((trim($_POST['jenisuser'])));
	
	if($jenis_user == 1)
	{
		$login=mysql_db_query($db,"select * from admin where user='$user_name' or password='$password'",$koneksi);
		$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="login.php";
			</script><?php
		}
		else
		{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{
				$user=$row['user'];
				$id=$row[0];
				$_SESSION['user']=$user;
				$_SESSION['id']=$id;
			}
			header('location:../index.php');
		}
	}else
	if($jenis_user == 2)
	{
		$login=mysql_db_query($db,"select * from petugas where user='$user_name' or password='$password'",$koneksi);
		$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="login.php";
			</script><?php
		}
		else
		{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{
				$user=$row['user'];
				$id=$row[0];
				$kecamatan=$row[3];
				$_SESSION['user']=$user;
				$_SESSION['id']=$id;
				$_SESSION['kecamatan']=$kecamatan;
			}
			header('location:../../0dd7a1c13df066dae71d4b8a520c52/index.php');
		}
		
	}
	
	
}
?>


<html>
<title>Login</title>
<head>
<script language="javascript">
function cek(){
	var user= document.getElementById('userid').value;
	var pass= document.getElementById('passwd').value;
	if(user.replace(/^\s+|\s+$/g, '')==''){
		alert('Username Harus Diisi!');
		return false;
	} 
	if(pass.replace(/^\s+|\s+$/g, '')==''){
		alert('Password Harus diisi!');
		return false;
	}
	return true;
}
</script>
</head>

<form action="login.php" method="post">
  <p align="center"><? echo $status;?></p>
  <table width="251" height="101" border="0" align="center">
<tr valign="bottom">
	<td width="104" height="35"><font size="4" face="verdana">Username</font></td>
  	<td width="137"><input type="text" name="admin" size="20" id="userid"></td>
</tr>

<tr valign="top">
	<td height="34"><font size="4" face="verdana">Password</font></td>
  	<td><input type="password" name="kunci" size="20" id="passwd"></td>
</tr>

<tr valign="top">
	<td height="34"><font size="4" face="verdana">User</font></td>
  	<td><select name="jenisuser"><option value=1>Administrator</option><option value="2">User</option></select>
</tr>

<tr>
	<td>&nbsp;</td>
	<td><input name="submit" type="submit" onClick="return cek()" value="LOGIN"></td>
</tr>
</table>
</form>

</html>