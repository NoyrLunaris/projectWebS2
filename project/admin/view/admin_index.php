<?php
	session_start();
	include '../../model/database.php';
	$db = new database();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Admin</title>
	<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../view/proses_logout.php">Log Out</a></p>

	<a href="tabel_user.php">Tabel User</a><br>
	<a href="tabel_galon.php">Tabel Galon</a><br>
	<a href="tabel_komentar.php">Tabel Komentar</a><br>
	<a href="tabel_beli.php">Tabel Beli</a><br>
</head>
<body>

</body>
</html>