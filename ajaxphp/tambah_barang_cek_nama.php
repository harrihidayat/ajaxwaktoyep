<?php
$error 		= "	<div class='alert alert-danger'>
				Nama Barang Sudah Ada..!
				</div>";

$ok 		= "	<div class='alert alert-success'>
				Nama Barang Bisa Digunakan..!
				</div>";

$warning 	= "	<div class='alert alert-warning'>
				Nama Barang Tidak Boleh Kosong..!
				</div>";

if(isset($_POST['nama']))
{
	include('../db/koneksi.php');
	$nama 					= $_POST['nama'];
	$cek_nama_barang_sb 	= $link->query("select count(*) as jumnam from stok_barang where nama='$nama'");
	$ambil_nama_sb 			= mysqli_fetch_assoc($cek_nama_barang_sb);

	$cek_nama_barang_pb 	= $link->query("select count(*) as jumnam from 	pending_barang where nama='$nama'");
	$ambil_nama_pb 			= mysqli_fetch_assoc($cek_nama_barang_pb);

		if($ambil_nama_sb['jumnam'] > 0 || $ambil_nama_pb['jumnam'] > 0)
		{
			echo $error;
		} elseif (trim($_POST['nama']) == '') {
			// echo $warning;
		} else {
			// echo $ok;
		}

} 
?>