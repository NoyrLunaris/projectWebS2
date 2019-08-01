<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<p>Sign Up</p>

	<form action="../../admin/controller/proses_admin_input.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="gender" value="pria" checked="">Pria <input type="radio" name="gender" value="wanita">Wanita</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea rows="4" cols="30" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Nomor Hp</td>
				<td>:</td>
				<td><input type="text" name="nohp"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>