<?php
session_start();
include '../../model/database.php';
$db = new database();
error_reporting(0);
?>
<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../../view/proses_logout.php">Log Out</a></p><br>
<a href="tabel_user.php">Tabel User</a><br>
<a href="tabel_admin.php">Tabel Admin</a><br>
<a href="tabel_galon.php">Tabel Galon</a><br>
<a href="tabel_komentar.php">Tabel Komentar</a><br>
<a href="tabel_beli.php">Tabel Beli</a><br>
<h1>Tabel Admin</h1>
<a href="form_admin_input.php">Tambah Admin</a><br>

<table border="1">
	<tr>
		<th>Kode User</th>
		<th>Nama User</th>
		<th>Username</th>
		<th>Password</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Nomor HP</th>
		<th>Aksi</th>
	</tr>
	<?php
		$view = mysqli_query($con ,"SELECT * FROM user WHERE status='admin' ");
		while($x = mysqli_fetch_array($view)){
			?>
			<tr>
				<td><?php echo $x['kode_user'] ?></td>
				<td><?php echo $x['nama_user']; ?></td>
				<td><?php echo $x['username'] ?></td>
				<td><?php echo $x['password'] ?></td>
				<td><?php echo $x['jenis_kelamin'] ?></td>
				<td><?php echo $x['alamat'] ?></td>
				<td><?php echo $x['no_hp'] ?></td>
				<td>
					<a href="../admin/view/hapus_galon.php?id=<?php echo $x['kode_galon']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
		}
	?>
</table>
