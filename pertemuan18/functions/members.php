<?php 

    class Members {
        public function __construct() {}

        public function getAllMembers(): array {
            $sql = "SELECT * FROM members";
            $data = mysqli_query($GLOBALS['conn'], $sql);
            $data = $data->fetch_all(MYSQLI_ASSOC);

            return $data;
        }

        public function searchMembers($cari = null): array {
            $sql = "SELECT * FROM members WHERE nama LIKE '%$cari%'";
            $data = mysqli_query($GLOBALS['conn'], $sql);
            $data = $data->fetch_all(MYSQLI_ASSOC);
            return $data;
        }

        public function detailMember($id): array {
            $sql = "SELECT * FROM members WHERE id = $id";
            $data = mysqli_query($GLOBALS['conn'], $sql);
            $data = $data->fetch_assoc();
            return $data;
        }

        public function createMember($data): bool {
            $username = $data['username'];

            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $email = $data['email'];
            $role = 'User';
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $no_handphone = $data['no_handphone'];

            $sql = "INSERT INTO members(username, password, email, role, nama, alamat, no_handphone) VALUES ('$username', '$password', '$email', '$role', '$nama', '$alamat', '$no_handphone')";
            $create = mysqli_query($GLOBALS['conn'], $sql);
            
            if($create) {
                header("Location: ".base_url()."/pages/members/index.php");
                exit;
            }

            header("Location: ".base_url()."/pages/members/create.php");
            exit;;
        }

        public function editMember($data): bool {

            $member = $this->detailMember($data['id']);

            $username = $data['username'];
            $password = $data['password'];

            if($data['password'] == '') {
                $password = $member['password'];
            } else {
                $password = password_hash($data['password'], PASSWORD_DEFAULT);
            }

            $email = $data['email'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $no_handphone = $data['no_handphone'];

            $sql = "UPDATE members 
                SET 
                    username = '$username', 
                    password = '$password', 
                    email = '$email', 
                    nama = '$nama', 
                    alamat = '$alamat', 
                    no_handphone = '$no_handphone' 
                WHERE 
                    id = $data[id]
            ";
            $create = mysqli_query($GLOBALS['conn'], $sql);
            
            if($create) {
                header("Location: ".base_url()."/pages/members/index.php");
                exit;
            }

            header("Location: ".base_url()."/pages/members/edit.php");
            exit;;
        }

        public function deleteMember($id): bool {
            $sql = "DELETE FROM members WHERE id = $id";
            $delete = mysqli_query($GLOBALS['conn'], $sql);
            if($delete) {
                header("Location: ".base_url()."/pages/members/index.php");
                exit;
            }
            header("Location: ".base_url()."/pages/members/index.php");
            exit;
        }
    }

?>