<?php

    date_default_timezone_set('Asia/Jakarta');

    $data = [];

    if(file_exists('data.txt')) {        
        $data = file_get_contents('agismaulana.txt');
        $data = json_decode($data, true);
    }

    if (isset($_POST['simpan'])) {
        $nama_negara = $_POST['nama_negara'];
        $jumlah_pertandingan = $_POST['jumlah_pertandingan'];
        $jumlah_menang = $_POST['jumlah_menang'];
        $jumlah_seri = $_POST['jumlah_seri'];
        $jumlah_kalah = $_POST['jumlah_kalah'];
        $jumlah_poin = $_POST['jumlah_poin'];
        $nama_operator = $_POST['nama_operator'];
        $nim_mahasiswa = $_POST['nim_mahasiswa'];
    
        $data['nama_operator'] = $nama_operator;
        $data['nim_mahasiswa'] = $nim_mahasiswa;

        $data['klasemen'][] = [
            'nama_negara' => $nama_negara,
            'jumlah_pertandingan' => $jumlah_pertandingan,
            'jumlah_menang' => $jumlah_menang,
            'jumlah_seri' => $jumlah_seri,
            'jumlah_kalah' => $jumlah_kalah,
            'jumlah_poin' => $jumlah_poin,
        ];
    
        $json_data = json_encode($data);

        file_put_contents('data.txt', $json_data);
    }
?>


<form action="" method="POST">
    <fieldset>
        <legend>Input Data Penjadwalan Klasemen</legend>
        <label for="nama_negara">Nama Negara</label><br/>
        <select name="nama_negara" id="nama_negara">
            <option value="Pilih Negara">Pilih Negara</option>
            <option value="Qatar U-23">Qatar U-23</option>
            <option value="Indonesia U-23">Indonesia U-23</option>
            <option value="Australia U-23">Australia U-23</option>
            <option value="Yordania U-23">Yordania U-23</option>
        </select><br/>
        <label for="jumlah_pertandingan">Jumlah Pertandingan</label><br/>
        <input type="number" name="jumlah_pertandingan" min="0"><br/>
        <label for="jumlah_menang">Jumlah Menang</label><br/>
        <input type="number" name="jumlah_menang" min="0"><br/>
        <label for="jumlah_seri">Jumlah Seri</label><br/>
        <input type="number" name="jumlah_seri" min="0"><br/>
        <label for="jumlah_kalah">Jumlah Kalah</label><br/>
        <input type="number" name="jumlah_kalah" min="0"><br/>
        <label for="jumlah_poin">Jumlah Poin</label><br/>
        <input type="number" name="jumlah_poin" min="0"><br/>
        <label for="nama_operator">Nama Operator</label><br/>
        <input type="text" name="nama_operator" value="<?= $data['nama_operator'] ?? ''?>"><br/>
        <label for="nim_mahasiswa">Nim Mahasiswa</label><br/>
        <input type="text" name="nim_mahasiswa" value="<?= $data['nim_mahasiswa'] ?? ''?>"><br/>
        <button type="submit" name="simpan">Simpan</button>
    </fieldset>
</form>

<section>
    <center>
        <h3>Data Group A Piala Asia Qatar U-23 <br> Per <?= date('d F Y h:m:s')?> <br> <?= $data['nama_operator'] ?? ''?> / <?= $data['nim_mahasiswa'] ?? ''?></h3>
    </center>
</section>

<section>
    <center>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Negara</th>
                    <th>P</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>Poin</th>
                </tr>
            </thead>
            <tbody>
                <?php if($data) : ?>
                <?php foreach($data['klasemen'] as $key => $d) : ?>
                    <tr>
                        <td><?= $key + 1 ?>. <?= $d['nama_negara']?></td>
                        <td><?= $d['jumlah_pertandingan']?></td>
                        <td><?= $d['jumlah_menang']?></td>
                        <td><?= $d['jumlah_seri']?></td>
                        <td><?= $d['jumlah_kalah']?></td>
                        <td><?= $d['jumlah_poin']?></td>
                    </tr>
                <?php endforeach;?>
                <?php endif; ?>
            </tbody>
        </table>
    </center>
</section>