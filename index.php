<?php
// Mengecek apakah form dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menyimpan pilihan role (guru/siswa)
    $role = $_POST['role'];

    // Jika role yang dipilih adalah guru, maka akan diarahkan ke menu_guru
    if ($role == "guru") {
        header("Location: menu_guru.php");
    } else {
        // Jika bukan guru, maka akan diarahkan ke menu_murid
        header("Location: menu_murid.php");
    }
    // untuk menghentikan eksekusi
    exit();
}
?>

<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Silakan Login</h2>

    <!-- Form login sederhana -->
    <form method="post">
        <p>Pilih Role:</p>

        <!-- Radio button untuk memilih role Guru -->
        <!-- name="role" supaya nilainya bisa diakses dengan $_POST['role'] -->
        <!-- required agar wajib dipilih -->
        <label><input type="radio" name="role" value="guru" required> Guru</label><br>

        <!-- Radio button untuk memilih role Siswa -->
        <label><input type="radio" name="role" value="siswa" required> Siswa</label><br><br>

        <!-- Tombol untuk mengirim form -->
        <button type="submit">Masuk</button>
    </form>
</body>
</html>
