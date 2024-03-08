<?php 

    CONST MAKSHADIR     = 18;
    CONST BOBOTHADIR    = 10;
    CONST BOBOTTUGAS    = 20 / 100;
    CONST BOBOTUTS      = 30 / 100;
    CONST BOBOTUAS      = 40 / 100;

    if(isset($_POST['submit'])) {
        $nim            = $_POST['nim'];
        $nama           = $_POST['nama'];
        $matkul         = $_POST['matkul'];
        $hadir          = $_POST['hadir'];
        $nilai_tugas    = $_POST['nilai_tugas'];
        $nilai_uts      = $_POST['nilai_uts'];
        $nilai_uas      = $_POST['nilai_uas'];

        $akumulasi_hadir = BOBOTHADIR;
        if ($hadir < MAKSHADIR) {
            $akumulasi_hadir    = round(BOBOTHADIR - (((MAKSHADIR - $hadir) / MAKSHADIR) * BOBOTHADIR), 2);
        }

        $akumulasi_tugas    = $nilai_tugas * BOBOTTUGAS;
        $akumulasi_uts      = $nilai_uts * BOBOTUTS;
        $akumulasi_uas      = $nilai_uas * BOBOTUAS;
        $nilai_akhir    = $akumulasi_hadir + $akumulasi_tugas + $akumulasi_uts + $akumulasi_uas;

        $keterangan = "Lulus";
        if($nilai_akhir <= 65) {
            $keterangan = "Tidak Lulus";
        }

        if ($nilai_akhir >= 80) {
            $grade = 'A';
        } else if ($nilai_akhir >= 70 && $nilai_akhir < 80) {
            $grade = 'B';
        } else if ($nilai_akhir >= 60 && $nilai_akhir < 70) {
            $grade = 'C';
        } else if ($nilai_akhir >= 50 && $nilai_akhir < 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Nilai Akademik - Pertemuan 3 Tugas 2</title>
</head>
<body>
    <fieldset>
        <legend>Perhitungan Nilai Akademik</legend>
        <form action="" method="POST">
            <label for="jurusan">Nim : </label>
            <input type="text" name="nim"><br/>
            <label for="nama">Nama : </label>
            <input type="text" name="nama"><br/>
            <label for="nama">Mata Kuliah : </label>
            <input type="text" name="matkul"><br/>
            <label for="nama">Jumlah Kehadiran : </label>
            <input type="text" name="hadir"><br/>
            <label for="nilai_tugas">Nilai Tugas : </label>
            <input type="text" name="nilai_tugas"><br/>
            <label for="nilai_uts">Nilai UTS : </label>
            <input type="text" name="nilai_uts"><br/>
            <label for="nilai_uas">Nilai UAS : </label>
            <input type="text" name="nilai_uas"><br/>
            <input type="submit" name="submit" value="Hitung">
        </form>
    </fieldset>

    <center>
        <h2>Nilai Akademik <?= $nilai_akademik ?? ""?></h2>
        <h4>Nama : <?= $nama ?? "-"?></h4>
        <h4>Nim : <?= $nim ?? "-"?></h4>

        <table width="50%">
            <tr>
                <td width="20%">Jumlah Kehadiran</td>
                <td>: <?= $hadir ?? "0"?></td>
                <td width="20%">Nilai Kehadiran</td>
                <td>: <?= $akumulasi_hadir ?? "0"?></td>
            </tr>
            <tr>
                <td width="20%">Nilai Tugas</td>
                <td>: <?= $nilai_tugas ?? "0"?></td>
                <td width="20%">Nilai UTS</td>
                <td>: <?= $nilai_uts ?? "0"?></td>
            </tr>
            <tr>
                <td width="20%">Jumlah UAS</td>
                <td>: <?= $nilai_uas ?? "0"?></td>
                <td width="20%">Jumlah Akhir</td>
                <td>: <?= $nilai_akhir ?? "0"?></td>
            </tr>
            <tr>
                <td width="20%">Grade</td>
                <td>: <?= $grade ?? "-"?></td>
                <td width="20%">Keterangan</td>
                <td>: <?= $keterangan ?? "-"?></td>
            </tr>
        </table>
    </center>
</body>
</html>