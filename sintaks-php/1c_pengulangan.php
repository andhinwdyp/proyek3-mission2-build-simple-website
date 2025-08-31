<?php
// 1c. Contoh Instruksi Pengulangan: for, while, foreach
$n = filter_input(INPUT_GET, 'n', FILTER_VALIDATE_INT);
if ($n === null || $n === false || $n < 1) { $n = 5; }

$buah = ['Strawberry', 'Blueberry', 'Raspberry', 'Blackberry', 'Cranberry']; // array sederhana
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>1c. Instruksi Pengulangan</title>
  <style>body{font-family:system-ui;margin:2rem;} ul{padding-left:1.2rem}</style>
</head>
<body>
  <h1>1c. Instruksi Pengulangan</h1>

  <h2>for: Cetak angka 1 sampai <?= $n ?></h2>
  <ul>
    <?php for ($i = 1; $i <= $n; $i++): ?>
      <li>Angka ke-<?= $i ?></li>
    <?php endfor; ?>
  </ul>

  <h2>while: Hitung mundur dari <?= $n ?></h2>
  <ul>
    <?php $j = $n; while ($j >= 1): ?>
      <li><?= $j ?></li>
      <?php $j--; endwhile; ?>
  </ul>

  <h2>foreach: Daftar Buah</h2>
  <ul>
    <?php foreach ($buah as $b): ?>
      <li><?= htmlspecialchars($b) ?></li>
    <?php endforeach; ?>
  </ul>

  <hr>
  <p><a href="index.php">Kembali</a></p>
</body>
</html>
