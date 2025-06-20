<?php

if (!isset($_COOKIE['user_data'])) {
    header("Location: login.php");
    exit();
}
$username = $_COOKIE['user_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
            line-height: 1.6;
        }
        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .logout-link {
            display: inline-block;
            padding: 8px 16px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .logout-link:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="welcome-message">
        Hello, <?php echo $username; ?>!
    </div>
    
    <a href="logout.php" class="logout-link">Logout</a>
</body>
</html>