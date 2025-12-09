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

Tampilan home1
<img width="837" height="369" alt="image" src="https://github.com/user-attachments/assets/dab43842-f18b-46fc-ac50-a9f0320d7173" />

Tampilan home2
<img width="1365" height="535" alt="image" src="https://github.com/user-attachments/assets/a556ac8c-2333-4330-b94f-d703b87ae508" />

## 🧑‍💻 Cara menjalankan
1. Clone repo ke htdocs XAMPP
2. Buat database `oop_latihan`
3. Import tabel `artikel`
4. Akses: http://localhost/lab11_php_oop/

