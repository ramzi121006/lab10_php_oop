<?php
include "database.php";
$db = new Database();

$data = [
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat']
];

$db->insert("mahasiswa", $data);

ob_start();
?>

<h3>🎉 Data berhasil ditambahkan!</h3>
<a href="list_mahasiswa.php" class="btn btn-primary mt-3">Kembali</a>

<?php
$content = ob_get_clean();
include "layout.php";
?>