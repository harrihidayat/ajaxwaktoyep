<?php
	if(isset($_POST['kode']))
	{
		include('../db/koneksi.php');
		$kode = $_POST['kode'];
		$cek_kodebarang = $link->query("select count(*) as cek from stok_barang where kode='$kode'");
		$ambil_cek= mysqli_fetch_assoc($cek_kodebarang);
		if($ambil_cek['cek'] > 0 )
		{ ?>
			
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th> 
                    <th>Quantity</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Harga Total</th>
                    <th>Terakhir Diupdate</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>

<?php    
    $lihat=$link->query("select * from stok_barang where kode='$kode'");
    while($row=mysqli_fetch_assoc($lihat))
    {
?>
                <tr>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['qty']; ?> <?php echo $row['satuan']; ?></td>
                    <td><?php echo $row['jenis']; ?></td>
                    <td>Rp. <?php echo number_format($row['harga']); ?></td>
                    <td>Rp. <?php echo number_format($row['harga'] * $row['qty']); ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><span class="label label-success">Validate</span></td>
                </tr>
<?php
    }
?>        
            </tbody>
          </table>
        </div>

<?php
		}
		else
		{
			echo "<p style='color:red;'>(*) Kode Barang Tidak Ada..!</p>";
		}
		
		
	}

?>