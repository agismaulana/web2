<?php $judul = 'Register'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php'?>
<?php 
    $form_url = base_url()."/functions/post.php?action=register";
?>


<section>
    <form action="<?= $form_url; ?>" method="POST">
        <h3>Register</h3>

        <label for="name">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>

        <button type="submit" name="submit">Register</button>
        <a href="<?= base_url()?>/pages/auth/login.php">Login</a>
    </form>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php'?>