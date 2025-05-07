<?php
session_start();

// Username dan password contoh
$valid_user = "admin";
$valid_pass = "123";

// Ambil input
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // redirect setelah login
    exit;
} else {
    echo "Username atau password salah.";
}
?>
