<div class="p-4">
    <h3>Laporan Nilai Mahasiswa</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $row): ?>
                <tr>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['nilai']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
