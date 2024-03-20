<?php 

    if(isset($_POST['submit'])) {
        $angka_awal = $_POST['nilai_awal'];
        $angka_akhir = $_POST['nilai_akhir'];

        $deret_bilangan = "";
        $jumlah_bilangan = 0;
        $jumlah_nilai_bilangan = "";
        $jumlah_deret_bilangan = 0;
        for ($i = $angka_awal; $i <= $angka_akhir; $i++) {
            if($i % 3 == 0) {
                $deret_bilangan .= $i . ", ";
                $jumlah_bilangan++;
                $jumlah_nilai_bilangan .= $i . " + ";
                $jumlah_deret_bilangan += $i;
            }
        }

        $jumlah_nilai_bilangan .= $jumlah_nilai_bilangan . " = " . $jumlah_deret_bilangan;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 - Tugas 1 </title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Deret Bilangan</legend>
            <label for="nilai_awal">Nilai awal</label>
            <input type="number" name="nilai_awal"><br>
            <label for="nilai_akhir">Nilai Akhir</label>
            <input type="number" name="nilai_akhir"><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>

    <p>Deret Bilangan : <?= $deret_bilangan ?? ""; ?></p>
    <p>Jumlah Bilangan : <?= $jumlah_bilangan ?? ""; ?></p>
    <p>Jumlah Nilai Bilangan : <?= $jumlah_nilai_bilangan ?? ""; ?></p>
</body>
</html>