<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Sign In</p>

	<form action="../controller/proses_login.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user" placeholder="Input Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass" placeholder="Input Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Log In"></td>
			</tr>
		</table>
	</form>
</body>
</html>