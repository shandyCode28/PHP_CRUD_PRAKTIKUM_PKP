<?php 
require_once 'fungsi.php';


if ( isset($_POST['nama']) ) {
	$tambah = tambah_data();
	if ( $tambah == true ) {
		header('location:index.php');
	}else{
		echo "Data Gagal Ditambah";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		MENAMBAH DATA PHP
	</title>
	<style type="text/css">
	form{
		width: 50%;
		margin: auto;
	}
	input, textarea, button{
		display: block;
		width: 100%;
		margin-bottom: 20px;
		padding: 20px;
	}
</style>
</head>
<body>

	<h1 style="text-align: center;"> MENAMBAH DATA </h1>
	<a href="index.php"> TAMPILKAN DATA </a>

	<form action="" method="post"> 

		<input type="text" name="nama" placeholder="isi dengan nama">
		<input type="text" name="nrp" placeholder="isi dengan nrp">
		<textarea name="alamat"></textarea>

		<button type="submit"> SUBMIT DATA  </button>


	</form>




</body>
</html>
