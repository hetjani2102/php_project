<html>
<head>
    <title>Notifications</title>
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

        .notification-container {
            background-color: #fff;
            border-radius: 16px;
            max-width: 800px;
            width: 100%;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.4s ease-in;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .notification {
            padding: 20px;
            border-left: 5px solid #2575fc;
            background-color: #f9f9f9;
            margin-bottom: 20px;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .notification:hover {
            background-color: #eef1ff;
        }

        .notification-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #222;
        }

        .notification-time {
            font-size: 13px;
            color: #666;
            margin-bottom: 8px;
        }

        .notification-text {
            font-size: 15px;
            color: #444;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            .notification-container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            .notification-title {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
<div class="notification-container">
    <h1>Notifications</h1>

    <div class="notification">
        <div class="notification-title">🎉 New Test Available!</div>
        <div class="notification-time">May 8, 2025 - 10:00 AM</div>
        <div class="notification-text">A new General Knowledge test has been added. Take it now to improve your score!</div>
    </div>

    <div class="notification">
        <div class="notification-title">📜 Certificate Ready</div>
        <div class="notification-time">May 7, 2025 - 5:00 PM</div>
        <div class="notification-text">You scored above 80% on the IT Basics Test. Your certificate is now available for download.</div>
    </div>

    <div class="notification">
        <div class="notification-title">🕒 Scheduled Maintenance</div>
        <div class="notification-time">May 6, 2025 - 8:00 AM</div>
        <div class="notification-text">The system will be under maintenance on May 9 from 1:00 AM to 3:00 AM. Please plan accordingly.</div>
    </div>

</div>
</body>
</html>
