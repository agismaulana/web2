<?php 

    $nama = "-";
    $jurusan = "-";
    $nilai_tugas = 0;
    $nilai_uts = 0;
    $nilai_uas = 0;
    $total = 0;
    $rata_rata = 0;

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $total = $nilai_tugas + $nilai_uts + $nilai_uas;
        $rata_rata = $total / 3;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Sederhana - Pertemuan 2 Tugas 1</title>
</head>
<body>
    <ul>
        <li>
            <a href="tugas1.php">Tugas 1</a>
        </li>
        <li>
            <a href="tugas2.php">Tugas 2</a>
        </li>
    </ul>

    <fieldset>
        <legend>Data yang diinput</legend>
        <form action="" method="POST">
            <label for="nama">Nama : </label>
            <input type="text" name="nama"><br/>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan"><br/>
            <label for="nilai_tugas">Nilai Tugas : </label>
            <input type="text" name="nilai_tugas"><br/>
            <label for="nilai_uts">Nilai UTS : </label>
            <input type="text" name="nilai_uts"><br/>
            <label for="nilai_uas">Nilai UAS : </label>
            <input type="text" name="nilai_uas"><br/>
            <input type="submit" name="submit" value="Hitung">
        </form>
    </fieldset>

    <section>
        <fieldset>
            <legend>Informasi Data</legend>
            <table width="50%">
                <tr>
                    <td>Nama</td>
                    <td>: <?= $nama ?></td>
                    <td>Jurusan</td>
                    <td>: <?= $jurusan ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>: <?= $nilai_tugas ?></td>
                    <td>Nilai UTS</td>
                    <td>: <?= $nilai_uts ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>: <?= $nilai_uas ?></td>
                    <td>Rata-rata</td>
                    <td>: <?= $rata_rata ?></td>
                </tr>
            </table>
        </fieldset>
    </section>
</body>
</html>