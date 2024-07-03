<?php $judul = 'List Members'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/get.php';
    $list_members = getAllMembers();

    if(isset($_GET['search'])) {
        $keyword = $_GET['keyword'];
        $list_members = getAllMembers($keyword);
    }

    if(isset($_GET['id']) && $_GET['action'] == 'delete') {
        $id = $_GET['id'];
        deleteMembers($id);
    }

?>

<!-- End Main Function -->


<h1>Members</h1>
<a href="<?= base_url()?>/pages/members/create.php">Create Member</a>

<form action="" method="GET">
    <input type="text" name="keyword">
    <button type="submit" name="search">Cari</button>
</form>

<br>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list_members as $key => $member) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $member['nama'] ?></td>
                <td><?= $member['email'] ?></td>
                <td><?= $member['role'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $member['id'] ?>">Edit</a>
                    <a href="index.php?id=<?= $member['id'] ?>&action=delete">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>