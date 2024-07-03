<?php 

    $user = 'admin';
    $pass = md5('admin');

    session_start();

    if(isset($_COOKIE['login'])) {
        if($_COOKIE['login'] == $user) {
            $_SESSION['login'] = true;

            header('location: ./home.php');
            exit;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pertemuan 16</title>
</head>
<body>
    
    <form action="aksi.php" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>

        <p>
            <label for="remember">
                <input type="checkbox" name="remember" id="remember" value="true">
                Remember Me
            </label>
        </p>

        <button type="submit" name="login">Login</button>
        <button type="reset" name="reset">Reset</button>
    </form>

</body>
</html>