<?php
		require_once('../db/koneksi.php');

		$id_user = $_POST['id'];
		
		$delete_all = $link->query("delete from pending_stok where id_user='$id_user'") or die('cek : '.mysqli_error());
		if($delete_all)
		{
			echo "Chart Berhasil Dibersihkan..!";
		}
		else
		{
			echo "Gagal Bersihkan Chart";
		}
	
?>