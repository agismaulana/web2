<?php 

    CONST TIMEDATE = 3600;

    setcookie('namalengkap', '', time() - TIMEDATE);
    setcookie('username', '', time() - TIMEDATE);

    echo "<h1>Cookie Berhasil Dihapus</h1>";

    include 'link.php';
