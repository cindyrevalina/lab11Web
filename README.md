# Praktikum 11 – Modularisasi dengan PHP OOP & Routing

## Nama : Cindy Revalina Simanullang

## NIM  : 312410417

Repository ini berisi hasil praktikum 11 mata kuliah Pemrograman Web Universitas Pelita Bangsa.

## Fitur

- Routing URL menggunakan `.htaccess`
- Struktur modular (module/home, module/artikel)
- Class OOP (Form & Database)
- CRUD Artikel (Create–Read–Update)
- Template header/footer

## Struktur projec
lab11_php_oop/ 
├── .htaccess           (Konfigurasi URL Rewrite) 
├── config.php          (Konfigurasi Database) 
├── index.php           (Gerbang Utama / Routing) 
├── class/              (Tempat menyimpan Library) 
│   ├── Database.php 
│   └── Form.php 
├── module/             (Tempat modul-modul website) 
│   └── artikel/ 
│       ├── index.php   (Menampilkan data) 
│       ├── tambah.php  (Form tambah) 
│       └── ubah.php 
├── template/           (Bagian layout) 
├── header.php 
├── footer.php 
└── sidebar.php         

## Teknologi

- PHP OOP
- MySQL
- Apache mod_rewrite
- HTML

## Screenshot
Tampilan database setup 
<img width="175" height="95" alt="image" src="https://github.com/user-attachments/assets/16e1f7bf-354e-46ee-8c6c-e4236bbc9723" />


## 🧑‍💻 Cara menjalankan
1. Clone repo ke htdocs XAMPP
2. Buat database `oop_latihan`
3. Import tabel `artikel`
4. Akses: http://localhost/lab11_php_oop/

