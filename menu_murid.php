<html>
<head>
    <!-- Bagian head untuk memberikan informasi halaman -->
    <title>Menu Siswa</title> <!-- Judul halaman yang tampil di tab browser -->
</head>
<body>
    <!-- Konten utama halaman ada di dalam body -->

    <!-- Judul utama halaman -->
    <h2>Selamat Datang, Siswa!</h2>

    <!-- Instruksi untuk siswa -->
    <p>Silakan pilih mata pelajaran untuk melihat tugas:</p>

    <!-- Daftar menu berupa link (list) -->
    <ul>
        <!-- Link menuju halaman tugas matematika -->
        <!-- Parameter "mapel=Matematika" dikirim lewat URL -->
       <li><button><a href="tugasmatematika.php?mapel=Matematika">Matematika</a></button></li>

        <!-- Link menuju halaman tugas fisika -->
        <!-- Parameter "mapel=Fisika" dikirim lewat URL -->
        <li><button><a href="tugasfisika.php?mapel=Fisika">Fisika</a></button></li>

        <!-- Link menuju halaman tugas geografi -->
        <!-- Parameter "mapel=Geografi" dikirim lewat URL -->
        <li><button><a href="tugasgeografi.php?mapel=Geografi">Geografi</a></button></li>
    </ul>

    <br>
    <!-- Tombol/Link untuk logout (kembali ke halaman login index.php) -->
    <a href="index.php">Kembali</a>
</body>
</html>
