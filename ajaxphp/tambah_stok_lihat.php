<div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th> 
                    <th>Quantity</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

<?php
include('../db/koneksi.php');

$id_user=$_SESSION['id'];

$lihat=$link->query("select * from pending_stok where id_user='$_SESSION[id]'");
while($row=mysqli_fetch_assoc($lihat))
{
?>
                <tr>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['qty']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><a onclick="return confirm('Anda Yakin Ingin ?')" href="page/hapus_stok.php?kode=<?php echo $row['kode']; ?>">Hapus</a></td>
                </tr>
<?php
    }
?>        
            </tbody>
          </table>
        </div>