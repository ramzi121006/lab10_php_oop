<?php
include "database.php";

$db = new Database();

// INSERT
$data = [
    'nim' => '12345',
    'nama' => 'Valen',
    'alamat' => 'Bekasi'
];
$db->insert("mahasiswa", $data);

// GET
$hasil = $db->get("mahasiswa", "nim='12345'");
echo "Data Mahasiswa:<br>";
echo "NIM: ".$hasil['nim']."<br>";
echo "Nama: ".$hasil['nama']."<br>";
echo "Alamat: ".$hasil['alamat']."<br>";

// UPDATE
$db->update("mahasiswa", 
    ['nama' => 'Valentino Ramzi'], 
    "nim='12345'"
);

// DELETE
// $db->delete("mahasiswa", "WHERE nim='12345'");
?>