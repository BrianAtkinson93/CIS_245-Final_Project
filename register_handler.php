<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (registerUser($name, $email, $password)) {
    header("Location: login.php");
} else {
    // Redirect back to the register page with an error message
    $_SESSION['error'] = "Failed to register. Please try again.";
    header("Location: register.php");
}
