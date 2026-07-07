<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin123") {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Username atau password salah'); document.location='login.php';</script>";
}
?>
