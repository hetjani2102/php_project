<html>
<head>
    <title>Settings</title>
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

        .settings-container {
            background: #fff;
            max-width: 600px;
            width: 100%;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.4s ease-in;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        .toggle-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        button {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            opacity: 0.9;
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
            .settings-container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<div class="settings-container">
    <h1>Account Settings</h1>
    <form id="settingsForm">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" placeholder="Enter your full name">
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" id="password" placeholder="Enter new password">
        </div>

        <div class="form-group">
            <label>Dark Mode</label>
            <div class="toggle-group">
                <input type="checkbox" id="darkModeToggle">
                <label for="darkModeToggle">Enable Dark Mode (UI Only)</label>
            </div>
        </div>

        <div style="text-align:center;">
            <button type="submit">Save Changes</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('settingsForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!name || !email) {
            alert("Name and Email are required.");
            return;
        }

        alert("Settings saved successfully!");
      });
</script>
</body>
</html>
