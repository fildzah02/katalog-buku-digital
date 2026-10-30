# katalog-buku-digital
Website Katalog Buku Digital Laravel 13
Praktikum Laravel - Routing dan MVC

Nama: Fildzah Lalita Tesya Octaviana 
NIM: C2183207048 
Kelas: PTI5A  
Tema/Judul: Website Informasi dan Katalog

1. Deskripsi Aplikasi

Aplikasi ini merupakan website sederhana yang dikembangkan menggunakan framework Laravel. Website ini dibuat untuk memenuhi tugas praktikum Pemrograman Internet dengan menerapkan konsep Routing, Controller, dan View (MVC).

Aplikasi memiliki minimal lima halaman yang saling terhubung melalui menu navigasi. Data yang digunakan bersifat statis dan disimpan dalam bentuk array PHP pada Controller tanpa menggunakan database.

2. Implementasi Routing, Controller, dan View

Routing

Routing digunakan untuk mengatur alamat URL dan menghubungkan permintaan pengguna dengan method pada Controller.

Controller

Controller berfungsi mengolah data statis dalam bentuk array PHP dan mengirimkan data tersebut ke halaman View.

View

View dibuat menggunakan Blade Template Laravel untuk menampilkan informasi kepada pengguna. Tampilan menggunakan HTML dan CSS serta memanfaatkan fitur @foreach untuk menampilkan data.

3. Screenshot

Halaman Beranda
![Halaman Beranda](<img width="1535" height="822" alt="home" src="https://github.com/user-attachments/assets/cfc93091-6c04-4899-be8b-0a81fb4a6d8d" />)


Halaman Daftar
![Halaman Daftar](<img width="1535" height="822" alt="daftar-buku" src="https://github.com/user-attachments/assets/66b94163-557b-4f36-adf7-e654e1579697" />)


Halaman Detail
![Halaman Detail](<img width="1531" height="818" alt="detail-buku" src="https://github.com/user-attachments/assets/a7307f33-6ca2-43cd-9bcf-f2551183a4eb" />)


4. Cara Menjalankan Proyek

1. Pastikan PHP, Composer, dan Laravel sudah terpasang.
2. Clone repository GitHub:
   `git clone URL_REPOSITORY`
3. Masuk ke folder proyek:
   `cd nama-proyek`
4. Install dependency:
   `composer install`
5. Jalankan aplikasi:
   `php artisan serve`
6. Buka browser dan akses:
   `http://127.0.0.1:8000`

