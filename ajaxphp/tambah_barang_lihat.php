
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title">
                    			Daftar Cart Barang Baru
                    		</h3> 
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th> 
                                            <th>Quantity</th>
                                            <th>Satuan</th>
                                            <th>Jenis</th>
                                            <th>Tanggal</th>
                                            <th>Harga</th>
                                            <th>Harga Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include('../db/koneksi.php');
                                    $id_user    = $_POST['id'];
                                    $barang     = $link->query("select * from pending_barang where id_user='$_SESSION[id]'");
                                    while($row = mysqli_fetch_assoc($barang))
                                    { ?>
                                        <tr>
                                            <td><?php echo $row['kode']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['qty']; ?></td>
                                            <td><?php echo $row['satuan']; ?></td>
                                            <td><?php echo $row['jenis']; ?></td>
                                            <td><?php echo $row['tanggal']; ?></td>
                                            <td>Rp. <?php echo number_format($row['harga']); ?></td>
                                            <td>Rp. <?php echo number_format($row['harga_total']); ?></td>
                                            <td><a onclick="return confirm('Anda Yakin Ingin Hapus Barang Ini ?')" href="page/hapus_barang.php?kode=<?php echo $row['kode']; ?>">Hapus</a></td>
                                            
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                        <tr>
                                            <th colspan="7"><span style="float: right;">Grand Total:</span></th>
                                            <th>
                                                <?php 
                                                $grandtotal = $link->query("select sum(harga_total) as total from pending_barang where id_user='$_SESSION[id]'");
                                                $ambil_grandtotal = mysqli_fetch_assoc($grandtotal);
                                                echo "Rp. " . number_format ($ambil_grandtotal['total']);
                                                ?>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
