# lab10_php_oop

**Nama         : Muhamad Valentino Ramzi**

**NIM          : 312410454**

**Kelas        : TI.24.A.5**

**Matkul       : Pemograman Web 1**


# 📝 Praktikum 10 — Pemrograman Web (PHP OOP)

Laporan ini berisi hasil pengerjaan Praktikum 10 yang mencakup konsep **Object-Oriented Programming (OOP) di PHP**, penggunaan **Class**, **Object**, **Modularisasi**, hingga implementasi CRUD menggunakan **MySQL + PHP OOP** serta **layout template Bootstrap**.

---

# ⭐ Program Class Mobil (OOP Dasar)

Pada tahap ini dibuat file `mobil.php` berisi class:

* Atribut: `warna`, `merk`, `harga`
* Method: `gantiWarna()`, `tampilWarna()`
* 2 objek mobil diciptakan dan dilakukan perubahan warna.

📸 **Screenshot:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/9e14bf88bdeb51b65df3e2377963aaab66aa1e8b/SS_Prak10/01-output-mobil..png) 

---

# ⭐ Class Form (Modularisasi)

File `form.php` berisi class untuk membuat form secara dinamis dengan method:

* `addField()`
* `displayForm()`

📸 **Screenshot:**

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/0041945d07b92401c634efcd342f1f508b1682e0/SS_Prak10/02-kode-form-php..png) 

---

# ⭐ Implementasi Form (form_input.php)

File ini memanggil class Form dari `form.php` lalu menampilkan form input berisi:

* NIM
* Nama
* Alamat

📸 **Screenshot:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/9e89ac5f3122406cfd457f7088b2380a831cd4b6/SS_Prak10/03-output-form-input..png)

---

# ⭐ Class Database (CRUD Modular)

File `database.php` berisi class Database lengkap dengan method:

* `query()`
* `get()`
* `insert()`
* `update()` (SUDAH diperbaiki)
* `delete()`

📸 **Screenshot:**

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/6f3b6fba085f9c6aa0e3b6e03d6f0c4cf8128051/SS_Prak10/04-kode-database-php..png)

---

# ⭐ Halaman Dashboard

Dashboard menampilkan jumlah total mahasiswa serta card informasi.

📸 **Screenshot:**

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/a08457139260919343deba3c7bdbbed76a358b81/SS_Prak10/10-dashboard-cute-pink..png)

---

# ⭐ Menampilkan Semua Data Mahasiswa (Read)

Menggunakan file `list_mahasiswa.php` untuk menampilkan seluruh data dalam bentuk tabel.

📸 **Screenshot:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/46f25cad2232343ce8a4f6414a5245eec96520de/SS_Prak10/06-output-list-mahasiswa..png)

---

# ⭐ Input Data (Create)

Form input mahasiswa → memproses ke `proses_input.php` → insert ke database.

📸 **Screenshot Form:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/12c14e117c6d6d65ad76c7a6297d055da7f0f633/SS_Prak10/03-output-form-input..png)

📸 **Screenshot Proses:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/af54a2d26b702c84723c6c89e4cab34c0160e646/SS_Prak10/05-output-proses-input..png)

---

# ⭐ Edit Data (Update)

Halaman edit memanggil data berdasar NIM, kemudian disimpan melalui `proses_edit.php`.

📸 **Screenshot Edit:**

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/99546612e14d2f53f610ae5675587b5b0b43bc3e/SS_Prak10/07-output-edit-mahasiswa..png)

📸 **Screenshot Proses Edit:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/824bff47d22dbfe13aa18eff481e1c554809a596/SS_Prak10/08-output-proses-edit..png)

---

# ⭐ Delete Data (Delete)

Menghapus data mahasiswa melalui `delete_mahasiswa.php`.

📸 **Screenshot:** 

![foto](https://github.com/NadhiaShafira/Lab10Web/blob/c5fc9b7ff9d6ecb713ff9ec73afb0ca90d6f3885/SS_Prak10/09-output-delete-mahasiswa.png.png)

---

# ⭐ 11. Struktur Folder Proyek

```
lab10_php_oop/
│
├── mobil.php
├── form.php
├── form_input.php
├── database.php
├── layout.php
├── dashboard.php
├── list_mahasiswa.php
├── edit_mahasiswa.php
├── proses_input.php
├── proses_edit.php
├── delete_mahasiswa.php
└── config.php
```

---

# Kesimpulan

Pada praktikum ini berhasil dibuat:
✔ Penerapan OOP (Class + Object)
✔ Class Form (Modularisasi)
✔ Class Database dengan CRUD
✔ Implementasi CRUD (Create, Read, Update, Delete)
✔ Template layout Bootstrap yang konsisten (navbar, sidebar, footer)
✔ Tampilan dashboard dan halaman data mahasiswa yang rapi & modern (pink theme)

Semua fungsi bekerja dengan baik tanpa error.

---
