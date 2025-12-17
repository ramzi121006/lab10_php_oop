<?php
ob_start();
?>

<h2>➕ Input Mahasiswa</h2>

<form action="proses_input.php" method="POST" class="mt-3">
    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
    </div>

    <button class="btn btn-pink" style="background:#ff4da6;color:white;">Simpan</button>
</form>

<?php
$content = ob_get_clean();
include "layout.php";
?>