<?php
	session_start();
	include '../model/database.php';
	$db = new database();
	error_reporting(0);

	if (isset($_POST['submit'])) {
		$db ->input_komentar($_POST['komentar'],$_POST['tanggal'],$_SESSION['kode']);
		if ($db) {
			echo "<script>alert('Komentar berhasil dikirim');window.location.href='../view/komentar.php';</script>";
		}else{
			echo "<script>alert('Komentar gagal dikirim');window.location.href='../view/komentar.php';</script>";
		}
	}else{
		die("Akses dilarang...");
	}
?>