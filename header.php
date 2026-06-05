<?php
// Mendapatkan nama file yang sedang dibuka (contoh: tugas1.php)
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP & Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { height: 100vh; background-color: #343a40; }
        .sidebar a { color: #cfd8dc; }
        .sidebar a:hover, .sidebar a.active { color: #fff; background-color: #0d6efd; border-radius: 5px; }
        .content { padding: 30px; height: 100vh; overflow-y: auto; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        
        <nav class="col-md-3 col-lg-2 d-md-block sidebar py-4 px-2 position-fixed">
            <h4 class="text-white text-center mb-4">Menu Tugas</h4>
            <ul class="nav flex-column">
                <li class="nav-item mb-1">
                    <a class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">🏠 Home</a>
                </li>
                <li class="nav-item mb-1">
                    <a class="nav-link <?= $current_page == 'tugas1.php' ? 'active' : '' ?>" href="tugas1.php">📝 Tugas 1 (Angka)</a>
                </li>
                <li class="nav-item mb-1">
                    <a class="nav-link <?= $current_page == 'tugas2.php' ? 'active' : '' ?>" href="tugas2.php">✖️ Tugas 2 (Perkalian)</a>
                </li>
                <li class="nav-item mb-1">
                    <a class="nav-link <?= $current_page == 'tugas3.php' ? 'active' : '' ?>" href="tugas3.php">📦 Tugas 3 (Array)</a>
                </li>
                <li class="nav-item mb-1">
                    <a class="nav-link <?= $current_page == 'tugas4.php' ? 'active' : '' ?>" href="tugas4.php">📊 Tugas 4 (Nilai)</a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 content">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">