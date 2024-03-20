<?php 

$array = [
    [
        "alas" => 12,
        "tinggi" => 30
    ],
    [
        "alas" => 8,
        "tinggi" => 10
    ],
    [
        "alas" => 5,
        "tinggi" => 3
    ],
    [
        "alas" => 7,
        "tinggi" => 21
    ],
    [
        "alas" => 28,
        "tinggi" => 10
    ],
];

function luas_segitiga($a, $t) {
    return ($a * $t) / 2;
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
    <br/>
    <br/>
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