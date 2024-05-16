<?php 

    include '../header.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM tblBerita WHERE idBerita = $id";

    $delete = mysqli_query($conn, $sql);

    if($delete)
        header("Location: index.php");

?>