<?php 

    session_start();

    if(!isset($_SESSION['login']))
        header('location: ./login.php')
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pertemuan 16</title>
</head>
<body>
    <h5>Selamat datang di halaman utama website</h5>
    <p>
        <a href="logout.php">Logout</a>
    </p>

    <a href="lihat_cookie.php">Lihat Cookie</a>
</body>
</html>