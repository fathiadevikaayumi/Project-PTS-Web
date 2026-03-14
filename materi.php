<?php
// Ambil parameter 'mapel' dari URL (contoh: materi.php?mapel=Matematika)
// Jika tidak ada parameter 'mapel', maka default isinya "Tidak dipilih"
$mapel = $_GET['mapel'] ?? "Tidak dipilih";

// Array berisi data materi berdasarkan mata pelajaran
$dataMateri = [
    "Matematika" => "
        <b>Statistika Dasar</b><br>
        - Data tunggal & data berkelompok<br>
        - Mean (rata-rata), median, modus<br>
        - Diagram batang, diagram lingkaran, histogram<br>
        - Penerapan statistika dalam kehidupan sehari-hari (contoh: survei jumlah siswa yang suka olahraga).
    ",
    "Fisika" => "
        <b>Gelombang & Bunyi</b><br>
        - Bunyi berasal dari benda yang bergetar<br>
        - Panjang gelombang, frekuensi, dan amplitudo<br>
        - Resonansi bunyi pada alat musik<br>
        - Efek Doppler (contoh: sirene ambulans).
    ",
    "Geografi" => "
        <b>Bencana Alam</b><br>
        - Jenis bencana: gempa bumi, banjir, gunung meletus, tsunami<br>
        - Penyebab terjadinya bencana<br>
        - Dampak sosial & ekonomi bagi masyarakat<br>
        - Upaya mitigasi (contoh: latihan evakuasi di sekolah).
    "
];
?>

<html>
<head>
    <title>Materi <?php echo $mapel; ?></title>
</head>
<body>
    <!-- Judul utama halaman -->
    <h2>Materi <?php echo $mapel; ?></h2>

    <!-- Menampilkan isi materi sesuai dengan mapel yang dipilih -->
    <p>
        <?php 
        // Jika $mapel ada di array $dataMateri → tampilkan materinya
        // Jika tidak ada → tampilkan pesan "Materi belum tersedia."
        echo $dataMateri[$mapel] ?? "Materi belum tersedia."; 
        ?>
    </p>

    <br>
    <!-- Link kembali ke menu guru -->
    <a href="menu_guru.php">Kembali ke Menu Guru</a>
</body>
</html>
