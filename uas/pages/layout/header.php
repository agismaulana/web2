<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasemen | <?= $title; ?></title>
</head>
<body>

<?php if($_SESSION['login'] == true) : ?>
    <ul>
        <li><a href="/uas/index.php">Home</a></li>
        <!-- <li><a href="/uas/pages/groups/index.php">group</a></li>
        <li><a href="/uas/pages/countries/index.php">negara</a></li> -->
        <li><a href="/uas/pages/klasemens/index.php">klasemen</a></li>
        <li><a href="/uas/pages/auth/logout.php">Logout</a></li>
    </ul>
<?php endif;?>