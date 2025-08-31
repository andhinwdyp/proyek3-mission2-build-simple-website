<?php
    $hostname = "localhost";
    $username = "root";
    $password = ""; 
    $database = "mahasiswa";
    
    $koneksi = mysqli_connect($hostname, $username, $password, $database)or die('error'.mysqli_connect_error());