<?php
include "database.php";
$db = new Database();

$nim = $_GET['nim'];
$data = $db->get("mahasiswa", "nim='$nim'");

ob_start();
?>

<h2>✏ Edit Mahasiswa</h2>

<form action="proses_edit.php" method="POST" class="mt-3">
    <input type="hidden" name="nim" value="<?= $data['nim'] ?>">

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>

<?php
$content = ob_get_clean();
include "layout.php";
?>