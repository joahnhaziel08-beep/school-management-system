<?php

session_start();
include 'config.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $_SESSION['user'] = $username;

        header("Location: dashboard.php");

    } else {

        echo "Invalid credentials";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>School Management Login</h2>

<form method="POST">

    <input type="text"
           name="username"
           placeholder="Username"
           required>

    <br><br>

    <input type="password"
           name="password"
           placeholder="Password"
           required>

    <br><br>

    <button type="submit" name="login">
        Login
    </button>

</form>

</body>
</html>