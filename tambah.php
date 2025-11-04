<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['npm'];

    $sql = "INSERT INTO mahasiswa (nama, npm) VALUES ('$nama', '$npm')";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    NPM: <input type="text" name="npm"><br>
    <input type="submit" name="submit" value="Tambah Data">
</form>
