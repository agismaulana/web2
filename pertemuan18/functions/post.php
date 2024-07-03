<?php

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/config/session.php';
include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/config/database.php';

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/auth.php';
$auth = new Auth();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/members.php';
$members = new Members();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/coupons.php';
$kupons = new Coupons();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/usercoupons.php';
$user_kupon = new UserCoupons();

function login() {
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $GLOBALS['auth']->login($username, $password);
        exit;
    };
}

function register() {
    if(isset($_POST['submit'])) {
        $data = $_POST;
        $GLOBALS['auth']->register($data);
        exit;
    };
}


function createMember() {
    if(isset($_POST['submit'])) {
        $data = $_POST;
        $GLOBALS['members']->createMember($data);
        exit;
    };
}

function editMember() {
    if(isset($_POST['submit'])) {
        $data = $_POST;
        $GLOBALS['members']->editMember($data);
        exit;
    };
}

function createKupon() {
    if(isset($_POST['submit'])) {
        $data = $_POST;
        $GLOBALS['kupons']->createKupon($data);
        exit;
    };
}

function editKupon() {
    if(isset($_POST['submit'])) {
        $data = $_POST;
        $GLOBALS['kupons']->editKupon($data);
        exit;
    };
}

function createUserKupon() {
    if(isset($_POST['submit'])) {
        $data = $_POST;
        $GLOBALS['user_kupon']->createUserCoupon($data);
        exit;
    };
}

switch($_GET['action']) {
    // Start Auth
    case 'login' : 
    case 'Login' : 
        login();
    case 'register' :
    case 'Register' :
        register();
    // End Auth

    // Start Members
    case 'create-member':
        createMember();
    case 'edit-member':
        editMember();
    // End Members

    // Start Kupon
    case 'create-kupon':
        createKupon();
    case 'edit-kupon':
        editKupon();
    // End Kupon

    // Start User Kupon
    case 'create-user-kupon':
        createUserKupon();
    // End User Kupon
}