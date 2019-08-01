<?php
	session_start();
	include '../model/database.php';
	$db = new database();
	error_reporting(0);

	if (isset($_POST['submit'])) {
		$db->input_beli($_POST['tanggal'], $_POST['alamat'], $_POST['total'], $_GET['kode'], $_SESSION['kode']);
		if ($db) {
			echo "<script>alert('Berhasil order');window.location.href='../view/shop.php';</script>";
		}else{
			echo "<script>alert('gagal order');window.location.href='../view/shop.php';</script>";
		}
	}else{
		die("Akses dilarang...");
	}
?>