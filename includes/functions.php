<?php
require_once 'config.php';

function isAuthenticated() {
    // Implement your authentication logic
}

function getAllCrimes() {
    global $conn;
    $query = "SELECT * FROM crimes";
    $result = $conn->query($query);
    return $result;
}

// Add more functions as needed
?>
