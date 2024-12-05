<div class="p-4">
    <h3>Tambah Nilai Mahasiswa</h3>
    <form method="POST" action="<?= base_url('dashboard/tambah_nilai'); ?>">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="text" class="form-control" id="nilai" name="nilai" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Nilai</button>
    </form>
</div>
