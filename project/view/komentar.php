<?php
session_start();
include '../model/database.php';
$db = new database();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form action="../controller/proses_komentar.php" method="post">
	<?php
		if (!empty($_SESSION['status']) and $_SESSION['status']=='user' ) {
			?>
				<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../view/proses_logout.php">Log Out</a></p><br>
				<a href="../view/shop.php">Shop</a><br>
				<a href="../view/komentar.php">Komentar</a>


				<h3>Isi Komentar</h3>
				<textarea cols="40" rows="6" name="komentar" placeholder="Isi Komentar"></textarea><br>
				<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
				<input type="submit" name="submit">
			<?php
		}
	?>
	</form>

</body>
</html>