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
        echo "wrong username or password";
    }
}
?>
<h1> Login </h1>
<form method="post" action="login.php">
    username: <input type="text" size="180" name="username" required><br>
    password: <input type="password"  name="password" required><br>
    <input type="submit" name="login" value="enter">
</form>
<a href="register.php">register</a>
