<?php 

    include "koneksi.php";
    function search($data) {
        $query = "select * from mahasiswa where nama like '%$data[nama]%' AND jurusan LIKE '%$data[jurusan]%' order by nama ASC";
        $db = mysqli_query($GLOBALS['conn'], $query);
        return $db;
        // return $query;
    }

    // function pagination($query, $page, $total_data) {
    //     $query = $query." LIMIT $total_data OFFSET ".(($page - 1) * $total_data);
    //     $db = mysqli_query($GLOBALS['conn'], $query);
    //     return $db;
    // }

    if(isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $jurusan = $_GET['jurusan'];
        $halaman = $_GET['halaman'];
        $total_data = 2;

        $data = [
            'nama' => $nama,
            'jurusan' => $jurusan,
        ];

        $mahasiswas = search($data);

        // $mahasiswas = pagination($mahasiswas, $halaman, $total_data);

        $mahasiswas = $mahasiswas->fetch_all(MYSQLI_ASSOC);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL PENCARIAN - Pertemuan 13</title>
</head>
<body>
    <a href="index.php">kembali</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswas as $key => $mahasiswa) : ?>

                <tr>
                    <td><?= $key + 1?></td>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['alamat'] ?></td>
                    <td><?= $mahasiswa['jurusan'] ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>