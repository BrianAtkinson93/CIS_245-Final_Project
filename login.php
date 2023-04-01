<?php
require_once 'connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

//if (isset($_POST['submit'])) {
//    // Get the user's email and password from the form
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//
//    // Validate the user's credentials against the database
//    $sql = "SELECT * FROM users WHERE email = '$email'";
//    $result = $conn->query($sql);
//
//    if ($result->num_rows > 0) {
//        $row = $result->fetch_assoc();
//        if (password_verify($password, $row['password'])) {
//            // Password is correct, set the session variable and redirect to the main page
//            $_SESSION['username'] = $email;
//            header('Location: main.php');
//            exit;
//        } else {
//            // Password is incorrect, display an error message
//            echo '<p>Invalid password.</p>';
//        }
//    } else {
//        // Email is not found, display an error message
//        echo '<p>Invalid email.</p>';
//    }
//}
//?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Please login</title>
</head>
<body style="background-color: #8b0000;">
<div id="form">
    <h4>Please Login</h4>
    <form action="login_handler.php" method="post">
        <label for="ID">Email:</label>
        <input type="text" placeholder="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" placeholder='password' id="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>
</body>
</html>
