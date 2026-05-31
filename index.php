<mlht>
    <head>
        <title>Data Karyawan</title>
    </head>
    <body>
        <h2>Data Karyawan PT Reynold Lumbantobing</h2>
        <p>Input Data Karyawan</p>
        
        <form method="POST" action="submit.php">
            <label>No :</label>
            <input type="number" name = "No" 
            placeholder= "Isi Dengan Nomor" require>

            <br><br>

            <label>Nama :</label>
            <input type="text" name = "Nama" 
            placeholder= "Isi Dengan Nama" required>

            <br><br>

            <label>Jabatan :</label>
            <input type="text" name = "Jabatan" 
            placeholder= "Isi Dengan Jabatan" required>

            <br><br>

            <label>Divisi :</label>
            <input type="text" name = "Divisi" 
            placeholder= "Isi Dengan Divisi" required>

            <br><br>

            <label>NIK :</label>
            <input type="number" name = "NIK" 
            placeholder= "Isi Dengan NIK" required>

            <br><br>

            <button type="submit" >submit</button>
        </form>
    </body>
</html>
