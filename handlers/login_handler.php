<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../include/config/connection.php';

session_start();

if (isset($_POST['submit'])) {
    // Get the user's email and password from the form
    $email = $_POST['username'];
    $password = $_POST['password'];

    // Validate the user's credentials against the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            // Password is correct, set the session variable and redirect to the main page
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['user_role'] = $row['user_role'];
            header('Location: ../main.php');
            exit;
        } else {
            $message = "Incorrect password";
        }
    } else {
        $message = "User not found";
    }
}

// If we get here, the login failed
//echo the error message
echo $message;
header('Location: login.php');
exit;

?>