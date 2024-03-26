<?php 

    $perhitungan = 0;
    if (isset($_POST['submit'])) {
        switch ($_POST['operasi']) {
            case "+": 
                $perhitungan = $_POST['angka1'] + $_POST['angka2'];
                break;
            case "-": 
                $perhitungan = $_POST['angka1'] - $_POST['angka2'];
                break;
            case "*": 
                $perhitungan = $_POST['angka1'] * $_POST['angka2'];
                break;
            case "/": 
                $perhitungan = $_POST['angka1'] / $_POST['angka2'];
                break;
            case "%": 
                $perhitungan = $_POST['angka1'] % $_POST['angka2'];
                break;
            default: 
                $perhitungan = "Operasi Tidak Ditemukan";
                break;
        };
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Aritmatika - Pertemuan 2 Tugas 2</title>
</head>
<body>

    <fieldset>
        <form action="" method="POST">
            <legend>Penilaian Aritmatika</legend>
            <input type="number" name="angka1">
            <select name="operasi" id="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" name="angka2">
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
    <section>
        <p>Hasil Dari Perhitungan Aritmatika adalah : <?= $perhitungan; ?></p>
    </section>
</body>
</html>