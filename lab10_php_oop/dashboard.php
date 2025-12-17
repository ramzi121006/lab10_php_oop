<?php
include "database.php";
$db = new Database();

$hasil = $db->query("SELECT COUNT(*) AS total FROM mahasiswa");
$total = $hasil->fetch_assoc()['total'];

ob_start();
?>

<h2>✨ Selamat Datang di Dashboard</h2>

<div class="p-4 mt-4 bg-white shadow rounded">
    <h4>Total Mahasiswa</h4>
    <p class="fs-1 fw-bold text-danger"><?= $total ?></p>
</div>

<?php
$content = ob_get_clean();
include "layout.php";
?>