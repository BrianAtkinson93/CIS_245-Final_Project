<?php
require_once 'config.php';

function isAuthenticated() {
    return isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['role']);
}


function getAllCrimes() {
    global $conn;
    $query = "SELECT * FROM crimes"; // Assuming your crimes table is named 'crimes'
    $result = $conn->query($query);
    return $result;
}

function getAllReports($table_name) {
    global $conn;
    $allowed_tables = ['crimes', 'missing_persons', 'lost_and_found'];
    if (!in_array($table_name, $allowed_tables)) {
        return false;
    }
    $query = "SELECT * FROM {$table_name}";
    $result = $conn->query($query);
    return $result;
}



// Add more functions as needed
?>
