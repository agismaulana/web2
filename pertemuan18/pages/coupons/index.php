<?php $judul = 'List Kupon'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/get.php';
    $list_kupons = getAllKupons();

    if(isset($_GET['search'])) {
        $keyword = $_GET['keyword'];
        $list_kupons = getAllKupons($keyword);
    }

    if(isset($_GET['id']) && $_GET['action'] == 'delete') {
        $id = $_GET['id'];
        deleteKupons($id);
    }

?>

<!-- End Main Function -->


<h1>Kupons</h1>
<a href="<?= base_url()?>/pages/coupons/create.php">Create Kupon</a>

<form action="" method="GET">
    <input type="text" name="keyword">
    <button type="submit" name="search">Cari</button>
</form>

<br>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Kupon</th>
            <th>Nama</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Berakhir</th>
            <th>Tipe</th>
            <th>Nominal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list_kupons as $key => $kupon) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $kupon['kode_kupon'] ?></td>
                <td><?= $kupon['nama'] ?></td>
                <td><?= $kupon['tgl_mulai'] ?></td>
                <td><?= $kupon['tgl_berakhir'] ?></td>
                <td><?= $kupon['tipe_kupon'] ?></td>
                <td><?= $kupon['nominal'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $kupon['id'] ?>">Edit</a>
                    <a href="index.php?id=<?= $kupon['id'] ?>&action=delete">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>