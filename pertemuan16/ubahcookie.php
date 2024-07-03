<?php 

$value = 'joko';
$value2 = "Joko Susilo";

setcookie("username", $value);
setcookie("namalengkap", $value2, time() + 3600); // expire in 1 hour

echo "<h1>Halaman Ubah Cookie</h1>";

include 'link.php';