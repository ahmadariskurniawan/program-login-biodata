<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Sesi login Anda belum terdaftar. Silakan login kembali.'); document.location='login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>Selamat datang, <?php echo $_SESSION['user']; ?>.</p>

    <ul>
        <li><a href="biodata.php">Lihat Biodata</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
