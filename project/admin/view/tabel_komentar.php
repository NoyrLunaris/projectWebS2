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
<h1>Tabel Komentar</h1><br>

<table border="1">
	<tr>
		<th>Kode Komentar</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Kode User</th>
	</tr>
	<?php
		$view = mysqli_query($con ,"SELECT * FROM komentar ");
		while($x = mysqli_fetch_array($view)){
			?>
			<tr>
				<td><?php echo $x['kode_komentar'] ?></td>
				<td><?php echo $x['isi']; ?></td>
				<td><?php echo $x['tanggal_komentar'] ?></td>
				<td><?php echo $x['kode_user'] ?></td>
			</tr>
			<?php
		}
	?>
</table>
