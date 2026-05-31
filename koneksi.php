<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "crud";

$koneksi = mysqli_connect ($server, $user, $password, $database);

if($koneksi == TRUE){
    // echo "Berhasil Terhubung Ke Database";
}else{
    // echo "Gagal Terhubung";
}
?>
