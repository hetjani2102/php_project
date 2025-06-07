<?php
include 'connection.php';

$signupMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if user already exists
    $checkStmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        $signupMessage = "User already registered. Please login.";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            $signupMessage = "Registration successful. <a href='login.php'>Login now</a>.";
        } else {
            $signupMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $checkStmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Test Assessment System</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>

        <?php if (!empty($signupMessage)): ?>
            <p style="color: red; font-weight: bold;"><?php echo $signupMessage; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Sign Up</button>
        </form>
        <p class="switch">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
