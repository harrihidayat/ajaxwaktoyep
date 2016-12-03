<article class="content forms-page responsive-tables-page">
<section class="section">                  
    <div class="col-md-12">
        <div class="card card-block sameheight-item" style="min-height: 500px";>
            <div class="title-block">
                <div id="save1" onKeyUp="lihat();"></div>
                <h3 class="title">
                Tambah Stok Barang
                </h3> 
            </div>
            
                <div id="info"></div>
                <input type="input" name="id" id="id" value="<?php echo $_SESSION['id']; ?>" />

                <div class="form-group">
                <label class="control-label">Kode</label> 
                <input autofocus type="text" class="form-control boxed" name="kode" id="kode" onBlur="akode();" onKeyUp="akode();" >
                <span id="akode"></span> 
                </div>

                <div id="validatestok"></div>

                <div class="form-group">
                <label class="control-label">Quantity</label> 
                <input type="number" class="form-control boxed" name="qty" id="qty" > 
                </div>

                <div class="form-group">
                <div class="col-md-4"> <button style="width: 100%" name="add" id="add" class="btn btn-primary" onClick="add_chart(); lihat();" onMouseOut="lihat();">Tambah Stok ke Cart</button> </div>
                <div class="col-md-4"> <button style="width: 100%" class="btn btn-primary" onClick="add_all(); lihat();" onMouseOut="akode(); lihat()">Tambah Semua di Cart ke Stok</button> </div>
                <div class="col-md-4"> <button style="width: 100%" class="btn btn-primary" id="hapus" onClick="bersichartstock(); lihat();"  onBlur="lihat();" onMouseout="lihat();">Bersihkan Cart</button> </div>
                </div>

            
        </div>

    </div>



</section>


<section class="section">                  
    <div class="col-md-12">
        <div class="card card-block sameheight-item">
<body onLoad="lihat();">
    <div id="lihatchart"></div>
</body>
        </div>
    </div>
</section>
</article>



<script src="js/jquery.min.js"></script>
<script src="js/ajax_tambah_stok.js"></script>