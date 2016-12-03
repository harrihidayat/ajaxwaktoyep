function akode(){
    var kode = $("#kode").val();

    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_stok_cek_kode.php";

    var vars = "kode="+kode;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("validatestok").innerHTML = return_data;               
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("validatestok").innerHTML = "processing...";
}

function add_chart(){
    var kode    = $("#kode").val();
	var qty     = $("#qty").val();
   
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_stok_pending.php";
   
    var vars = "kode="+kode+"&qty="+qty;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("info").innerHTML = return_data;           
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("info").innerHTML = "processing...";
}

function lihat(){
    var kode =$("#kode").val();

    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_stok_lihat.php";
   
    var vars = "kode="+kode;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("lihatchart").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("lihatchart").innerHTML = "processing...";
}

function bersichartstock(){
	var id = $("#id").val();
    
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_stok_cart_hapus_semua.php";
   
    var vars = "id="+id;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("info").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("info").innerHTML = "processing...";
}

function add_all(){
    var id =$("#id").val();
   
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxphp/tambah_stok_cart_simpan_stok.php";
   

    var vars = "id="+id;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("info").innerHTML = return_data;
                    
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("info").innerHTML = "processing...";
}