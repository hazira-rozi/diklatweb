<?php include 'header.php'; ?>

<h2 class='mb-4'>Tugas 4: Analisis Nilai Siswa</h2>

<?php
$nilai = [70, 65, 88, 40, 80, 95, 77, 85, 90, 88];

$banyak_siswa = count($nilai);
$minimum = min($nilai);
$maksimum = max($nilai);
$lulus = 0;
$tidak_lulus = 0;

foreach ($nilai as $n) {
    if ($n > 70) { $lulus++; } else { $tidak_lulus++; }
}
$rata_rata = array_sum($nilai) / $banyak_siswa;
?>

<div class="alert alert-info">
    <strong>Data Nilai:</strong> <?= implode(", ", $nilai) ?>
</div>

<table class="table table-bordered table-striped w-75">
    <thead class="table-dark">
        <tr>
            <th>Keterangan</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>Banyak Siswa</td><td><?= $banyak_siswa ?></td></tr>
        <tr><td>Nilai Minimum</td><td><?= $minimum ?></td></tr>
        <tr><td>Nilai Maksimum</td><td><?= $maksimum ?></td></tr>
        <tr><td>Siswa Lulus (>70)</td><td><span class="badge bg-success"><?= $lulus ?> Orang</span></td></tr>
        <tr><td>Siswa Tidak Lulus (<=70)</td><td><span class="badge bg-danger"><?= $tidak_lulus ?> Orang</span></td></tr>
        <tr><td>Rata-rata Kelas</td><td><strong><?= number_format($rata_rata, 2) ?></strong></td></tr>
    </tbody>
</table>

<?php include 'footer.php'; ?>