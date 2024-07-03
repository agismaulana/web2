<?php $judul = 'Create User Kupon'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    $form_url = base_url() . '/functions/post.php?action=create-user-kupon';

    include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/get.php';
    $list_members = getAllMembers();
    $list_kupons = getAllKupons();

?>

<!-- End Main Function -->

<h1>Kupons</h1>
<a href="<?= base_url()?>/pages/coupons/index.php">List User Kupon</a>

<form action="<?= $form_url;?>" method="POST">
    <select name="member_id" id="member_id">
        <option>Pilih Member</option>
        <?php foreach($list_members as $key => $value) : ?>
            <option value="<?= $value['id'] ?>"><?= $value['nama'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <select name="kupon_id" id="kupon_id">
        <option>Pilih Kupon</option>
        <?php foreach($list_kupons as $key => $value) : ?>
            <option value="<?= $value['id'] ?>"><?= $value['nama'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>