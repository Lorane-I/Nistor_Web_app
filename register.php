<?php
include "db.php";
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("Location: login.php");
        exit();
    } else {
        echo $result;
        echo "registration error";
    }
}
?>
<h1> Registration </h1>
<form method="post" action="register.php">
    username: <input type="text" name="username" required><br>
    password: <input type="password" name="password" required><br>
    <input type="submit" name="register" value="register">
</form>
<a href="login.php">login</a>
