<?php include 'header.php'; ?>

<h2 class='mb-4'>Tugas 3: Operasi Array</h2>
<?php $perangkat = ["laptop", "mouse", "keyboard", "printer"]; ?>
<div class='alert alert-secondary'><strong>Data Array:</strong> [0] laptop, [1] mouse, [2] keyboard, [3] printer</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header"><strong>A) Cari Berdasarkan Index</strong></div>
            <div class="card-body">
                <form method="POST" action="tugas3.php">
                    <div class="input-group mb-3">
                        <input type="number" name="index_array" class="form-control" placeholder="Masukkan index (0-3)" required>
                        <button class="btn btn-primary" type="submit" name="submit_index">Cari</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit_index'])) {
                    $idx = $_POST['index_array'];
                    if (isset($perangkat[$idx])) {
                        echo "<div class='alert alert-success mt-2'>Hasil index ke-$idx: <strong>{$perangkat[$idx]}</strong></div>";
                    } else {
                        echo "<div class='alert alert-danger mt-2'>Data pada index ke-$idx tidak ditemukan!</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header"><strong>B) Cari Berdasarkan Nama</strong></div>
            <div class="card-body">
                <form method="POST" action="tugas3.php">
                    <div class="input-group mb-3">
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama barang..." required>
                        <button class="btn btn-success" type="submit" name="submit_nama">Cari</button>
                    </div>
                </form>
                <?php
if (isset($_POST['submit_nama'])) {
    $cari = trim($_POST['nama_barang']);
    
    // Cek terlebih dahulu apakah barang ada di dalam array
    if (in_array(strtolower($cari), $perangkat)) {
        
        // Jika barang ada, cari nomor index-nya dan simpan ke variabel
        $index_ditemukan = array_search(strtolower($cari), $perangkat);
        
        // Tampilkan index yang sudah ditemukan
        echo "<div class='alert alert-success mt-2'>Barang '$cari' <strong>Ditemukan</strong> pada index ke-" . $index_ditemukan . ".</div>";
        
    } else {
        echo "<div class='alert alert-danger mt-2'>Barang '$cari' <strong>Tidak Ditemukan</strong>.</div>";
    }
}
?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>