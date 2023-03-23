<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (registerUser($username, $email, $password)) {
    $_SESSION['success'] = "Registration successful. You can now log in.";
    header("Location: login.php");
} else {
    $_SESSION['error'] = "An error occurred during registration. Please try again.";
    header("Location: register.php");
}
