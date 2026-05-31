<?php
include('koneksi.php');
    $No = $_GET ['No'];

// echo $No;

$hapus = mysqli_query($koneksi, "DELETE FROM data Where no='$No' ");

if($hapus == TRUE){
    echo "Berhasil Terhapus dari Database";
    header("location: data.php");
}else{
    echo "Gagal Terhapus";

}

?>