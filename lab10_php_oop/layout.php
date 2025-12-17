<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background: linear-gradient(180deg, #ff69b4, #ffb6c1);
            color: white;
            padding-top: 30px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 12px 20px;
            display: block;
            border-radius: 8px;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.3);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background:#ffb6d9;">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="dashboard.php">🌸 Pink Dashboard</a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- SIDEBAR -->
    <div class="col-3 sidebar">
        <h3 class="text-center mb-4">🌸 Cute Menu</h3>
        <a href="dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        <a href="list_mahasiswa.php"><i class="bi bi-people-fill"></i> Data Mahasiswa</a>
        <a href="form_input.php"><i class="bi bi-plus-circle-fill"></i> Input Mahasiswa</a>
    </div>

    <!-- AREA KONTEN -->
    <div class="col-9 p-4">
        <?php echo $content; ?>
    </div>

  </div>
</div>

<!-- FOOTER -->
<footer class="text-center py-3 mt-5" style="background:#ffb6d9; color:white;">
  <p class="mb-0">🌸 Cute Dashboard — Praktikum 10</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>