<?php
    $host     = "localhost";
    $username = "id14361877_root";
    $password = "4fkmSglBMw*#O%}l";
    $database = "id14361877_pesanmakan";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
