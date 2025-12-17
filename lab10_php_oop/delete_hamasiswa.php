<?php
include "database.php";
$db = new Database();

$nim = $_GET['nim'];
$db->delete("mahasiswa", "WHERE nim='$nim'");

ob_start();
?>

<h3>❌ Data berhasil dihapus!</h3>
<a href="list_mahasiswa.php" class="btn btn-primary mt-3">Kembali</a>

<?php
$content = ob_get_clean();
include "layout.php";
?>