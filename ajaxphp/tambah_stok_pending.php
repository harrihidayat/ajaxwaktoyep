<?php
	if(isset($_POST['kode']))
	{
		$kode=$_POST['kode'];
		$qty=$_POST['qty'];
		if(!empty($qty))
		{
			if(!empty($kode))
			{
				include('../db/koneksi.php');
				$cek_kode 	= $link->query("select count(*) as cek from stok_barang where kode='$kode'");
				$ambil_cek 	= mysqli_fetch_assoc($cek_kode);
				if($ambil_cek['cek'] > 0 )
				{
					
					$info_barang 	= $link->query("select * from stok_barang where kode='$kode'");
					$ambil_info 	= mysqli_fetch_assoc($info_barang);
					$nama 	= $ambil_info['nama'];
					
					
					$cek_chart = $link->query("select count(*) as chart_c from pending_stok where kode='$kode' and id_user='$_SESSION[id]'");
					$ambil_cek_chart=mysqli_fetch_assoc($cek_chart);
					if($ambil_cek_chart['chart_c'] > 0)
					{
						echo "Barang Sudah Di Add Ke Cart..!";
					}
					else
					{
						
						$tambah_chart=$link->query("insert into pending_stok set kode 	='$kode',
																				 nama 	='$nama',
																				 qty 	='$qty',
																				 id_user='$_SESSION[id]'");
						if($tambah_chart)
						{
							echo "Barang Berhasil Ditambah Ke Cart.";
						}
						else
						{
							echo "Barang gagal ditambah, silahkan Kontak Developer..!";
						}
						
						
					}
					
					
					
					
				}
				else
				{
					echo "Kode Barang Tidak Ada";
				}
				
				
				
			}
			else
			{
				echo "Kode Barang Kosong.!";
			}
		}
		else
		{
			echo "Quantity Belum Diisi,..!";
		}
		
		
	}

?>