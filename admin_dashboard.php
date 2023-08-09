<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, Admin!</h2>
        <p>Content Management and Backend Logic can be implemented here.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
