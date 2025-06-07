<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$username = ($row = $result->fetch_assoc()) ? $row['username'] : "User";
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - Test Assessment System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
   
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(-45deg, #1d3557, #457b9d, #a8dadc, #f1faee);
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;
  color: #ffffff;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

@keyframes gradientBG {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.navbar {
  background: rgba(0, 0, 0, 0.3);
  padding: 20px 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  backdrop-filter: blur(10px);
  position: sticky;
  top: 0;
  z-index: 100;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.logo {
  font-size: 26px;
  font-weight: bold;
  color: #ffffff;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.navbar ul {
  display: flex;
  gap: 30px;
  list-style: none;
}

.navbar ul li a {
  color: #ffffff;
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 8px;
  transition: background 0.3s ease;
  font-weight: 500;
}

.navbar ul li a:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

.search-bar {
  display: flex;
  gap: 10px;
  align-items: center;
}

.search-bar input {
  padding: 8px 12px;
  border-radius: 6px;
  border: none;
  outline: none;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.search-bar button {
  background: #f1faee;
  color: #1d3557;
  padding: 8px 14px;
  border: none;
  border-radius: 6px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease;
}

.search-bar button:hover {
  background: #a8dadc;
}

.dashboard {
  padding: 40px 20px;
  text-align: center;
}

.dashboard h1 {
  font-size: 42px;
  text-shadow: 1px 2px 4px rgba(0,0,0,0.4);
  margin-bottom: 12px;
}

.dashboard p {
  font-size: 18px;
  color: #f0f0f0;
  margin-bottom: 40px;
}

.features {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
  padding: 0 20px 60px;
}

.card {
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 30px 25px;
  width: 260px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
  transition: transform 0.3s ease, background 0.3s ease;
  text-align: center;
}

.card:hover {
  transform: translateY(-10px);
  background: rgba(255, 255, 255, 0.18);
}

.card h3 {
  font-size: 24px;
  color: #ffffff;
  margin-bottom: 12px;
}

.card p {
  font-size: 15px;
  color: #e0e0e0;
  margin-bottom: 20px;
}

.card a {
  display: inline-block;
  padding: 10px 18px;
  background: #f1faee;
  color: #1d3557;
  font-weight: bold;
  text-decoration: none;
  border-radius: 6px;
  transition: background 0.3s ease, color 0.3s ease;
}

.card a:hover {
  background: #a8dadc;
  color: #1d3557;
}

.footer {
  background: rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(6px);
  color: #fff;
  padding: 40px 20px;
  text-align: center;
  box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.2);
}

.footer h3 {
  font-size: 24px;
  margin-bottom: 15px;
}

.footer p {
  font-size: 15px;
  max-width: 800px;
  margin: 10px auto;
}

.footer-email {
  font-size: 14px;
  color: #ccc;
  margin-top: 10px;
}

.social-icons {
  margin-top: 20px;
}

.social-icons a {
  font-size: 22px;
  color: #ffffff;
  margin: 0 12px;
  transition: color 0.3s ease;
}

.social-icons a:hover {
  color: #a8dadc;
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
  }

  .features {
    flex-direction: column;
    align-items: center;
  }

  .search-bar {
    width: 100%;
    justify-content: center;
  }
}
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">TEST ASSESSMENT SYSTEM</div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="settings.php">Settings</a></li>
      <li><a href="logout.php" class="logout-btn">Logout</a></li>
    </ul>
    <div class="search-bar">
      <input type="text" placeholder="Search...">
      <button>🔍</button>
    </div>
  </nav>

  <div class="dashboard">
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>This is your dashboard where you can manage everything.</p>

    <div class="features">
      <div class="card">
        <h3>Profile</h3>
        <a href="profile.php">Go to Profile</a>
      </div>
      <div class="card">
        <h3>Settings</h3>
        <a href="set.php">Go to Settings</a>
      </div>
      <div class="card">
        <h3>Notifications</h3>
        <a href="noti.php">View Notifications</a>
      </div>
      <div class="card">
        <h3>Take Test</h3>
        <a href="tests.html">Start Test</a>
      </div>
    </div>
  </div>

  <footer class="footer">
    <h3>About Us</h3>
    <p>Test Assessment System is designed to help users evaluate and improve their knowledge through a variety of interactive online tests. Built with simplicity and performance in mind.</p>

    <div class="social-icons">
      <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>

    <div class="footer-email">
      support@testsystem.com
    </div>

    <p style="margin-top: 15px;">&copy; 2025 Test Assessment System. All rights reserved.</p>
  </footer>

</body>
</html>
