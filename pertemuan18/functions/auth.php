<?php

class Auth {
    public function login(string $username, string $password) {
        $cek_members = mysqli_query($GLOBALS['conn'], "SELECT * FROM members WHERE username = '$username'");
        $member = mysqli_fetch_assoc($cek_members);

        if(!$member || $member == NULL) {
            header("location: ".base_url()."/pages/auth/login.php");
            exit;
        }

        if(!password_verify($password, $member['password'])) {
            header("location: ".base_url()."/pages/auth/login.php");
            exit;
        }

        $_SESSION['username'] = $member['username'];
        $_SESSION['role'] = $member['role'];
        $_SESSION['login'] = true;

        header("location: ".base_url()."/pages/dashboard/home.php");
        exit;
    }

    public function register(array $data): void {
        $username = $data['username'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $nama = $data['nama'];
        $role = 'User';

        $create_member = mysqli_query($GLOBALS['conn'], "INSERT INTO members(username, password, nama, role) VALUES('$username', '$password', '$nama', '$role')");
    
        if($create_member) {
            $_SESSION['success'] = "Berhasilt";
            header("location: ".base_url()."/pages/auth/login.php");
            exit;
        }

        $_SESSION['error'] = "Gagal";
        header("location: ".base_url()."/pages/auth/register.php");
        exit;
    }

    public function logout() {

        var_dump('logout');

        session_unset();
        session_destroy();
        header("location: ".base_url()."/pages/auth/login.php");
        exit;
    }
}