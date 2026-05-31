 <?php
    include('koneksi.php');
    $No = $_GET['No'];
    $data = mysqli_query ($koneksi, "SELECT * 
    FROM data WHERE No='$No' ");
    $baris = mysqli_fetch_array ($data);

    ?>

<html>
    <head>
        <title>Data Karyawan</title>
    </head>
    <body>
        <h2>Edit Data</h2>
        <p>Silahkan edit data dibawah ini dengan benar</p>
        
        <form method="POST" action="update.php">
            
            <label>Nama :</label>
            <input value = "<?php echo $baris['Nama']; ?>" type="text" name="Nama" 
            placeholder= "Isi Dengan Nama" required>
            <input name="No" value = "<?php echo $No; ?>" hidden>

            <br><br>

            <label>Jabatan :</label>
            <input value = "<?php echo $baris['Jabatan']; ?>" type="text" name = "Jabatan" 
            placeholder= "Isi Dengan Jabatan" required>

            <br><br>

            <label>Divisi :</label>
            <input value = "<?php echo $baris['Divisi']; ?>" type="text" name = "Divisi" 
            placeholder= "Isi Dengan Divisi" required>

            <br><br>

            <label>NIK :</label>
            <input value = "<?php echo $baris['NIK']; ?>" type="number" name = "NIK" 
            placeholder= "Isi Dengan NIK" required>

            <br><br>

            <button type="submit" >Simpan</button>
        </form>
    </body>
</html>