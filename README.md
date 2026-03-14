# Project-PTS-Web
PTS Web adalah sebuah aplikasi berbasis web sederhana untuk mempermudah proses pembelajaran, pengumpulan tugas, dan penilaian siswa di sekolah. Aplikasi ini memungkinkan guru untuk memberikan materi, tugas, serta mengoreksi dan melihat nilai siswa. Siswa dapat mengakses materi, mengerjakan tugas, dan melihat nilai mereka sendiri.

## Fitur
- Halaman utama (`index.php`) untuk akses dashboard.
- Menu guru (`menu_guru.php`) untuk mengelola materi, tugas, dan koreksi.
- Menu siswa (`menu_murid.php`) untuk mengakses materi, mengerjakan tugas, dan melihat nilai.
- Materi pelajaran (`materi.php`).
- Tugas per mata pelajaran:
  - Matematika (`tugasmatematika.php`)
  - Fisika (`tugasfisika.php`)
  - Geografi (`tugasgeografi.php`)
- Koreksi tugas untuk guru:
  - Matematika (`koreksimatematika.php`)
  - Fisika (`koreksifisika.php`)
  - Geografi (`koreksigeografi.php`)
- Lihat nilai (`lihat_nilai.php`).
- Penyimpanan nilai sederhana (`nilai.txt`).

## Cara Menjalankan
1. Pastikan memiliki server lokal (misal XAMPP, WAMP, Laragon) dengan PHP.
2. Copy folder `PTSWeb` ke dalam folder `htdocs` (untuk XAMPP) atau sesuai server lokal.
3. Jalankan `index.php` melalui browser (misal `http://localhost/PTSWeb/index.php`).
