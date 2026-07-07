<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); document.location='login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata Mahasiswa</h2>

    <p>Nama: Ahmad Aris Kurniawan</p>
    <p>NIM: 23112614</p>
    <p>Program Studi: Teknik Informatika</p>
    <p>Mata Kuliah: Proyek Perangkat Lunak</p>

    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>
