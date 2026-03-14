<?php
$skor = 0;
$bobot = ["pg1" => 30, "pg2" => 30, "esai" => 40];

echo "<h2>Hasil Jawaban - Matematika</h2>";

// PG 1
if (isset($_POST['pg1']) && $_POST['pg1'] == "b") {
    echo "<p>1. Benar ✅</p>";
    $skor += $bobot['pg1'];
} else {
    echo "<p>1. Salah ❌ (Jawaban benar: b. 5)</p>";
}

// PG 2
if (isset($_POST['pg2']) && $_POST['pg2'] == "b") {
    echo "<p>2. Benar ✅</p>";
    $skor += $bobot['pg2'];
} else {
    echo "<p>2. Salah ❌ (Jawaban benar: b. 3)</p>";
}

// Esai
if (!empty($_POST['esai'])) {
    $jawaban = strtolower($_POST['esai']);
    if (strpos($jawaban, 'nilai tengah') !== false) {
        echo "<p>3. Benar ✅</p>";
        $skor += $bobot['esai'];
    } else {
        echo "<p>3. Salah ❌ (Median adalah nilai tengah dari data yang diurutkan)</p>";
    }
} else {
    echo "<p>3. Tidak dijawab ❌</p>";
}

// SIMPAN NILAI
$nama  = $_POST['nama'];
$mapel = "Matematika";

$data = "$nama|$mapel|$skor\n";
file_put_contents("nilai.txt", $data, FILE_APPEND);

echo "<h3>Nilai Akhir Kamu: $skor</h3>";
echo '<br><a href="menu_murid.php">⬅ Kembali ke Menu Murid</a>';
?>
