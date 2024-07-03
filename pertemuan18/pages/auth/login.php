<?php $judul = 'Login'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php'?>

<?php 
    $form_url = base_url()."/functions/post.php?action=login";
?>


<section>
    <form action="<?= $form_url; ?>" method="POST">
        <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>

        <button type="submit" name="submit">Login</button>

        <a href="<?= base_url()?>/pages/auth/register.php">Register</a>

    </form>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php'?>