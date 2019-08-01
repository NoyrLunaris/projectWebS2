<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<p>Tambah Galon</p>
	<form action="../controller/proses_galon_input.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama Galon</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>