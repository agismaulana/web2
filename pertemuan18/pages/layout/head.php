<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/config/session.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Kupon | <?= $judul ?></title>
</head>
<body>

<?php if(isset($_SESSION['login']) ) : ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/navbar.php';?>
<?php endif; ?>