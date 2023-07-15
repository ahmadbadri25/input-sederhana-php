<style>
.container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 200px;
  text-align: center;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

p {
  font-size: 18px;
  color: red;
  margin-top: 10px;
}

input[type='submit'] {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
</style>

<?php
// Mengambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

// Memeriksa apakah semua data telah diisi
if (!empty($nama) && !empty($nim) && !empty($jurusan)) {
    // Menyimpan data ke database atau melakukan operasi lainnya
    // ...

    // Menampilkan pesan sukses
    echo "<h2>Pendaftaran Berhasil</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Jurusan: " . $jurusan . "<br>";
} else {
    // Menampilkan pesan error jika ada data yang kosong
    echo "<h2>Pendaftaran Gagal</h2>";
    echo "<p>Silakan lengkapi semua data yang diperlukan.</p>";
}
?>

