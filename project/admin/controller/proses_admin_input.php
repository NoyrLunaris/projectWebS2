<?php
	include '../../model/database.php';
	$db = new database();

	if (isset($_POST['submit'])) {
		$db ->input_admin($_POST['nama'],$_POST['user'],$_POST['pass'],$_POST['gender'],$_POST['alamat'],$_POST['nohp']);
		if ($db) {
			echo "<script>alert('Sign Up Berhasil');window.location.href='../../admin/view/tabel_admin.php';</script>";
		}else{
			echo "<script>alert('Sign Up Gagal');window.location.href='../../view/tabel_admin.php';</script>";
		}
	}else{
		die("Akses dilarang...");
	}
?>