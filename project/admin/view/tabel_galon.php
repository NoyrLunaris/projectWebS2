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
<h1>Tabel Galon</h1>
<a href="form_galon_input.php">Tambah Galon</a><br>

<table border="1">
	<tr>
		<th>Kode Galon</th>
		<th>Nama Galon</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Gambar</th>
		<th>Aksi</th>
	</tr>
	<?php
		$view = mysqli_query($con ,"SELECT * FROM galon ");
		while($x = mysqli_fetch_array($view)){
			?>
			<tr>
				<td><?php echo $x['kode_galon'] ?></td>
				<td><?php echo $x['nama_galon']; ?></td>
				<td><?php echo $x['harga'] ?></td>
				<td><?php echo $x['stok'] ?></td>
				<td><img src="../image/<?php echo $x['gambar'] ?>" width ="70" heigth="70" ></td>
				<td>
					<a href="../admin/view/hapus_galon.php?id=<?php echo $x['kode_galon']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
		}
	?>
</table>
