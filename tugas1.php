<?php 
include 'header.php'; 

// Fungsi bantuan untuk mengecek bilangan prima
function isPrima($angka) {
    if ($angka < 2) return false;
    for ($i = 2; $i*$i <= $angka; $i++) {
        if ($angka % $i == 0) return false;
    }
    return true;
}

$ganjil = []; 
$genap = []; 
$prima = []; 
$kel_11 = [];
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 !== 0) $ganjil[] = $i;
    if ($i % 2 === 0) $genap[] = $i;
    if (isPrima($i)) $prima[] = $i;
    if ($i % 11 === 0) $kel_11[] = $i;
}
?>

<h2 class='mb-4'>Tugas 1: Filter Angka 1 - 100</h2>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card"><div class="card-body">
            <h5 class="card-title text-primary">Ganjil</h5>
            <p class="card-text text-wrap"><?= implode(", ", $ganjil) ?></p>
        </div></div>
    </div>
    <div class="col-md-6">
        <div class="card"><div class="card-body">
            <h5 class="card-title text-success">Genap</h5>
            <p class="card-text text-wrap"><?= implode(", ", $genap) ?></p>
        </div></div>
    </div>
    <div class="col-md-6">
        <div class="card"><div class="card-body">
            <h5 class="card-title text-danger">Prima</h5>
            <p class="card-text text-wrap"><?= implode(", ", $prima) ?></p>
        </div></div>
    </div>
    <div class="col-md-6">
        <div class="card"><div class="card-body">
            <h5 class="card-title text-warning">Kelipatan 11</h5>
            <p class="card-text text-wrap"><?= implode(", ", $kel_11) ?></p>
        </div></div>
    </div>
</div>

<?php include 'footer.php'; ?>