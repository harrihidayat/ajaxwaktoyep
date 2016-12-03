<article class="content forms-page responsive-tables-page">
<section class="section">                  
    <div class="col-md-12">
        <div class="card card-block sameheight-item" style="min-height: 670px";>
            <div class="title-block">
                <div id="save1" onKeyUp="lihat();"></div>
                <h3 class="title">
                Tambah Barang Baru
                </h3> 
            </div>
            
            <form method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>" />

                <div class="form-group">
                <label class="control-label">Kode</label> 
                <input autofocus type="text" class="form-control boxed" name="kode" id="kode" onBlur="akode();" onChange="akode();" >
                <span id="akode"></span> 
                </div>

                <div class="form-group">
                <label class="control-label">Nama</label> 
                <input type="text" class="form-control boxed" name="nama" id="nama" onBlur="anama();" onChange="anama();" >
                <span id="anama"></span>  
                </div>

                <div class="form-group">
                <label class="control-label">Quantity</label> 
                <input type="number" class="form-control boxed" name="qty" id="qty" > 
                </div>

                <div class="form-group">
                <label class="control-label">Jenis Barang</label> 
                <select class="form-control" name="jbarang" id="jenis">
                    <option>Pilih Jenis</option>
                    <?php 
                    $barang = $link->query("select * from jenis_barang");
                    while($isi_barang=mysqli_fetch_assoc($barang))
                    { ?>
                    <option value="<?php echo $isi_barang['barang']; ?>"><?php echo $isi_barang['barang']; ?></option>
                    <?php   
                    }
                    ?>
                </select>
                </div>

                <div class="form-group">
                <label class="control-label">Jenis Satuan</label> 
                <select class="form-control" name="jsatuan" id="satuan">
                    <option>Pilih Satuan</option>
                    <?php 
                    $satuan = $link->query("select * from jenis_satuan");
                    while($isi_satuan=mysqli_fetch_assoc($satuan))
                    { ?>
                    <option value="<?php echo $isi_satuan['satuan']; ?>"><?php echo $isi_satuan['satuan']; ?></option>
                    <?php   
                    }
                    ?>
                </select>
                </div>

                <div class="form-group">
                <label class="control-label">Harga</label> 
                <input type="number" class="form-control boxed" name="harga" id="harga" > 
                </div>

                <div class="form-group">
                <div class="col-md-offset-1 col-md-5"> <button style="width: 100%" name="add" id="add" class="btn btn-primary" onClick="save(); lihat();" onBlur="lihat();" onKeyUp="lihat();" onMouseOut="lihat();" onMouseUp="lihat();">Tambah Barang ke Cart</button> </div>
                <div class="col-md-5"> <button style="width: 100%" type="reset" class="btn btn-primary">Reset</button> </div>
                <div class="col-md-offset-1 col-md-5"> <button style="width: 100%" class="btn btn-primary" onClick="add_all(); lihat();">Tambah Semua di Cart ke Stok</button> </div>
                <div class="col-md-5"> <button style="width: 100%" class="btn btn-primary" id="hapus" onClick="bersi(); lihat();" onMouseOut="lihat();" onMouseUp="lihat();">Bersihkan Cart</button> </div>
                </div>
            </form>
        </div>

    </div>



</section>


<section class="section">                  
    <div class="col-md-12">
        <div class="card card-block sameheight-item">
<body onLoad="lihat();">
    <div id="lihat1"></div>
</body>
        </div>
    </div>
</section>
</article>



<script src="js/jquery.min.js"></script>
<script src="js/ajax_tambah_barang.js"></script>