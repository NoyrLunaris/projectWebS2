<?php
	include '../../model/database.php';
	$db = new database();

	if (isset($_POST['submit'])) {
		
		$ins=mysqli_query($con, "INSERT into galon(kode_galon,nama_galon,harga, stok, gambar) value ('','".$_POST['nama']."','".$_POST['harga']."','".$_POST['stok']."','".$date.$_FILES['gambar']['name']."')");
   
    	move_uploaded_file($_FILES['gambar']['tmp_name'],"../images/".$date.$_FILES['gambar']['name']);

		if ($ins) {
			echo "<script>alert('Galon berhasil ditambah');window.location.href='../view/tabel_galon.php';</script>";
		}else{
			echo "<script>alert('Galon gagal ditambah');window.location.href='../view/tabel_galon.php';</script>";
		}
		
	}else{
		die("Akses dilarang...");
	}
?>