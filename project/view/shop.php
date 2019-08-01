<?php
session_start();
include '../model/database.php';
$db = new database();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
</head>
<body>
	<form action="galon_satu.php" method="post">
	<?php
		if (!empty($_SESSION['status']) and $_SESSION['status']=='user' ) {
			?>
				<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../view/proses_logout.php">Log Out</a></p><br>
				<a href="../view/shop.php">Shop</a><br>
				<a href="../view/komentar.php">Komentar</a>

				<table border="1"> 
					<tr>
						<th>Gambar Galon</th>
						<th>Nama Galon</th>
						<th>Harga</th>
						<th>Order</th>
					</tr>
					<?php
					$view=mysqli_query($con, "SELECT * FROM galon");
   					while ($fview=mysqli_fetch_array($view)){
   					?>
						<tr>
							<td><img src="images/<?php echo $fview['gambar']; ?>"  width="70" height="70"></td>
							<td><?php echo $fview['nama_galon']; ?></td>
							<td><?php echo "Rp".number_format($fview['harga']).",00"; ?></td>
							<td>
								<a href="galon_satu.php?kode=<?php echo $fview['kode_galon']; ?>">Order</a>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
				
			<?php
		}
	?>
	</form>

</body>
</html>