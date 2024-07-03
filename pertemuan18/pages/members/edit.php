<?php $judul = 'Edit Member'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    $form_url = base_url() . '/functions/post.php?action=edit-member';

    include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/get.php';
    $member = detailMembers($_GET['id']);
?>

<!-- End Main Function -->

<h1>Members</h1>
<a href="<?= base_url()?>/pages/members/index.php">List Member</a>

<form action="<?= $form_url;?>" method="POST">
    <input type="hidden" name="id" value="<?= $member['id']; ?>">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="<?= $member['nama']; ?>">
    <br>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" value="<?= $member['email']; ?>">
    <br>
    <label for="no_handphone">No. Handphone</label>
    <input type="text" name="no_handphone" id="no_handphone" value="<?= $member['no_handphone']; ?>">
    <br>
    <label for="username">username</label>
    <input type="text" name="username" id="username" value="<?= $member['username']; ?>">
    <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="alamat">Alamat</label>
    <textarea name="alamat" id="alamat"><?= $member['alamat'];?></textarea>
    <br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>