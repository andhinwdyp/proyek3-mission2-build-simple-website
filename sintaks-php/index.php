<?php
// Simple index to navigate the examples
$examples = [
    "1a_sekuensial.php" => "1a. Program PHP: Instruksi Berurutan",
    "1b_pemilihan.php"  => "1b. Program PHP: Instruksi Pemilihan",
    "1c_pengulangan.php"=> "1c. Program PHP: Instruksi Pengulangan",
    "2a_tabel_html_php.php" => "2a. Menampilkan Tabel HTML dengan PHP (statis)",
    "2b_tabel_looping_php.php" => "2b. Menampilkan Tabel HTML dengan Looping PHP (dinamis)",
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mission 2 - Contoh PHP</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; margin: 2rem; line-height: 1.5; }
    a { text-decoration: none; }
    ul { padding-left: 1.25rem; }
    li + li { margin-top: .5rem; }
    code { background: #f5f5f5; padding: .15rem .35rem; border-radius: .35rem; }
  </style>
</head>
<body>
  <h1>Mission 2 - PHP</h1>
  <ul>
    <?php foreach($examples as $file => $label): ?>
        <li><a href="<?= htmlspecialchars($file) ?>"><?= htmlspecialchars($label) ?></a></li>
    <?php endforeach; ?>
  </ul>
  <hr>
</body>
</html>
