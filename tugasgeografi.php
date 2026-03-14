<!DOCTYPE html>
<html>
<head>
    <title>Tugas - Geografi</title>
</head>
<body>

<h2>Tugas Siswa - Geografi</h2>

<form method="post" action="koreksigeografi.php">

    <!-- INPUT NAMA SISWA (TAMBAHAN) -->
    <label>Nama Siswa:</label><br>
    <input type="text" name="nama" required><br><br>

    <h3>Soal Pilihan Ganda</h3>

    <p>1. Gempa bumi terjadi karena ...</p>
    <input type="radio" name="pg1" value="a"> a. pergerakan lempeng bumi <br>
    <input type="radio" name="pg1" value="b"> b. hujan deras <br>
    <input type="radio" name="pg1" value="c"> c. angin kencang <br><br>

    <p>2. Contoh upaya mitigasi bencana adalah ...</p>
    <input type="radio" name="pg2" value="a"> a. membuang sampah ke sungai <br>
    <input type="radio" name="pg2" value="b"> b. latihan evakuasi di sekolah <br>
    <input type="radio" name="pg2" value="c"> c. membangun rumah di tepi sungai <br><br>

    <h3>Soal Esai</h3>

    <p>3. Jelaskan secara singkat apa itu tsunami!</p>
    <textarea name="esai" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Kumpulkan Jawaban">
</form>

<br><a href="menu_murid.php">⬅ Kembali ke Menu Murid</a>

</body>
</html>
