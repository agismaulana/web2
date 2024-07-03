<?php 

if(isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada isinya $_COOKIE[username] </h1>";
} else { 
    echo "<h1>Cookie 'username' tidak ada</h1>";
}

if (isset($_COOKIE['namalengkap']))
    echo "<h1>Cookie 'namalengkap' ada isinya $_COOKIE[namalengkap] </h1>";
else 
    echo "<h1>Cookie 'namalengkap' tidak ada</h1>";

include 'link.php';


?>