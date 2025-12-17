# Praktikum 11 – Modularisasi dengan PHP OOP & Routing

## Nama : Cindy Revalina Simanullang

## NIM  : 312410417

Repository ini berisi hasil praktikum 11 mata kuliah Pemrograman Web Universitas Pelita Bangsa.

## TUJUAN ARTIKEL: "Pengenalan PHP dan Perannya dalam Pengembangan Web Modern"

    1. Memberikan pemahaman tentang apa itu PHP.
       - PHP adalah bahasa pemrograman server-side untuk membuat website dinamis.

    2. Menjelaskan alasan mengapa PHP banyak digunakan.
       - Mudah dipelajari, fleksibel, dan cocok untuk pemula maupun profesional.
       - Terintegrasi baik dengan database seperti MySQL.

    3. Menunjukkan peran PHP dalam pengembangan aplikasi web.
       - Mengolah data, menerima input, mengelola sesi, dan berkomunikasi dengan database.

    4. Memberikan gambaran perkembangan PHP di era modern.
       - Tersedia banyak framework seperti Laravel, CI, dan Symfony.
       - Membantu developer membuat aplikasi yang lebih aman dan terstruktur.

    5. Menjelaskan manfaat mempelajari PHP bagi mahasiswa atau developer.
       - Dapat membuat sistem CRUD, login, dashboard, dan aplikasi besar lainnya.
       - PHP tetap relevan dan digunakan luas di dunia industri.

## Struktur Projec
# Lab11 PHP OOP - Sistem Modular Artikel

Repositori ini berisi tugas praktikum pemrograman web mengenai penerapan konsep **Object Oriented Programming (OOP)** dan **Modular Traversal Pattern** pada PHP.

## 📂 Struktur Project

```
lab11_php_oop/
├── class/
│   ├── Database.php      # Class koneksi database & query logic
│   └── Form.php          # Class generator form (Input, Label, dsb)
├── module/
│   ├── artikel/          # Modul Pengelolaan Artikel
│   │   ├── index.php     # Menampilkan tabel daftar artikel
│   │   ├── tambah.php    # Form tambah artikel baru
│   │   ├── edit.php      # Form edit artikel lama
│   │   └── hapus.php     # Logika penghapusan artikel
│   └── users/            # Modul Pengelolaan Pengguna
│       ├── login.php     # Halaman login user
│       ├── profil.php    # Halaman profil user yang sedang login
│       └── logout.php    # Logika menghapus session login
├── template/             # Folder Layout Utama
│   ├── header.php        # Bagian atas (Navbar & CSS)
│   └── footer.php        # Bagian bawah (Copyright & JS)
├── config.php            # File konfigurasi database (Host, User, DB)
├── index.php             # Router utama (File paling penting)
└── .htaccess             # (Opsional) Konfigurasi URL cantik

Konfigurasi Penting
1. Database (config.php)
Pastikan pengaturan database sudah sesuai dengan MySQL Anda:

PHP

$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db_name' => 'oop_latihan'
];
2. File Utama (index.php)
File ini bertugas memproses URL. Jika Anda mengakses /users/profil, maka index.php akan otomatis memanggil file di module/users/profil.php.

3. Keamanan Session
Halaman selain login diproteksi. Jika $_SESSION['is_login'] tidak ada, pengguna akan selalu dilempar kembali ke halaman /users/login.


## Fitur

- Routing URL menggunakan `.htaccess`
- Struktur modular (module/home, module/artikel)
- Class OOP (Form & Database)
- CRUD Artikel (Create–Read–Update)
- Template header/footer

  
## Teknologi

- PHP OOP
- MySQL
- Apache mod_rewrite
- HTML
```

## Screenshot
Tampilan database setup 
<img width="175" height="95" alt="image" src="https://github.com/user-attachments/assets/16e1f7bf-354e-46ee-8c6c-e4236bbc9723" />

Tampilan home1
<img width="837" height="369" alt="image" src="https://github.com/user-attachments/assets/dab43842-f18b-46fc-ac50-a9f0320d7173" />

Tampilan home2
<img width="1365" height="535" alt="image" src="https://github.com/user-attachments/assets/a556ac8c-2333-4330-b94f-d703b87ae508" />

Tampilan home1
<img width="848" height="502" alt="image" src="https://github.com/user-attachments/assets/7ede8b8c-086d-43c7-ba04-2591f2cd67a0" />

Tampilan tambah2
<img width="584" height="368" alt="image" src="https://github.com/user-attachments/assets/ac82a78d-fd89-4152-92b2-666afde52d9c" />

Tampilan login
<img width="608" height="541" alt="image" src="https://github.com/user-attachments/assets/7df1dfb9-dafa-49d5-b1fb-642ea9cdfa0a" />

Tampilan daftar artikel
<img width="1365" height="662" alt="image" src="https://github.com/user-attachments/assets/dc6bca97-fe36-4f29-b510-9201a439011d" />

Tampilan tambah
<img width="1365" height="498" alt="image" src="https://github.com/user-attachments/assets/5a4e65f0-9083-4409-91a3-391dfa6e79e6" />

## Kesimpulan
    Artikel ini bertujuan memberikan gambaran umum tentang PHP,
    mengapa PHP penting, serta bagaimana PHP digunakan dalam pengembangan web.

## 🧑‍💻 Cara menjalankan
1. Clone repo ke htdocs XAMPP
2. Buat database `oop_latihan`
3. Import tabel `artikel`
4. Akses: http://localhost/lab11_php_oop/

