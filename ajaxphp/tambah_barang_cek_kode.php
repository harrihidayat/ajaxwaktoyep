<?php
$error 		= "	<div class='alert alert-danger'>
				Kode Barang Sudah Ada..!
				</div>";

$ok 		= "	<div class='alert alert-success'>
				Kode Barang Bisa Digunakan..!
				</div>";

$warning 	= "	<div class='alert alert-warning'>
				Kode Barang Tidak Boleh Kosong..!
				</div>";

if(isset($_POST['kode']))
{
	include('../db/koneksi.php');
	$kode 					= $_POST['kode'];
	$cek_kode_barang_sb 	= $link->query("select count(*) as jumkod from stok_barang where kode='$kode'");
	$ambil_kode_sb 			= mysqli_fetch_assoc($cek_kode_barang_sb);

	$cek_kode_barang_pb 	= $link->query("select count(*) as jumkod from 	pending_barang where kode='$kode'");
	$ambil_kode_pb 			= mysqli_fetch_assoc($cek_kode_barang_pb);

		if($ambil_kode_sb['jumkod'] > 0 || $ambil_kode_pb['jumkod'] > 0)
		{
			echo $error;
		} elseif (trim($_POST['kode']) == '') {
			// echo $warning;
		} else {
			// echo $ok;
		}

} 
?>