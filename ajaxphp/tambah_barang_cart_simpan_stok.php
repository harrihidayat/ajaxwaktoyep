<?php
if(isset($_POST['id']))
{
	include('../db/koneksi.php');
	$id_user 	= $_POST['id'];
	$ambil_cart = $link->query("select * from pending_barang where id_user='$id_user'");
	while($row=mysqli_fetch_assoc($ambil_cart))
	{
		$masukkan_ke_stok = $link->query("insert into stok_barang set kode='$row[kode]', 																											  nama='$row[nama]',				                                             			  jenis='$row[jenis]',
																	  qty='$row[qty]',
																	  harga='$row[harga]',
																	  satuan='$row[satuan]',
																	  tanggal=NOW(),
																	  id_user='$row[id_user]'");
		if($masukkan_ke_stok)
		{
			$delete_all = $link->query("delete from pending_barang where id_user='$id_user'") or die('cek : '.mysqli_error());
			echo "Chart Berhasil Ditambahkan..!";
		}
		else
		{
			echo "Chart gagal Ditambahkan..!";
		}
	}
	
}

?>