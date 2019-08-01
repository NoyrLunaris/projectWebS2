<?php
session_start();
include '../../model/database.php';
$db = new database();
error_reporting(0);
?>
<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../../view/proses_logout.php">Log Out</a></p><br>
<a href="tabel_user.php">Tabel User</a><br>
<a href="tabel_galon.php">Tabel Galon</a><br>
<a href="tabel_komentar.php">Tabel Komentar</a><br>
<a href="tabel_beli.php">Tabel Beli</a><br>
<h1>Tabel Beli</h1><br>

<table border="1">
	<tr>
		<th>Kode Beli</th>
		<th>Tanggal Beli</th>
		<th>Alamat</th>
		<th>Harga</th>
		<th>Kode User</th>
		<th>Kode Galon</th>
	</tr>
	<?php
		$view = mysqli_query($con ,"SELECT * FROM beli ");
		while($x = mysqli_fetch_array($view)){
			?>
			<tr>
				<td><?php echo $x['kode_beli'] ?></td>
				<td><?php echo $x['tanggal_beli']; ?></td>
				<td><?php echo $x['alamat'] ?></td>
				<td><?php echo $x['harga'] ?></td>
				<td><?php echo $x['kode_user'] ?></td>
				<td><?php echo $x['kode_galon'] ?></td>
			</tr>
			<?php
		}
	?>
</table>
