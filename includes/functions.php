<?php
require_once 'config.php';

function isAuthenticated()
{
    return isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['role']);
}


function getAllReports($table_name)
{
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
