<?php
include "database.php";
$db = new Database();
$result = $db->query("SELECT * FROM mahasiswa");

ob_start();
?>

<h2 class="mb-4">📚 Data Mahasiswa</h2>

<div class="card p-4 shadow" style="border-radius:20px;">
<table class="table table-bordered table-striped mt-3">
    <thead style="background:#ffb6d9; color:white;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['nim'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td>
            <a href="edit_mahasiswa.php?nim=<?= $row['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete_mahasiswa.php?nim=<?= $row['nim'] ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
</div>

<?php
$content = ob_get_clean();
include "layout.php";
?>