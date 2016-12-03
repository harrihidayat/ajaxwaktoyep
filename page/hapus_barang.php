<?php
	if(isset($_GET['kode']))
	{
		include('../db/koneksi.php');
		$kode = mysqli_real_escape_string($link,$_GET['kode']);
		$hapus_barang=$link->query("delete from pending_barang where kode='$kode' AND id_user='$_SESSION[id]'");
		if($hapus_barang)
		{
			echo "<script>alert('Berhasil Hapus Barang..!');document.location='../index.php?page=tambah_barang'</script>";
		}
		else
		{
			echo "<script>alert('Gagal Hapus Barang, Silahkan Kontak Developer..!');document.location='../index.php?page=tambah_barang'</script>";
		}
	}

?>