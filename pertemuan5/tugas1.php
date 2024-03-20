<?php 

    const nameFile = "bukutamu.dat";

    if (isset($_POST["kirim"])) {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];

        if (!file_exists(nameFile)) {
            $fp = fopen(nameFile, "w");
            fclose($fp);
        }

        $fp = fopen(nameFile, "a+");
        $txt = "
            Nama : $nama\n
            Email : $email\n
            Komentar : $komentar\n
            ---------------------------------------\n
        ";
        fwrite($fp, $txt);
        fclose($fp);

        echo "Berhasil data buku tamu";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 - Tugas 1</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Buku Tamu</legend>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
            <br/>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br />
            <label for="komentar">Komentar</label>
            <textarea name="komentar" id="komentar"></textarea>
            <br/>
            <input type="submit" name="kirim" value="Kirim">
        </fieldset>
    </form>

</body>
</html>