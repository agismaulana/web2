<?php 

    include '../header.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM tblKategori WHERE idKategori = $id";
    $data = mysqli_query($conn, $query);
    $data = $data->fetch_array(MYSQLI_ASSOC);

    if(isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "UPDATE tblKategori SET nama_kategori = '$kategori' WHERE idKategori = $id";
        $tambah = mysqli_query($conn, $sql);

        if($tambah) {
            header("Location: index.php");
        }
    }

?>

<section>
    <form action="edit.php?id=<?= $id; ?>" method="POST">
        <fieldset>
            <legend>Tambah Kategori</legend>

            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="<?= $data['nama_kategori']; ?>" required>
            <br>

            <input type="submit" value="Simpan" name="simpan">
        </fieldset>
    </form>
</section>

<?php 

    include '../footer.php';

?>