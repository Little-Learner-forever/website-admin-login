<?php
// Simulated admin credentials
$adminUsername = 'admin';
$adminPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $adminUsername && $password === $adminPassword) {
        session_start();
        $_SESSION['admin'] = true;
        header('Location: admin_dashboard.php');
    } else {
        header('Location: login.php?error=1');
    }
}
?>
