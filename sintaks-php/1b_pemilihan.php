<?php
// 1b. Program PHP: Instruksi Pemilihan (if/elseif + switch)
// Ambil nilai dari query string: ?nilai=...
$nilai = filter_input(INPUT_GET, 'nilai', FILTER_VALIDATE_INT);
if ($nilai === null || $nilai === false) { $nilai = 85; }

// If/elseif untuk menentukan grade
if ($nilai >= 85) {
    $grade = 'A';
} elseif ($nilai >= 70) {
    $grade = 'B';
} elseif ($nilai >= 55) {
    $grade = 'C';
} elseif ($nilai >= 40) {
    $grade = 'D';
} else {
    $grade = 'E';
}

// Switch untuk memberi predikat berdasarkan grade
switch ($grade) {
    case 'A': $predikat = 'Sangat Baik'; break;
    case 'B': $predikat = 'Baik'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    default:  $predikat = 'Sangat Kurang'; break;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>1b. Instruksi Pemilihan</title>
  <style>body{font-family:system-ui;margin:2rem;} .box{background:#f7f7f7;padding:1rem;border-radius:.5rem}</style>
</head>
<body>
  <h1>1b. Instruksi Pemilihan</h1>
  <div class="box">
    <p>Nilai: <strong><?= $nilai ?></strong></p>
    <p>Grade: <strong><?= $grade ?></strong></p>
    <p>Predikat: <strong><?= $predikat ?></strong></p>
  </div>
  <hr>
  <p><a href="index.php">Kembali</a></p>
</body>
</html>
