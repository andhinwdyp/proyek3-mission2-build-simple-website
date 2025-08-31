<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="biodata.php" method="post">
        <fieldset>
            <legend>FORM BIODATA</legend>

            <label>NIM:</label>
            <input type="text" name="nim" id="nim" placeholder="EX. 123456789"require><br><br><br>
            
            <label>NAMA:</label>
            <input type="text" name="nama" id="name" placeholder="EX. NAMA"require><br><br><br>
            
            <label>JENIS KELAMIN:</label>
            <input type="radio" name="jk" id="jenis_kelamin" value="L"> L
            <input type="radio" name="jk" id="jenis_kelamin" value="P"> P<br><br><br>
            
            <label>TANGGAL LAHIR:</label>
            <input type="date" name="tgl" id="tanggal_lahir" require><br><br>
            
            <input type="submit" value="SUBMIT">
        </fieldset>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tgl = $_POST['tgl'];

            echo "<h2>BIODATA MAHASISWA</h2>";
            echo "NIM : " . $nim . "<br>";
            echo "NAMA : " . $nama . "<br>";
            echo "JENIS KELAMIN : " . $jk . "<br>";
            echo "TANGGAL LAHIR : " . $tgl . "<br>";
        }
    ?>

</body>
</html>
