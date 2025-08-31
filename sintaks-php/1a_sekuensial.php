<?php
// 1a. Program PHP: Instruksi Berurutan
// Baca input (aman) dari query string: ?nama=...&umur=...
$nama = filter_input(INPUT_GET, 'nama', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Andhini';
$umur = filter_input(INPUT_GET, 'umur', FILTER_VALIDATE_INT);
if ($umur === null || $umur === false) { $umur = 19; }

// Hitung umur tahun depan (urutan langkah: baca -> proses -> tampil)
$umur_tahun_depan = $umur + 1;
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>1a. Instruksi Berurutan</title>
  <style>body{font-family:system-ui;margin:2rem;}</style>
</head>
<body>
  <h1>1a. Instruksi Berurutan</h1>
  <p>Nama: <strong><?= $nama ?></strong></p>
  <p>Umur: <strong><?= $umur ?></strong></p>
  <p>Umur Tahun Depan: <strong><?= $umur_tahun_depan ?></strong></p>
  <hr>
  <p><a href="index.php">Kembali</a></p>
</body>
</html>
