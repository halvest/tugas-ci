<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            color: white;
            z-index: 1050;
            transition: transform 0.3s ease;
        }
        .sidebar .nav-link {
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .sidebar .nav-link:hover {
            background-color: #6c757d;
            color: white;
        }
        .sidebar .nav-item {
            margin-bottom: 10px;
        }
        .sidebar.active {
            transform: translateX(-250px); /* Sembunyikan sidebar */
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        .main-content.fullwidth {
            margin-left: 0; /* Konten utama memenuhi layar ketika sidebar disembunyikan */
        }
        .navbar {
            z-index: 1051;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container-fluid">
            <button class="btn btn-primary" id="toggleSidebar">
                <i class="bi bi-list"></i> Menu
            </button>
            <span class="navbar-brand ms-3"><?= $title ?? 'Dashboard'; ?></span>
        </div>
    </nav>
    <div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-primary text-white vh-100 p-3" style="width: 250px; position: fixed;">
        <h5 class="text-center mb-4">Dosen Dashboard</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard'); ?>" class="nav-link text-white">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/tambah_mahasiswa'); ?>" class="nav-link text-white">
                    <i class="bi bi-person-plus-fill"></i> Tambah Mahasiswa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/tambah_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-plus-circle-fill"></i> Tambah Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/laporan_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-file-earmark-text-fill"></i> Laporan Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/hapus_mahasiswa'); ?>" class="nav-link text-white">
                    <i class="bi bi-person-dash-fill"></i> Hapus Mahasiswa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/hapus_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-x-circle-fill"></i> Hapus Nilai
                </a>
            </li>
            <li class="nav-item mt-3">
                <a href="<?= base_url('logout'); ?>" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
    </nav>
