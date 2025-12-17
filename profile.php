<?php
// Ambil data user yang sedang login dari database
$db = new Database();
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '{$username}'";
$result = $db->query($sql);
$user = $result->fetch_assoc();
?>

<div class="container mt-4">
    <h2>Profil Pengguna</h2>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $user['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">@<?= $user['username']; ?></h6>
            <p class="card-text">Selamat datang di halaman profil Anda.</p>
            <a href="/lab11_php_oop/artikel/index" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>