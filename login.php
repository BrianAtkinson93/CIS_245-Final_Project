<?php
include 'include/config/connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="images/webpage/hacker.png">
    <title>Please login</title>
</head>
<body style="background-color: #8b0000;">
<div id="form">
    <h4>Please Login</h4>
    <form action="handlers/login_handler.php" method="post">
        <label for="ID">Email:</label>
        <input type="text" placeholder="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" placeholder='password' id="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>
</body>
</html>
