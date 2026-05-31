<?php
include ('koneksi.php');

    $No = $_POST ['No'];
    $Nama = $_POST ['Nama'];
    $Jabatan = $_POST ['Jabatan'];
    $Divisi = $_POST ['Divisi'];
    $NIK = $_POST ['NIK'];

// echo $Nama . "<br>";
// echo $Jabatan . "<br>";
// echo $Divisi . "<br>";
// echo $NIK . "<br>";

$update = mysqli_query($koneksi, "UPDATE data SET Nama='$Nama',Jabatan='$Jabatan',
Divisi='$Divisi',NIK='$NIK' WHERE No='$No' ");

if($update == TRUE){
    echo "Berhasil Terupdate Ke Database";
    header("location: data.php");
}else{
    echo "Gagal Tersimpan";

}

?>
