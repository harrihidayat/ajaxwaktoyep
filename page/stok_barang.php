<article class="content responsive-tables-page">

    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title">
                    			Data Stok Barang
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
                                            <th>Harga</th>
                                            <th>Harga Total</th>
                                            <th>Terakhir Diupdate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $barang=$link->query("select * from stok_barang");
                                    while($row=mysqli_fetch_assoc($barang))
                                    { ?>
                                        <tr>
                                            <td><?php echo $row['kode']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['qty']; ?></td>
                                            <td><?php echo $row['satuan']; ?></td>
                                            <td><?php echo $row['jenis']; ?></td>
                                            <td>Rp. <?php echo number_format($row['harga']); ?></td>
                                            <td>Rp. <?php echo number_format($row['harga'] * $row['qty']); ?></td>
                                            <td><?php echo $row['tanggal']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>    
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</article>