<?php
include ('koneksi.php');

    $Nama = $_POST ['Nama'];
    $Jabatan = $_POST ['Jabatan'];
    $Divisi = $_POST ['Divisi'];
    $NIK = $_POST ['NIK'];

// echo $Nama . "<br>";
// echo $Jabatan . "<br>";
// echo $Divisi . "<br>";
// echo $NIK . "<br>";

$submit = mysqli_query($koneksi, "INSERT INTO data 
(Nama, Jabatan, Divisi, NIK) VALUES 
('$Nama','$Jabatan','$Divisi','$NIK')");

if($submit == TRUE){
     echo "Berhasil Tersimpan Ke Database";
}else{
    echo "Gagal Tersimpan";

}

?>


