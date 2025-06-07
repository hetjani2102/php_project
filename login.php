<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: home.php"); 
            exit;
        } else {
            header("Location: login.php?error=invalid_password"); 
            exit;
        }
    } else {
        header("Location: login.php?error=user_not_found");
        exit;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "invalid_password") {
                echo "<p style='color: red; text-align: center;'>Invalid password. Please try again.</p>";
            } elseif ($_GET['error'] == "user_not_found") {
                echo "<p style='color: red; text-align: center;'>User not found. Please <a href='sign.php'>sign up</a>.</p>";
            }
        }
        ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <p class="switch">Don't have an account? <a href="sign.php">Sign Up</a></p>
    </div>
</body>
</html>
