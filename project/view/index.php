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
	<?php
		if (!empty($_SESSION['status']) and $_SESSION['status']=='user' ) {
			?>
				<p>Welcome || <?php echo $_SESSION['nama']; ?> || <a href="../view/proses_logout.php">Log Out</a></p><br>
				<a href="../view/shop.php">Shop</a><br>
				<a href="../view/komentar.php">Komentar</a>
			<?php
		}else{
			?>
				<a href="../view/signin.php">Sign In</a>
			<?php
		}
	?>


</body>
</html>