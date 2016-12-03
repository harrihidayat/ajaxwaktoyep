function save(){
    var kode    = $("#kode").val();
    var nama    = $("#nama").val();
	var qty     = $("#qty").val();
	var harga   = $("#harga").val();
    var jenis   = $("#jenis").val();
	var satuan  = $("#satuan").val();
    
    var hr  = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_barang_pending.php";
   
    var vars = "kode="+kode+"&nama="+nama+"&qty="+qty+"&jenis="+jenis+"&satuan="+satuan+"&harga="+harga;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("save1").innerHTML = return_data;            
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("save1").innerHTML = "XXXX...";
}

function lihat(){
    var id = $("#id").val();

    var hr  = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_barang_lihat.php";
   
    var vars = "id="+id;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("lihat1").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("lihat1").innerHTML = "TTTT...";
}

function bersi(){
    
	var id = $("#id").val();
    
    var hr  = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_barang_cart_hapus_semua.php";
   

    var vars = "id="+id;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("save1").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("save1").innerHTML = "processing...";
}


function add_all(){
    var id = $("#id").val();
   
    var hr  = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_barang_cart_simpan_stok.php";
   

    var vars = "id="+id;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("save1").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("save1").innerHTML = "processing...";
}

        
function akode(){
    var kode = $("#kode").val();
   
    var hr  = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_barang_cek_kode.php";
   
    var vars = "kode="+kode;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("akode").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("akode").innerHTML = "processing...";
}
        
function anama(){
    var nama = $("#nama").val();
   
    var hr  = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_barang_cek_nama.php";
   
    var vars = "nama="+nama;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("anama").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("anama").innerHTML = "processing...";
}