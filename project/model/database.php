<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "galon";

$con = mysqli_connect($server, $user, $pass, $db);

if(!$con){
	die("Gagal terhubung dengan data base:". mysqli_connect_error());
}

	class database{
		var $server = "localhost";
		var $user = "root";
		var $pass = "";
		var $db = "galon";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->server, $this->user, $this->pass);
			mysqli_select_db($this->con, $this->db); 
		}

		function input($nama,$user,$pass,$jk,$alamat,$nohp){
			mysqli_query($this->con, "INSERT INTO user VALUES('','$nama','$user','$pass','$jk','$alamat','$nohp','user')");
		}

		function input_admin($nama,$user,$pass,$jk,$alamat,$nohp){
			mysqli_query($this->con, "INSERT INTO user VALUES('','$nama','$user','$pass','$jk','$alamat','$nohp','admin')");
		}

		function input_komentar($isi,$tanggal,$kode){
			mysqli_query($this->con, "INSERT INTO komentar VALUES('','$isi','$tanggal','$kode')");
		}

		function tambah_galon($nama,$harga,$stok,$foto){
			mysqli_query($this->con, "INSERT INTO galon VALUES('','$nama','$harga','$stok','$foto')");
		}

		function input_beli($tanggal, $alamat, $harga, $kodeu, $kodeg){
			mysqli_query($this->con, "INSERT INTO beli VALUES('','$tanggal','$alamat','$harga','$kodeu','$kodeg') ");
		}

	}
?>	