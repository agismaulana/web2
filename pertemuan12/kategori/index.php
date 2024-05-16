<?php 

    include '../header.php';

    $query = "SELECT * FROM tblKategori";
    $data = mysqli_query($conn, $query);
    $data = $data->fetch_all(MYSQLI_ASSOC);

?>


<section>
    <h1>Data Kategori</h1>
    <a href="create.php">Tambah</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kategori</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($data as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['nama_kategori'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $value['idKategori'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $value['idKategori'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</section>

<?php 

    include '../footer.php';
?>