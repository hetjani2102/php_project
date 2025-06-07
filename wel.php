<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome - Test Assessment System</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(270deg, #6a11cb, #2575fc, #00d2ff, #6a11cb);
      background-size: 800% 800%;
      animation: moveGradient 15s ease infinite;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      color: #fff;
    }

    @keyframes moveGradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .website-name {
      font-size: 3rem;
      font-weight: 800;
      color: #ffffff;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
      margin-top: 50px;
      animation: fadeInDown 1s ease-out;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .welcome-container {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 16px;
      padding: 40px 50px;
      text-align: center;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      animation: fadeInUp 1.2s ease-out;
      margin: 60px 20px;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .welcome-container h1 {
      font-size: 40px;
      color: #fff;
      margin-bottom: 10px;
    }

    .welcome-container p {
      font-size: 18px;
      color: #f0f0f0;
      margin-bottom: 30px;
    }

    .btn-group {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .btn {
      padding: 12px 28px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 50px;
      transition: all 0.4s ease;
      box-shadow: 0 0 10px rgba(0, 114, 255, 0.4);
      font-size: 16px;
    }

    .btn:hover {
      transform: scale(1.08);
      background: linear-gradient(to right, #0072ff, #00c6ff);
      box-shadow: 0 0 20px rgba(0, 114, 255, 0.6);
    }

    @media (max-width: 500px) {
      .welcome-container {
        padding: 30px 20px;
      }

      .btn-group {
        flex-direction: column;
        gap: 15px;
      }

      .website-name {
        font-size: 2rem;
      }

      .welcome-container h1 {
        font-size: 28px;
      }
    }

    .site-footer {
      width: 100%;
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      padding: 40px 20px;
      text-align: center;
      color: #ffffffcc;
      font-family: 'Segoe UI', sans-serif;
      box-shadow: 0 -2px 20px rgba(0, 255, 255, 0.1);
      animation: fadeInUp 1.5s ease-out;
    }

    .site-footer h2 {
      font-size: 24px;
      color: #00c6ff;
      margin-bottom: 10px;
    }

    .site-footer p {
      font-size: 16px;
      line-height: 1.5;
      max-width: 700px;
      margin: 0 auto 10px auto;
    }

    .site-footer .copyright {
      font-size: 14px;
      margin-top: 15px;
      color: #bbbbbb;
    }
  </style>
</head>
<body>

  <div class="website-name">Test Assessment System</div>

  <div class="welcome-container">
    <h1>Welcome!</h1>
    <p>Ready to test your skills? Jump in and take the challenge.</p>
    <div class="btn-group">
      <a href="login.php" class="btn">Login</a>
      <a href="sign.php" class="btn">Sign Up</a>
    </div>
  </div>

  <footer class="site-footer">
    <div class="footer-content">
      <h2>About Us</h2>
      <p>
        The Test Assessment System is a platform built for learners and professionals to evaluate and sharpen their skills through interactive and randomized tests. We’re committed to making learning fun, measurable, and effective.
      </p>
      <p class="copyright">
        &copy; 2025 Test Assessment System. All rights reserved.
      </p>
    </div>
  </footer>

</body>
</html>
