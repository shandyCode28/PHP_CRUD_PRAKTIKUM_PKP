<?php 


function konek($server, $user, $password, $database){


	$koneksi = mysqli_connect($server, $user, $password, $database);
	if ( !$koneksi  ) {
		die('Could not connect: ' . mysql_error());
	}

	return $koneksi;

}

$koneksi = konek('localhost', 'root', '', 'praktikum_pkp');

function read(){
	global $koneksi;
	$sql = "SELECT * FROM mahasiswa";
	$data_db = mysqli_query( $koneksi, $sql );
	// $data_db = mysqli_fetch_assoc( $data_db );

	$data = [];
	while  ( $ambil_data = mysqli_fetch_assoc( $data_db ) ){
		$data[]  =  $ambil_data;
	}

	return $data;
}
function tambah_data(){
	global $koneksi;
	$nama = $_POST['nama'];
	$nrp = $_POST['nrp'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO mahasiswa(nama, nrp, alamat) VALUES(
	'$nama',
	'$nrp',
	'$alamat'
)";
	$tambah_data = mysqli_query( $koneksi, $sql );
	return $tambah_data;
}


