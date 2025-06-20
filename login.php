<?php
include "db.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        setcookie("user_data", $user['username'], time() + 3600, "/");
        header("Location: welcome.php");
        exit();
    } else {
        echo "Wrong username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .login-form { max-width: 300px; margin: 20px auto; }
        .form-group { margin-bottom: 15px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>
        <?php if (!empty($error_message)): ?>
            <p class="error"><?= htmlspecialchars($error_message) ?></p>
        <?php endif; ?>       
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>            
            <button type="submit" name="login">Login</button>
        </form>        
        <p>Don`t have an account yet? <a href="register.php">Registration</a></p>
    </div>
</body>
</html>