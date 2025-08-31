<?php
// 2a. Menampilkan Tabel HTML dengan PHP (tanpa looping)
// Data statis (baris ditulis manual)
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2a. Tabel HTML dengan PHP</title>
  <style>
    body{font-family:system-ui;margin:2rem;}
    table{border-collapse:collapse;width:100%;max-width:720px}
    th,td{border:1px solid #ddd;padding:.6rem;text-align:left}
    th{background:#f2f2f2}
  </style>
</head>
<body>
  <h1>2a. Tabel HTML dengan PHP (statis)</h1>
  <table>
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>IPK</th>
      </tr>
    </thead>
    <tbody>
      <?php
      echo "<tr><td>24151101</td><td>Andhini</td><td>Teknik Informatika</td><td>3.85</td></tr>";
      echo "<tr><td>24151102</td><td>Widya</td><td>Teknik Informatika</td><td>3.70</td></tr>";
      echo "<tr><td>24151103</td><td>Putri</td><td>Teknik Informatika</td><td>3.55</td></tr>";
      ?>
    </tbody>
  </table>
  <p><a href="index.php">Kembali</a></p>
</body>
</html>
