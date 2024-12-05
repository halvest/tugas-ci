<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="p-4">
    <h3>Hapus Mahasiswa</h3>
    <form action="<?= base_url('dashboard/hapus_mahasiswa'); ?>" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-danger">Hapus Mahasiswa</button>
    </form>
</div>
