<?php
require_once 'config.php';

function isAuthenticated()
{
    return isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['role']);
}

function getUserByEmailAndPassword($email, $password) {
    global $conn;
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

function registerUser($username, $email, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
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
