<!DOCTYPE html>
<html>
<head>
    <title>Tugas - Fisika</title>
</head>
<body>

<h2>Tugas Siswa - Fisika</h2>

<form method="post" action="koreksifisika.php">

    <!-- INPUT NAMA SISWA (tambahan) -->
    <label>Nama Siswa:</label><br>
    <input type="text" name="nama" required><br><br>

    <h3>Soal Pilihan Ganda</h3>

    <p>1. Bunyi bisa terdengar karena ....</p>
    <input type="radio" name="pg1" value="a"> a. benda diam <br>
    <input type="radio" name="pg1" value="b"> b. benda bergetar <br>
    <input type="radio" name="pg1" value="c"> c. cahaya <br><br>

    <p>2. Contoh efek Doppler adalah ...</p>
    <input type="radio" name="pg2" value="a"> a. pelangi setelah hujan <br>
    <input type="radio" name="pg2" value="b"> b. suara ambulans yang berubah saat mendekat dan menjauh <br>
    <input type="radio" name="pg2" value="c"> c. bayangan pohon <br><br>

    <h3>Soal Esai</h3>
    <p>3. Jelaskan dengan singkat apa yang dimaksud dengan resonansi bunyi!</p>
    <textarea name="esai" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Kumpulkan Jawaban">
</form>

<br><a href="menu_murid.php">⬅ Kembali ke Menu Murid</a>

</body>
</html>
