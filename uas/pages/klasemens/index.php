<?php 

    include $_SERVER['DOCUMENT_ROOT'] . '/uas/functions.php';

    $title = 'Kelasemen';

    if(isset($_GET['action']) && $_GET['action'] == 'delete') {
        deleteKlasemens($_GET['id']);
    }

    $kelasemen = getKlasemens();

    include '../layout/header.php';

?>

    <h1>Kelasemen</h1>
    <p>Data Group A</p>
    <p>Per <?= date('d F Y H:i:s');?></p>
    <p>211011401732</p>

    <a href="cetak.php">Cetak</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Tim</th>
                <th>Menang</th>
                <th>Seri</th>
                <th>Kalah</th>
                <th>Poin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kelasemen as $key => $klasemen) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $klasemen['name'] ?></td>
                    <td><?= $klasemen['winner'] ?? 0 ?></td>
                    <td><?= $klasemen['draw'] ?? 0 ?></td>
                    <td><?= $klasemen['lose'] ?? 0 ?></td>
                    <td><?= $klasemen['poin'] ?? 0 ?></td>
                    <td>
                        <a href="edit.php?id=<?= $klasemen['id'] ?>">Edit</a>
                        <a href="index.php?id=<?= $klasemen['id'] ?>&action=delete" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php include '../layout/footer.php';?>