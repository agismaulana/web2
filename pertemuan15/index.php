<?php 

session_start();

if(isset($_POST['reset'])) {
    session_destroy();
    header("location:index.php");
}

if(isset($_POST['submit'])) {
    $_SESSION['home'] = $_POST['home'];
    $_SESSION['away'] = $_POST['away'];
    header("location:index.php");
}

$away = $_SESSION['away'] ?? 0;
$home = $_SESSION['home'] ?? 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Pertandingan Bola - Pertemuan 15</title>
</head>
<body>
    <h1>Perhitungan Pertandingan Bola</h1>
    <h2>Score</h2>
    <h2><?= $home ?> vs <?= $away ?></h2>


    <form action="index.php" method="post">
        <label for="home">Score Home</label>
        <input type="number" name="home" id="home" value="<?= $home ?>">
        <br>
        <label for="away">Score Away</label>
        <input type="number" name="away" id="away" value="<?= $away ?>">
        <br>
        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>