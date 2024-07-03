<?php $judul = 'Edit Kupon'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    $form_url = base_url() . '/functions/post.php?action=edit-kupon';

    include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/functions/get.php';
    $kupon = detailKupons($_GET['id']);
?>

<!-- End Main Function -->

<h1>Kupons</h1>
<a href="<?= base_url()?>/pages/coupons/index.php">List Kupon</a>

<form action="<?= $form_url;?>" method="POST">
    <input type="hidden" name="id" value="<?= $kupon['id']; ?>">
    <label for="kode_kupon">Kode Kupon</label>
    <input type="text" name="kode_kupon" id="kode_kupon" value="<?= $kupon['kode_kupon']; ?>">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="<?= $kupon['nama']; ?>">
    <br>
    <label for="tgl_mulai">Tanggal Mulai</label>
    <input type="date" name="tgl_mulai" id="tgl_mulai" value="<?= $kupon['tgl_mulai']; ?>">
    <br>
    <label for="tgl_berakhir">Tanggal Mulai</label>
    <input type="date" name="tgl_berakhir" id="tgl_berakhir" value="<?= $kupon['tgl_berakhir']; ?>">
    <br>
    <label for="tipe_kupon">Tipe Kupon</label>
    <select name="tipe_kupon" id="tipe_kupon" >
        <option>Pilih Tipe</option>
        <option value="persen" <?= $kupon['tipe_kupon'] == 'persen' ? 'selected' : '' ?>>Persen</option>
        <option value="nominal" <?= $kupon['tipe_kupon'] == 'nominal' ? 'selected' : '' ?>>Nominal</option>
    </select>
    <br>
    <label for="nominal">Nominal</label>
    <input type="number" name="nominal" id="nominal" value="<?= $kupon['nominal']; ?>">
    <br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>