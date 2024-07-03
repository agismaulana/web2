<?php 
    include $_SERVER['DOCUMENT_ROOT']."/uas/functions.php";

    $title = "Edit Klasemen";

    $id = $_GET['id'];

    $klasemen = detailKlasemens($id);

    $countries = getCountries();
    $group = getGroups();

    if(isset($_POST['update'])) {
        if($klasemen['id']) {
            $id = $klasemen['id'];
            updateKlasemens($id);

            return;
        }


        createKlasemens();
    }

    include '../layout/header.php';

?>

<h1>Edit Klasemen</h1>


<form action="" method="post">
    <input type="hidden" name="id" value="<?= $klasemen['id']; ?>">
    <div>
        <label for="countries_id">Countries</label>
        <select name="countries_id" id="countries_id">
            <option value="">--Pilih--</option>
            <?php foreach($countries as $country) : ?>
                <?php if($id == $country['id']) : ?>
                    <option value="<?= $country['id']; ?>" selected><?= $country['name']; ?></option>
                <?php else : ?>
                    <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="group_id">Group</label>
        <select name="group_id" id="group_id">
            <option value="">--Pilih--</option>
            <?php foreach($group as $groups) : ?>
                <?php if($klasemen['group_id'] == $groups['id']) : ?>
                    <option value="<?= $groups['id']; ?>" selected><?= $groups['name']; ?></option>
                <?php else : ?>
                    <option value="<?= $groups['id']; ?>"><?= $groups['name']; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="points">Menang</label>
        <input type="number" name="winner" id="winner" value="<?= $klasemen['winner']; ?>">
    </div>
    <div>
        <label for="goals">Seri</label>
        <input type="number" name="draw" id="draw" value="<?= $klasemen['draw']; ?>">
    </div>
    <div>
        <label for="goals">Kalah</label>
        <input type="number" name="lose" id="lose" value="<?= $klasemen['lose']; ?>">
    </div>
    <div>
        <label for="points">Poin</label>
        <input type="number" name="poin" id="poin" value="<?= $klasemen['poin']; ?>">
    </div>
    <div>
        <button type="submit" name="update" id="update">Update</button>
    </div>
</form>

<?php include '../layout/footer.php';?>