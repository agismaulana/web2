<?php

    $user = 'admin';
    $pass = md5('admin');

    session_start();

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POSt['password'];

        if(!($username == $user && $password == $pass)) {
            header('location: ./login.php');
        }

        if(isset($_POST['remember']))
            setcookie('login', $user, time() + 3600);

        header('location: ./home.php');
    }

    header('location:./login.php');
    exit;

?>