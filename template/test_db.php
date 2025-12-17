<?php
$conn = new mysqli("localhost", "root", "", "latihan_oop");
if($conn->connect_error){
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>