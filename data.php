<html>
    <head>
        <title>Data Karyawan</title>
    </head>
    <body>
        <h2>Data Karyawan</h2>
        <p>Berikut ini adalah Data karyawan Yang Terdaftar</p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Divisi</th>
                    <th>NIK</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            include('koneksi.php');

            $data = mysqli_query ($koneksi, "SELECT * 
            FROM data");
            while($baris = mysqli_fetch_array ($data)){

        ?>
                <tr>
                    <td><?php echo $baris['No']; ?></td>
                    <td><?php echo $baris['Nama']; ?></td>
                    <td><?php echo $baris['Jabatan']; ?></td>
                    <td><?php echo $baris['Divisi']; ?></td>
                    <td><?php echo $baris['NIK']; ?></td>
                    <td>
                        <a href="edit.php?No=<?php echo $baris 
                        ['No'] ?>">EDIT</a> 
                        <a href="hapus.php?No=<?php echo $baris 
                        ['No'] ?>">HAPUS</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</html>
