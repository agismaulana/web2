<?php 

session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/helpers/helper.php';

function is_login() {
    if (isset($_SESSION['login'])) {
        header("location: ".base_url()."/pages/dashboard/home.php");
    } 
}

function is_not_login() {
    if (!isset($_SESSION['login'])) {
        header("location: ".base_url()."/pages/auth/login.php");
    }
}

?>