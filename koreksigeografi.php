<?php
// Inisialisasi skor awal
$skor = 0;

// Bobot nilai
$bobot = ["pg1" => 30, "pg2" => 30, "esai" => 40];

// Judul hasil
echo "<h2>Hasil Jawaban - Geografi</h2>";

// --------------------
// Soal Pilihan Ganda 1
// --------------------
if (isset($_POST['pg1']) && $_POST['pg1'] == "a") {
    echo "<p>1. Benar ✅</p>";
    $skor += $bobot['pg1'];
} else {
    echo "<p>1. Salah ❌ (Jawaban benar: a. pergerakan lempeng bumi)</p>";
}

// --------------------
// Soal Pilihan Ganda 2
// --------------------
if (isset($_POST['pg2']) && $_POST['pg2'] == "b") {
    echo "<p>2. Benar ✅</p>";
    $skor += $bobot['pg2'];
} else {
    echo "<p>2. Salah ❌ (Jawaban benar: b. latihan evakuasi di sekolah)</p>";
}

// --------------------
// Soal Esai
// --------------------
if (!empty($_POST['esai'])) {
    $jawaban = strtolower($_POST['esai']);

    if (strpos($jawaban, 'gelombang laut') !== false) {
        echo "<p>3. Benar ✅</p>";
        $skor += $bobot['esai'];
    } else {
        echo "<p>3. Salah ❌ (Tsunami adalah gelombang laut besar yang terjadi akibat gempa di dasar laut atau letusan gunung bawah laut.)</p>";
    }
} else {
    echo "<p>3. Tidak dijawab ❌</p>";
}

// --------------------
// SIMPAN NILAI KE FILE
// --------------------
$nama  = $_POST['nama'];   // dari tugas_geografi.php
$mapel = "Geografi";

$data = "$nama|$mapel|$skor\n";
file_put_contents("nilai.txt", $data, FILE_APPEND);

// --------------------
// Tampilkan nilai akhir
// --------------------
echo "<h3>Nilai Akhir Kamu: $skor</h3>";
echo '<br><a href="menu_murid.php">⬅ Kembali ke Menu Murid</a>';
?>
