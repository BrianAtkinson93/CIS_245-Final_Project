<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/functions.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = getUserByEmailAndPassword($email, $password);
var_dump($user); // check the value of $user

if ($user) {
    // Set session variables
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];

    if ($user['role'] === 'admin') {
        header("Location: ../admin/admin_index.php");
    } else {
        header("Location: ../index.php");
    }
} else {
    // Redirect back to the login page with an error message
    $_SESSION['error'] = "Invalid email or password.";
    header("Location: login.php");
}
