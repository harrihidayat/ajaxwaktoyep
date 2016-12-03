<?php

	if(isset($_POST['id']))
	{
		$id_user = $_POST['id'];
		include('../db/koneksi.php');
		$ambil_chart = $link->query("select * from pending_stok where id_user='$id_user'");
		while($row = mysqli_fetch_assoc($ambil_chart))
		{
			$stock_lama 	= $link->query("select * from stok_barang where kode='$row[kode]'");
			$barang_lama 	= mysqli_fetch_assoc($stock_lama);
			
			$stock_baru 	= $barang_lama['qty'] + $row['qty'];
			
			$update_stock	= $link->query("update stok_barang set qty='$stock_baru',
																 id_user_tambah_stok='$id_user' 
																 where kode='$row[kode]'");
			
			if($update_stock)
			{
				$delete_all=$link->query("delete from pending_stok where id_user='$id_user'") or die('cek : '.mysqli_error());
				?>
				<div class="alert alert-success">
 						 <strong>Berhasil!</strong> Stok Berhasil Ditambahkan..!.
				</div>
				<?php
				
			}
			else
			{
				echo "Chart gagal Ditambahkan..!";
			}
		}
		
	}

?>