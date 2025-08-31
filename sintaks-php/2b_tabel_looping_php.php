<?php
// 2b. Menampilkan Tabel dengan Looping PHP (dinamis)
$mahasiswa = [
  ["nim" => "24151101", "nama" => "Andhini",    "prodi" => "Teknik Informatika",       "ipk" => 3.70],
  ["nim" => "24151102", "nama" => "Widya",  "prodi" => "Teknik Informatika",  "ipk" => 3.65],
  ["nim" => "24151103", "nama" => "Putri",   "prodi" => "Teknik Informatika",   "ipk" => 3.55],
  ["nim" => "24151104", "nama" => "Wastika",  "prodi" => "Teknik Informatika","ipk" => 3.50],
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2b. Tabel HTML Looping PHP</title>
  <style>
    body{font-family:system-ui;margin:2rem;}
    table{border-collapse:collapse;width:100%;max-width:820px}
    th,td{border:1px solid #ddd;padding:.6rem;text-align:left}
    th{background:#f2f2f2}
    tfoot td{font-weight:bold}
  </style>
</head>
<body>
  <h1>2b. Tabel HTML dengan Looping PHP (dinamis)</h1>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>IPK</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($mahasiswa)): ?>
        <tr><td colspan="5">Tidak ada data.</td></tr>
      <?php else: ?>
        <?php $no = 1; $totalIpk = 0; ?>
        <?php foreach ($mahasiswa as $m): ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= htmlspecialchars($m["nim"]) ?></td>
            <td><?= htmlspecialchars($m["nama"]) ?></td>
            <td><?= htmlspecialchars($m["prodi"]) ?></td>
            <td><?= number_format($m["ipk"], 2) ?></td>
          </tr>
          <?php $totalIpk += $m["ipk"]; $no++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4">Rata-rata IPK</td>
        <td>
          <?php
            $avg = count($mahasiswa) ? $totalIpk / count($mahasiswa) : 0;
            echo number_format($avg, 2);
          ?>
        </td>
      </tr>
    </tfoot>
  </table>
  <p><a href="index.php">Kembali</a></p>
</body>
</html>
