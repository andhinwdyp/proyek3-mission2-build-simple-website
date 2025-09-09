<?php
// detail_mahasiswa.php

// Konfigurasi koneksi
$host = "localhost";
$user = "root";     
$pass = "";         
$db   = "akademik_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil parameter nim dari URL
if (isset($_GET['nim'])) {
    $nim = $conn->real_escape_string($_GET['nim']);

    // Query detail mahasiswa
    $sql = "SELECT nim, nama, umur FROM mahasiswa WHERE nim = '$nim'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data mahasiswa tidak ditemukan.";
        exit;
    }
} else {
    echo "NIM tidak diberikan.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>

    <form>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?= $row['nim']; ?>" readonly><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?= $row['nama']; ?>" readonly><br><br>

        <label for="umur">Umur:</label><br>
        <input type="text" id="umur" name="umur" value="<?= $row['umur']; ?>" readonly><br><br>

        <a href="display_dan_view_detail.php">Kembali ke Daftar Mahasiswa</a>
    </form>
</body>
</html>
<?php
$conn->close();
?>
