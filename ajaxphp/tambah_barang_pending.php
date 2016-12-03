<?php
include('../db/koneksi.php');

	$kode 			= mysqli_real_escape_string($link,$_POST['kode']);
	$nama 			= mysqli_real_escape_string($link,$_POST['nama']);
	$jenis 			= mysqli_real_escape_string($link,$_POST['jenis']);
	$qty 			= mysqli_real_escape_string($link,$_POST['qty']);
	$satuan 		= mysqli_real_escape_string($link,$_POST['satuan']);
	$harga 			= mysqli_real_escape_string($link,$_POST['harga']);
	$titik 			= str_replace('.','',$harga);
	$koma 			= str_replace(',','',$titik);
	$harga_hasil1 	= str_replace('rp','',$koma);
	$harga_hasil 	= str_replace('Rp','',$harga_hasil1);
	
	$harga_total	= $harga_hasil * $qty;
	
	if(!empty($kode) && !empty($nama) && !empty($jenis) && !empty($qty)  && !empty($satuan))
	{
		if(is_numeric($qty))
		{
			if(is_numeric($harga))
			{
				
				$cek_kode=$link->query("select count(*) as jumkod from stok_barang where kode='$kode'");
				$ambil_kode=mysqli_fetch_assoc($cek_kode);
			
				if($ambil_kode['jumkod'] > 0)
				{
					echo "Kode Barang Sudah Ada..! AAAAAAAAAAAAAA";
				}
				else
				{
					$cek_nama=$link->query("select count(*) as jumnam from stok_barang where nama='$nama'");
					$ambil_nama=mysqli_fetch_assoc($cek_nama);
					if($ambil_nama['jumnam'] > 0)
					{
						echo "Nama Barang Sudah Ada..! VVVVVVVVVVVV";
					}
					else
					{
						$cek_nama=$link->query("select count(*) as jumnam from pending_barang where nama='$nama'");
						$ambil_nama=mysqli_fetch_assoc($cek_nama);
						if($ambil_nama['jumnam'] > 0)
						{
							echo "Nama Barang Sudah Ada..! CCCCCCCCCCC";
						}
						else
						{
							$cek_kode=$link->query("select count(*) as jumkod from pending_barang where kode='$kode'");
							$ambil_kode=mysqli_fetch_assoc($cek_kode);
							if($ambil_kode['jumkod'] > 0)
							{
								echo "Kode Barang Sudah Ada..! DDDDDDD";
							}
							else
							{
				
									$add_barang_ke_chart=$link->query("insert into pending_barang set kode='$kode', nama='$nama', jenis='$jenis', qty='$qty', harga='$harga_hasil', harga_total='$harga_total', id_user='$_SESSION[id]', satuan='$satuan'");

									if($add_barang_ke_chart)
									{
										echo "Barang Ditambahkan";
									}
									else
									{
										echo "Kode Barang Sudah Ada..! ZZZZZZZZZ";
									}
							}
						}
					}
				}
			}
			else
			{
				echo "Harga Harus format Angka";
			}
			
		}
		else
		{
			echo "Quantity Harus Angka";
		}
	}
	else
	{
		echo "Input Tidak Boleh Ada Yang Kosong";
	}
?>