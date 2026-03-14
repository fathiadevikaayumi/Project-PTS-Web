<html>
<head>
    <!-- Bagian <head> digunakan untuk memberi informasi tentang dokumen -->
    <title>Menu Guru</title> <!-- Judul halaman di tab browser -->
</head>
<body>
    <!-- Isi utama halaman akan ditampilkan di dalam <body> -->

    <h2>Selamat Datang, Guru!</h2> <!-- Judul utama halaman -->
    <p>Silakan pilih mata pelajaran untuk melihat materi:</p> <!-- Instruksi untuk user -->

    <!-- Daftar link ke materi yang berbeda -->
    <ul>
        <!-- Link akan diarahkan ke file materi.php dengan parameter "mapel" -->
        <!-- Contoh: klik Matematika → membuka materi.php?mapel=Matematika -->
        <li><button> <a href="materi.php?mapel=Matematika">Matematika</a></button></li>
        <li><button><a href="materi.php?mapel=Fisika">Fisika</a><button></li>
        <li><button><a href="materi.php?mapel=Geografi">Geografi</a><button></li>
    </ul>

    <br>
    <!-- Link kembali ke halaman login (index.php) untuk logout -->
     <a href="lihat_nilai.php">📊 Lihat Nilai Siswa</a>
     <br>
    <a href="index.php">Logout</a>
</body>
</html>
