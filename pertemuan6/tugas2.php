<?php 

    const nama_file = "tugas2.json";

    $array = [];
    if(file_exists(nama_file)) {
        $data = file_get_contents(nama_file);
        $array = json_decode($data, true);

        if($array == null) {
            $array = [];
        }
    }

    if(isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $array[] = [
            'alas' => $alas,
            'tinggi' => $tinggi
        ];

        $data = json_encode($array);
        file_put_contents(nama_file, $data);
    }

    if(isset($_POST['reset'])) {
        reset_array();
    }

    function luas_segitiga($a, $t) {
        return ($a * $t) / 2;
    }

    function reset_array() {
        $array = [];
        $data = json_encode($array);
        file_put_contents(nama_file, $data);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6 - Tugas 2</title>
</head>
<body>

<form action="" method="post">
    <button name="reset" type="submit">Reset</button>
</form>

    
<form action="" method="post">
    <fieldset>
        <legend>Input Luas Segitiga</legend>
        <label for="alas">Alas</label>
        <input type="number" name="alas" id="alas">
        <br/>
        <label for="tinggi">Tinggi</label>
        <input type="number" name="tinggi" id="tinggi">
        <br/>
        <button name="submit" type="submit">Tambah</button>
    </fieldset>
</form>

<br/>
<br/>

<table width="50%" align="center" border="1">
    <thead>
        <tr>
            <th>Segitiga Ke - </th>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($array as $key => $data) : ?>
            <tr>
                <td><?= $key + 1?></td>
                <td><?= $data['alas'] ?></td>
                <td><?= $data['tinggi'] ?></td>
                <td><?= luas_segitiga($data['alas'], $data['tinggi']) ?></td>
            </tr>

        <?php endforeach;?>
    </tbody>
</table>

</body>
</html>