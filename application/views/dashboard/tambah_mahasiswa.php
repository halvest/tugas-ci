<div class="p-4">
    <h3>Tambah Mahasiswa</h3>
    <form method="POST" action="<?= base_url('dashboard/tambah_mahasiswa'); ?>">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
    </form>
</div>
