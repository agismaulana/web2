<?php

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/config/database.php';

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/auth.php';
$auth = new Auth();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/members.php';
$members = new Members();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/coupons.php';
$kupons = new Coupons();

include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/usercoupons.php';
$user_kupon = new UserCoupons();

function getAllMembers($cari = null): iterable {
    if($cari) {
        return $GLOBALS['members']->searchMembers($cari);
    }

    return $GLOBALS['members']->getAllMembers();
}

function detailMembers(int $id): array {
    return $GLOBALS['members']->detailMember($id);
}

function deleteMembers(int $id): void {
    $GLOBALS['members']->deleteMember($id);
    exit;
}

function getAllKupons($cari = null): iterable {
    if($cari) {
        return $GLOBALS['kupons']->searchKupons($cari);
    }

    return $GLOBALS['kupons']->getAllKupons();
}

function detailKupons(int $id): array {
    return $GLOBALS['kupons']->detailKupon($id);
}

function deleteKupons(int $id): void {
    $GLOBALS['kupons']->deleteKupon($id);
    exit;
}

function getAllUserCoupons($cari = null): iterable {
    if($cari) {
        return $GLOBALS['user_kupon']->searchUserCoupons($cari);
    }

    return $GLOBALS['user_kupon']->getAllUserCoupons();
}

function deleteUserCoupons(int $id): array {
    return $GLOBALS['user_kupon']->deleteUserCoupon($id);
}

function logout(): void {
    $GLOBALS['auth']->logout();
    exit;
}