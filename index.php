<?php 
require_once 'fungsi.php';
$get_data = read();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		READ PHP
	</title>
	<style type="text/css">
		table{
			margin: auto;
		}
		td{
			padding: 20px;
		}
	</style>
</head>
<body>

	<h1 style="text-align: center;"> MENAMPILKAN DATA </h1>
	<a href="tambah_data.php"> TAMBAH DATA </a>
	<table border="1">

		<tr>
			<td> id </td>
			<td> nama </td>
			<td> nrp </td>
			<td> alamat </td>
		</tr>
		<?php foreach ($get_data as $key => $data_row) {?>
			<tr>
				<td> <?= $data_row['id']  ?> </td>
				<td> <?= $data_row['nama']?> </td>
				<td> <?= $data_row['nrp'] ?> </td>
				<td> <?= $data_row['alamat'] ?> </td>
			</tr>
		<?php } ?>
	</table>




</body>
</html>
