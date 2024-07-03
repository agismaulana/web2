<?php $judul = 'Create Kupon'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/head.php';?>

<!-- Main Function -->
<?php 
    $form_url = base_url() . '/functions/post.php?action=create-kupon';
?>

<!-- End Main Function -->

<h1>Kupons</h1>
<a href="<?= base_url()?>/pages/coupons/index.php">List Kupon</a>

<form action="<?= $form_url;?>" method="POST">
    <label for="kode_kupon">Kode Kupon</label>
    <input type="text" name="kode_kupon" id="kode_kupon">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="tgl_mulai">Tanggal Mulai</label>
    <input type="date" name="tgl_mulai" id="tgl_mulai">
    <br>
    <label for="tgl_berakhir">Tanggal Mulai</label>
    <input type="date" name="tgl_berakhir" id="tgl_berakhir">
    <br>
    <label for="tipe_kupon">Tipe Kupon</label>
    <select name="tipe_kupon" id="tipe_kupon">
        <option>Pilih Tipe</option>
        <option value="persen">Persen</option>
        <option value="nominal">Nominal</option>
    </select>
    <br>
    <label for="nominal">Nominal</label>
    <input type="number" name="nominal" id="nominal">
    <br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/pertemuan18/pages/layout/foot.php';?>