<?php 

    include '../header.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM tblKategori WHERE idKategori = $id";

    $delete = mysqli_query($conn, $sql);

    if($delete)
        header("Location: index.php");

?>