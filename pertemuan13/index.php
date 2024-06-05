<?php 

$conn = mysqli_connect('localhost', 'root', '', 'db_latihan13');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - Pertemuan 13</title>
</head>
<body>
    <h3>Contoh Program Mencari Record berdasarkan field nama</h3>
    <form action="search.php" method="GET">
        <section>
            <label for="search">Masukkan Nama : </label>
            <input type="text" name="nama">
        </section>
        <br>
        <section>
            <label for="search">Masukkan Jurusan : </label>
            <input type="text" name="jurusan">
        </section>
    
        <button type="submit" name="submit">Search</button>
        <button type="reset">hapus</button>
    </form>
</body>
</html>