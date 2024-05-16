<?php 

    include '../header.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM tblBerita WHERE idBerita = '$id'";
    $query = mysqli_query($conn, $sql);
    $berita = $query->fetch_array(MYSQLI_ASSOC);

    $sql = "SELECT * FROM tblKategori";
    $query = mysqli_query($conn, $sql);
    $kategori = $query->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $idKategori = $_POST['kategori'];
        $isi = $_POST['isi'];
        $penulis = $_POST['penulis'];
        $tanggal = $_POST['tanggal'];

        $sql = "UPDATE tblBerita SET judulBerita = '$judul', isiBerita = '$isi', penulis = '$penulis', tgldipublish = '$tanggal', idKategori = '$idKategori' WHERE idBerita = '$id'";
        $tambah = mysqli_query($conn, $sql);

        if($tambah) {
            header("Location: index.php");
        }
    }

?>

<section>
    <form action="edit.php?id=<?= $id ?>" method="POST">
        <fieldset>
            <legend>Tambah Kategori</legend>

            <label for="judul">judul berita</label>
            <input type="text" name="judul" id="judul" value="<?= $berita['judulBerita'] ?>" required>
            <br>

            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori">
                <option>Pilih Kategori</option>

                <?php foreach($kategori as $key => $value) : ?>
                    <option value="<?= $value['idKategori'] ?>" <?= $value['idKategori'] == $berita['idKategori'] ? 'selected' : ''?>><?= $value['nama_kategori'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>

            <label for="isi">isi berita</label>
            <textarea name="isi" id="isi" cols="30" rows="10"><?= $berita['isiBerita'] ?></textarea>
            <br>

            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" value="<?= $berita['penulis'] ?>" required>
            <br>

            <label for="tanggal">Tanggal Publish</label>
            <input type="date" name="tanggal" id="tanggal" value="<?= date('Y-m-d', strtotime($berita['tgldipublish'])) ?>">
            <br>


            <input type="submit" value="Simpan" name="simpan">
        </fieldset>
    </form>
</section>

<?php 

    include '../footer.php';

?>