<!DOCTYPE html>
<html>
<head>
    <title>Tugas - Matematika</title>
</head>
<body>

<h2>Tugas Siswa - Matematika</h2>

<form method="post" action="koreksi_matematika.php">

    <label>Nama Siswa:</label><br>
    <input type="text" name="nama" required><br><br>

    <h3>Soal Pilihan Ganda</h3>

    <p>1. Nilai rata-rata dari data 2, 4, 6, 8 adalah ...</p>
    <input type="radio" name="pg1" value="a"> a. 4 <br>
    <input type="radio" name="pg1" value="b"> b. 5 <br>
    <input type="radio" name="pg1" value="c"> c. 6 <br><br>

    <p>2. Modus dari data: 2, 3, 3, 5, 7 adalah ...</p>
    <input type="radio" name="pg2" value="a"> a. 2 <br>
    <input type="radio" name="pg2" value="b"> b. 3 <br>
    <input type="radio" name="pg2" value="c"> c. 5 <br><br>

    <h3>Soal Esai</h3>
    <p>3. Jelaskan dengan singkat apa itu median!</p>
    <textarea name="esai" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Kumpulkan Jawaban">
</form>

<br><a href="menu_murid.php">⬅ Kembali ke Menu Murid</a>

</body>
</html>
