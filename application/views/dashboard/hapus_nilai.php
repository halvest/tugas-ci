<div class="p-4">
    <h3>Hapus Nilai Mahasiswa</h3>
    <form method="POST" action="<?= base_url('dashboard/hapus_nilai'); ?>">
        <div class="form-group">
            <label for="id">ID Nilai</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <button type="submit" class="btn btn-danger">Hapus Nilai</button>
    </form>
</div>
