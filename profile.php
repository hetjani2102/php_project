<html>
<head>
  <title>User Profile</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      min-height: 100vh;
      padding: 40px 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }

    .profile-container {
      background: #fff;
      max-width: 700px;
      width: 100%;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      animation: fadeIn 0.4s ease-in;
    }

    .profile-header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 30px;
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      background: #ccc;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 32px;
      color: #555;
    }

    .user-info {
      flex: 1;
    }

    .user-info h2 {
      font-size: 26px;
      color: #333;
      margin-bottom: 6px;
    }

    .user-info p {
      color: #666;
    }

    .section {
      margin-top: 20px;
    }

    .section h3 {
      font-size: 20px;
      color: #444;
      margin-bottom: 12px;
    }

    .activity-list {
      list-style: none;
      padding-left: 0;
    }

    .activity-list li {
      padding: 12px 16px;
      background: #f5f5f5;
      border-radius: 8px;
      margin-bottom: 10px;
      font-size: 15px;
      color: #333;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 600px) {
      .profile-container {
        padding: 20px;
      }

      .profile-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .profile-pic {
        width: 80px;
        height: 80px;
        font-size: 26px;
      }

      .user-info h2 {
        font-size: 22px;
      }
    }
  </style>
</head>
<body>
  <div class="profile-container">
    <div class="profile-header">
      <div class="profile-pic">👤</div>
      <div class="user-info">
        <h2 id="profileName"></h2>
        <p id="profileEmail"></p>
      </div>
    </div>

    <div class="section">
      <h3>Recent Test Activity</h3>
      <ul class="activity-list" id="testHistory">
        <li>Computer Basics Test – Score: 85% – Passed</li>
        <li>Networking Test – Score: 72% – Failed</li>
        <li>Cybersecurity Test – Score: 91% – Passed</li>
      </ul>
    </div>
  </div>

  <script>
    const user = {
      name: sessionStorage.getItem("username") || "",
      email: sessionStorage.getItem("useremail") || "",
    };

    document.getElementById("profileName").textContent = user.name;
    document.getElementById("profileEmail").textContent = user.email;
  </script>
</body>
</html>
