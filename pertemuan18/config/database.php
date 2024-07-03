<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_latihan18');

if(!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
    exit;
}

?>