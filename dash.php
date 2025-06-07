<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> 
</head>
<body>
    <div class="navbar">
        <h2>Dashboard</h2>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
    
    <div class="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>This is your dashboard where you can manage your account.</p>
    </div>
</body>
</html>
