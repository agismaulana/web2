<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'db_latihan13');

    if(!$conn) {
        die("Gagal terhubung ke database: " . mysqli_connect_error());
    }

?>