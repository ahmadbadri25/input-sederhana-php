<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Form Pendaftaran Mahasiswa</h2>
        <form action="process.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required>
            <input type="submit" value="Daftar" class="btn-submit">
        </form>
    </div>
</body>

</html>