<?php  
//menyambungkan database
//host, user, password, database
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'produksi';

$link = new mysqli($host, $user, $pass, $db);

//menguji error

if ($link->connect_errno) {
	echo ' gagal konek' . $link->connect_error;
}

session_start();
?>