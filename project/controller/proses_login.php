<?php
	session_start();
	include '../model/database.php';

	if (!empty($_POST['user']) and !empty($_POST['pass']) and isset($_POST['submit']) ) {
		
		$q = mysqli_query($con ,"SELECT * FROM user WHERE username ='".$_POST['user']."' and password='".$_POST['pass']."' ");
		$dt = mysqli_fetch_array($q);
		if(mysqli_num_rows($q)>0){
			$_SESSION['kode'] = $dt['kode_user'];
			$_SESSION['nama']= $dt['nama_user'];
			$_SESSION['user']= $dt['username'];
			$_SESSION['pass']= $dt['password'];
			$_SESSION['jk']= $dt['jenis_kelamin'];
			$_SESSION['alamat']= $dt['alamat'];
			$_SESSION['nohp']= $dt['no_hp'];
			$_SESSION['status']= $dt['status'];
			
			if (!empty($_SESSION['kode']) and $_SESSION['status'] == 'user') {
				echo "<script>alert('Sign In Berhasil');window.location.href='../view/index.php';</script>";
			}elseif(!empty($_SESSION['kode']) and $_SESSION['status'] == 'admin') {
				echo "<script>alert('Sign In Berhasil');window.location.href='../admin/view/admin_index.php';</script>";
			}else{
				echo "<script>alert('Terjadi kesalahan pada proses');window.location.href='../view/signin.php';</script>";
			}
		}
		
	}else{
		echo "<script>alert('Sign in gagal');window.location.href='../view/index.php';</script>";
	}
?>