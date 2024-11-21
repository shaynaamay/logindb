<?php
session_start();

// Jika tidak ada session, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-box">
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
