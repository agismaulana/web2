<?php

class Coupons {

    public function __construct() {}

    public function getAllKupons(): array {
        $sql = "SELECT * FROM kupon";
        $data = mysqli_query($GLOBALS['conn'], $sql);
        $data = $data->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function searchKupons($cari = null): array {
        $sql = "SELECT * FROM kupon WHERE nama LIKE '%$cari%'";
        $data = mysqli_query($GLOBALS['conn'], $sql);
        $data = $data->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function detailKupon($id): array {
        $sql = "SELECT * FROM kupon WHERE id = $id";
        $data = mysqli_query($GLOBALS['conn'], $sql);
        $data = $data->fetch_assoc();
        return $data;
    }

    public function createKupon($data): bool {
        $kode_kupon = $data['kode_kupon'];
        $nama = $data['nama'];
        $tgl_mulai = $data['tgl_mulai'];
        $tgl_berakhir = $data['tgl_berakhir'];
        $tipe_kupon = $data['tipe_kupon'];
        $nominal = $data['nominal'];

        $sql = "INSERT INTO kupon(kode_kupon, nama, tgl_mulai, tgl_berakhir, tipe_kupon, nominal) VALUES ('$kode_kupon', '$nama', '$tgl_mulai', '$tgl_berakhir', '$tipe_kupon', '$nominal')";
        $create = mysqli_query($GLOBALS['conn'], $sql);
        
        if($create) {
            header("Location: ".base_url()."/pages/coupons/index.php");
            exit;
        }

        header("Location: ".base_url()."/pages/coupons/create.php");
        exit;;
    }

    public function editKupon($data): bool {

        $kupon = $this->detailKupon($data['id']);

        $kode_kupon = $data['kode_kupon'];
        $nama = $data['nama'];
        $tgl_mulai = $data['tgl_mulai'];
        $tgl_berakhir = $data['tgl_berakhir'];
        $tipe_kupon = $data['tipe_kupon'];
        $nominal = $data['nominal'];

        $sql = "UPDATE kupon 
            SET 
                kode_kupon = '$kode_kupon',
                nama = '$nama',
                tgl_mulai = '$tgl_mulai',
                tgl_berakhir = '$tgl_berakhir',
                tipe_kupon = '$tipe_kupon',
                nominal = '$nominal'
            WHERE 
                id = $data[id]
        ";
        $create = mysqli_query($GLOBALS['conn'], $sql);
        
        if($create) {
            header("Location: ".base_url()."/pages/coupons/index.php");
            exit;
        }

        header("Location: ".base_url()."/pages/coupons/edit.php");
        exit;;
    }

    public function deleteKupon($id): bool {
        $sql = "DELETE FROM kupon WHERE id = $id";
        $delete = mysqli_query($GLOBALS['conn'], $sql);
        if($delete) {
            header("Location: ".base_url()."/pages/coupons/index.php");
            exit;
        }
        header("Location: ".base_url()."/pages/coupons/index.php");
        exit;
    }
}

?>