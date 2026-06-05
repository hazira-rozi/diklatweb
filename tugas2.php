<?php include 'header.php'; ?>

<h2 class='mb-4'>Tugas 2: Program Perkalian</h2>

<form method="POST" action="tugas2.php" class="mb-4">
    <div class="input-group w-50">
        <span class="input-group-text">Masukkan nilai X</span>
        <input type="number" name="nilai_x" class="form-control" required>
        <button class="btn btn-primary" type="submit" name="submit_perkalian">Tampilkan</button>
    </div>
</form>

<?php
if (isset($_POST['submit_perkalian'])) {
    $x = $_POST['nilai_x'];
    echo "<h5>Tabel Perkalian $x</h5>";
    echo "<ul class='list-group w-50'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo "$x &times; $i <span><strong>" . ($x * $i) . "</strong></span>";
        echo "</li>";
    }
    echo "</ul>";
}
?>

<?php include 'footer.php'; ?>