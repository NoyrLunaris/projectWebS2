<?php
session_start();
include '../model/database.php';
$db = new database();
error_reporting(0);

$kode = $_GET['kode'];
$query = mysqli_query($con, "SELECT * FROM galon WHERE kode_galon = '$kode' ");
$m = mysqli_fetch_object($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form action="order.php?kode=<?php print $m->kode_galon; ?>" method="post">
	<?php
		if (!empty($_SESSION['status']) and $_SESSION['status']=='user' ) {
			?>
				<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../view/proses_logout.php">Log Out</a></p><br>
				<a href="../view/shop.php">Shop</a><br>
				<a href="../view/komentar.php">Komentar</a><br>

				<img src="images/<?php print $m->gambar; ?>"  width="70" height="70"><br>
				<?php
				print "Rp".number_format($m->harga).",00";
				?>
				<br>
				<p>Masukkan jumlah</p><br>
				<input type="text" name="jumlah">
				<input type="hidden" name="<?php echo $m->kode_galon ?>">
				<input type="submit" name="submit" >
			<?php
		}
	?>
	</form>

</body>
</html>