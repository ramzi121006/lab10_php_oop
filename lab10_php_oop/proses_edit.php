<?php
include "database.php";
$db = new Database();

$data = [
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat']
];

$db->update("mahasiswa", $data, "nim='{$_POST['nim']}'");

ob_start();
?>

<h3>💗 Perubahan berhasil disimpan!</h3>
<a href="list_mahasiswa.php" class="btn btn-primary mt-3">Kembali</a>

<?php
$content = ob_get_clean();
include "layout.php";
?>