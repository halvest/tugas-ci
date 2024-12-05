<nav class="sidebar bg-primary text-white p-3" style="min-width: 250px; height: 100vh;">
    <div class="text-center mb-4">
        <h4 class="text-white">Dashboard Dosen</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="<?= base_url('dashboard/tambah_mahasiswa'); ?>" class="nav-link text-white">Tambah Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('dashboard/hapus_mahasiswa'); ?>" class="nav-link text-white">Hapus Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('dashboard/tambah_nilai'); ?>" class="nav-link text-white">Tambah Nilai</a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('dashboard/hapus_nilai'); ?>" class="nav-link text-white">Hapus Nilai</a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('dashboard/laporan_nilai'); ?>" class="nav-link text-white">Laporan Nilai</a>
        </li>
    </ul>
</nav>
