<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/functions.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = getUserByEmailAndPassword($email, $password);
var_dump($user); // check the value of $user

if ($user) {
    // Set session variables
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['user_id'] = $user['id']; // Replace $user_id with the actual user ID from the database
    $_SESSION['username'] = $user['username']; // Replace $username with the actual username from the database
    $_SESSION['role'] = $user['role']; // Replace $role with the actual user role from the database


    if ($user['role'] === 'admin') {
        header("Location: admin/admin_index.php");
    } else {
        header("Location: index.php");
    }
} else {
    // Redirect back to the login page with an error message
    $_SESSION['error'] = "Invalid email or password.";
    header("Location: login.php");
}
