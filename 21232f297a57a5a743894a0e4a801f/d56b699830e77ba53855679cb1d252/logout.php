<?php session_start();
if(isset($_SESSION['id']))
{
	unset($_SESSION['id']);
	unset($_SESSION['user']);
	//session_destroy();
	?><script language="javascript">
	alert("Anda Berhasil logout.");
	document.location="../../index.php";
	</script><?php
	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="../../index.php";
	</script>
	<?php
}
?>