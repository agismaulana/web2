<?php $judul = 'List User Kupon'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/get.php';
    $list_user_coupons = getAllUserCoupons();

    if(isset($_GET['search'])) {
        $keyword = $_GET['keyword'];
        $list_user_coupons = getAllUserCoupons($keyword);
    }

    if(isset($_GET['id']) && $_GET['action'] == 'delete') {
        $id = $_GET['id'];
        deleteUserCoupons($id);
    }

?>

<!-- End Main Function -->


<h1>User Kupon</h1>
<a href="<?= base_url()?>/pages/user-coupons/create.php">Create User Kupon</a>

<form action="" method="GET">
    <input type="text" name="keyword">
    <button type="submit" name="search">Cari</button>
</form>

<br>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Member</th>
            <th>Kupon</th>
            <th>Tgl Mulai</th>
            <th>Tgl Berakhir</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list_user_coupons as $key => $user_coupon) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $user_coupon['member'] ?></td>
                <td><?= $user_coupon['nama_kupon'] ?>(<?= $user_coupon['kode_kupon'] ?>)</td>
                <td><?= $user_coupon['tgl_mulai'] ?></td>
                <td><?= $user_coupon['tgl_berakhir'] ?></td>
                <td>
                    <a href="index.php?id=<?= $user_coupon['id'] ?>&action=delete">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>