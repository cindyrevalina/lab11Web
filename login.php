<?php
$message = "";

if ($_POST) {
    $db = new Database();
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query ke tabel users
    $sql = "SELECT * FROM users WHERE username = '{$username}'";
    $result = $db->query($sql);

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        
        // Verifikasi password hash
        if (password_verify($password, $data['password'])) {
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            
            // REDIRECT LANGSUNG KE ARTIKEL
            header('Location: /lab11_php_oop/artikel/index');
            exit;
        } else {
            $message = "Username atau password salah!";
        }
    } else {
        $message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 card p-4 shadow-sm">
                <h3 class="text-center mb-4">Login User</h3>
                
                <?php if ($message): ?>
                    <div class="alert alert-danger text-center"><?= $message; ?></div>
                <?php endif; ?>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="admin" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="admin123" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div class="mt-3 text-center">
                        <a href="/lab11_php_oop/artikel/index" class="text-decoration-none">Kembali ke artikel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>