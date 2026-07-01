<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="box">
    <h2>Welcome</h2>
    <p>Please login or register to continue.</p>
    <a href="login.php">Login</a> | <a href="register.php">Register</a>
</div>

</body>

</html>