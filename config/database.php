<?php 


$hostname = 'localhost'; 
$name   = 'root';
$password   = '';
$database   = 'desabatulawang';



$db = mysqli_connect($hostname, $name, $password, $database);

if($db->connect_error) {
    echo "koneksi Gagal";
}

?>