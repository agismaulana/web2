<?php 

    include $_SERVER['DOCUMENT_ROOT'] . '/uas/functions.php';

    $title = "group";
    
    include "../layout/header.php";

    if(isset($GET['action']) && $_GET['action'] == 'delete') {
        deleteGroup($_GET['id']);
    }

    $groups = getGroups();
    
?>

<h1>Groups</h1>

<a href="create.php">Tambah Group</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($groups as $key => $group) : ?>
            <tr>
                <td><?= $key + 1;?></td>
                <td><?= $group['name']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $group['id']; ?>">Edit</a>
                    <a href="index.php?id=<?= $group['id']; ?>&action=delete" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "../layout/footer.php"; ?>