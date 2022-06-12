# PSI-2021ge-08 SIPER
Please read [RULES.md](RULES.md).

## General Discription
Perpustakaan merupakan salah satu fasilitas lembaga pendidikan yang berperan dalam menunjang pembelajaran para peserta didik. Perpustakaan memiliki peran dalam proses belajar mengajar karena perpustakaan merupakan gudang ilmu yang menyediakan berbagai sumber informasi yang membantu untuk menambah pengetahuan bagi para pengunjung perpustakaan. Pada umumnya bagian yang ada dalam perpustakaan adalah petugas perpustakaan, anggota perpustakaan seperti siswa, guru maupun pegawai di sekolah tersebut.

Pada perpustakaan SMA Swasta HKBP 2 Tarutung, pencarian dan pendataan buku yang mencakup pendataan buku baru, buku yang rusak dan buku yang hilang, peminjaman dan pengembalian buku serta pencarian buku masih dilakukan secara manual. Hal tersebut tentunya dianggap kurang efisien dan efektif dalam melakukan pencarian, peminjaman dan juga pengembalian buku ke perpustakaan sekolah. Oleh karena itu, dibutuhkan sistem yang dapat menangani masalah yang terjadi pada perpustakaan SMA Swasta HKBP 2 Tarutung.
Berdasarkan permasalahan yang disebutkan pada paragraf sebelumnya kami akan mengusulkan untuk membangun sistem informasi. D
engan pembangunan sistem informasi ini, diharapkan mampu untuk membantu mengurangi waktu proses pencarian buku, pengembalian dan peminjaman buku, pendataan buku yang masuk di SMA Swasta HKBP 2 Tarutung. Selain itu, sistem informasi ini diharapkan dapat membuat pencarian buku, pengembalian dan peminjaman buku, pendataan buku yang masuk menjadi efisien dan efektif karena petugas dan pengunjung tidak perlu melakukan aktivitas tersebut secara manual.


## Features
1.	Fungsi Pendaftaran
Pengguna yang ingin melakukan peminjaman buku harus mendaftarkan diri terlebih dahulu, pendaftaran anggota akan dilakukan oleh yang bersangkutan.
2.	Fungsi Login
Pengguna yang membutuhkan login ialah petugas perpustakaan, siswa/i maupun civitas SMA HKBP 2 Tarutung. Login dilakukan agar pengguna bisa mengakses website perpustakaan.
3.	Fungsi Pendataan Buku
Pendataan buku dilakukan oleh petugas perpustakaan terhadap buku yang masuk ke perpustakaan
4.	Fungsi peminjaman buku
Peminjaman buku digunakan untuk mengelola data peminjaman buku yang dimulai dari pencarian buku oleh user, lalu melakukan peminjaman buku melalui petugas.
5.	Fungsi Pengembalian buku
Pengembalian buku dilakukan oleh user yang sudah meminjam buku , pengembalian dilakukan melalui konfirmasi petugas
6.	Fungsi pencarian buku
Fungsi ini adalah fungsi yang digunakan oleh semua user, dimana user dapat melihat buku apa saja yang tersedia dan yang tidak tersedia pada perpustakaan untuk dapat dilakukan peminjaman atau sekedar ingin mengetahui buku apa saja yang ada.
7.	Fungsi Logout
Logout merupakan fungsi utama untuk user keluar dari sistem.

## Architectural Design

## Database Design

## Installation Guide
- Terlebih dahulu melakukan clone ulang dari github
- Menyiapkan lokasi untuk folder proyek
- Menyiapkan nama database pada aplikasi yang digunakan 
- Melakukan composer update
- Membuka folder vendor - laravel - ui -auth-backend
- Mengubah return view pada AuthenticatesUser dan RegistersUser menjadi authnew.login pada authenticatesuser dan authnew.register pada registeruser
- Membuat file .env untuk menghubungkan ke database
- Masuk ke terminal folder kemudian melakukan generate key untuk sistem
- Melakukan migrating untuk memasukkan tabel database ke aplikasi database yang mana pada proyek ini
- Karena akun admin telah kami create pada database seeder, maka akan melakukan run di terminal dengan php artisan db:seed --class=UserSeeder
- Kemudian dapat kita lihat bahwa akun dari seeder telah terbentuk yaitu untuk akun Admin.
- Kemudian masuk ke server dengan php -S localhost:8000 -t public dan akan dilanjutkan ke browser
- Maka akan ditampilkan halaman awal dari SIPER

### Minimum Hardware Requirements
Kebutuhan antarmuka perangkat keras sistem ini yaitu sebagai berikut :
1. Keyboard digunakan untuk memasukkan data ke dalam sistem.
2. Mouse digunakan untuk memasukkan data ke dalam sistem.
3. Monitor digunakan untuk melihat tampilan dari Sistem Informasi.
4. Smartphone digunakan untuk memasukkan data ke dalam sistem dan melihat tampilan dari sistem. 

### Minimum Software Requirements

# Contributors
+ 12S19009 - Manuel Sigalingging (@manuelgalingging)
+ 12S19043 - Ignatia R Hutagalung (@Ignatia31)
+ 12S19045 - Regita (@regitapakpahan)
+ 12S19047 - Agnes JM Manalu (@agnesmanalu29)
+ 12S19062 - Ardika S Sianturi (@ardikasolagratia)
