<?php 

$value = 'rahadian';
$value2 = "Rahadi Ramadian";

setcookie("username", $value);
setcookie("namalengkap", $value2, time() + 3600); // expire in 1 hour

echo "<h1>Halaman Pembuatan Cookie</h1>";

include 'link.php';