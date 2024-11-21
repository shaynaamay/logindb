<?php
session_start();

// Cek apakah user login dan memiliki role user
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="user-box">
        <h2>Selamat Datang, User <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
