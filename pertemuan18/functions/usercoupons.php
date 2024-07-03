<?php

class UserCoupons {

    public function __construct() {}

    public function getAllUserCoupons() {
        $sql = "SELECT user_kupon.*, members.nama as member, kupon.kode_kupon, kupon.nama as nama_kupon, kupon.tgl_mulai, kupon.tgl_berakhir FROM user_kupon LEFT JOIN members ON user_kupon.member_id = members.id LEFT JOIN kupon ON user_kupon.kupon_id = kupon.id";
        $data = mysqli_query($GLOBALS['conn'], $sql);
        $data = $data->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function searchUserCoupons($cari = null) {
        $sql = "SELECT user_kupon.*, members.nama as member, kupon.kode_kupon, kupon.nama as nama_kupon, kupon.tgl_mulai, kupon.tgl_berakhir FROM user_kupon LEFT JOIN members ON user_kupon.member_id = members.id LEFT JOIN kupon ON user_kupon.kupon_id = kupon.id WHERE members.nama LIKE '%$cari%' OR kupon.kode_kupon LIKE '%$cari%' OR kupon.nama LIKE '%$cari%'";
        $data = mysqli_query($GLOBALS['conn'], $sql);
        $data = $data->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function createUserCoupon($data) {
        $sql = "INSERT INTO user_kupon (member_id, kupon_id) VALUES ($data[member_id], $data[kupon_id])";
        $create = mysqli_query($GLOBALS['conn'], $sql);

        if($create) {
            header("Location: ".base_url()."/pages/user-coupons/index.php");
            exit;
        }

        header("Location: ".base_url()."/pages/user-coupons/index.php");
        exit;
    }

    public function deleteUserCoupon($id) {
        $sql = "DELETE FROM user_kupon WHERE id = $id";
        $delete = mysqli_query($GLOBALS['conn'], $sql);

        if($delete) {
            header("Location: ".base_url()."/pages/user-coupons/index.php");
            exit;
        }
        header("Location: ".base_url()."/pages/user-coupons/index.php");
        exit;
    }
}