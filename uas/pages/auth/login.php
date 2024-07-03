
    
<?php 

    $title = "Login";

    include $_SERVER["DOCUMENT_ROOT"] . "/uas/functions.php";

    if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
        header("location: /pages/home.php");
    }

    if(isset($_POST['login'])) {
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        login($data);
    }


    include $_SERVER["DOCUMENT_ROOT"] . "/uas/pages/layout/header.php";

?>

<div>
    <h1>Login</h1>

    <fieldset>
        <legend>Login</legend>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" name="login" value="Login">
        </form>
    </fieldset>
</div>


<?php include $_SERVER["DOCUMENT_ROOT"] . '/uas/pages/layout/footer.php'; ?>