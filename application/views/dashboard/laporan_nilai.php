<div class="container container-custom">
    <div class="d-flex justify-content-between mb-4">
        <a href="<?= base_url('dashboard/tambah_nilai'); ?>" class="btn add-btn btn-custom">
            <i class="fas fa-plus"></i> Tambah Nilai Mahasiswa
        </a>
        <a href="<?= base_url('dashboard/tambah_mahasiswa'); ?>" class="btn add-btn btn-custom">
            <i class="fas fa-user-plus"></i> Tambah Mahasiswa
        </a>
    </div>
    <div class="table-container">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Tugas</th>
                        <th>Responsi</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($laporan as $data): ?>
                        <?php 
                            $nilai_angka = hitungNilaiAngka($data['tugas'], $data['responsi'], $data['uts'], $data['uas']); 
                            $nilai_huruf = konversiNilaiHuruf($nilai_angka); 
                        ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= htmlspecialchars($data['nama']); ?></td>
                            <td><?= htmlspecialchars($data['nim']); ?></td>
                            <td><?= htmlspecialchars($data['kelas']); ?></td>
                            <td><?= htmlspecialchars($data['tugas'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($data['responsi'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($data['uts'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($data['uas'] ?? '-'); ?></td>
                            <td><?= number_format($nilai_angka, 2); ?></td>
                            <td><?= $nilai_huruf; ?></td>
                            <td>
                                <a href="<?= base_url('dashboard/hapus_mahasiswa/' . $data['nim']); ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
