<!DOCTYPE html>
<html>
<head>
    <title>Rekap Nilai Siswa</title>
</head>
<body>

<h2>Rekap Nilai Siswa</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
    </tr>

    <?php
    if (file_exists("nilai.txt")) {
        $rows = file("nilai.txt");
        $no = 1;

        foreach ($rows as $row) {
            list($nama, $mapel, $nilai) = explode("|", trim($row));
            echo "<tr>
                    <td>$no</td>
                    <td>$nama</td>
                    <td>$mapel</td>
                    <td>$nilai</td>
                  </tr>";
            $no++;
        }
    } else {
        echo "<tr><td colspan='4'>Belum ada nilai</td></tr>";
    }
    ?>
</table>

<br>
<a href="menu_guru.php">⬅ Kembali ke Menu Guru</a>

</body>
</html>
