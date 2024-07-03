<?php 

    session_start();

    if($_SESSION['login'] == false) {
        header("Location: /uas/pages/auth/login.php");
    }
    

    $title = "Home";

    include "./layout/header.php";

?>

    <h1>Home</h1>
    <p>Selemat Datang pada klasemen Sepak Bola</p>

<?php include "./layout/footer.php";?>