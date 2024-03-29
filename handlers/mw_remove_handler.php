<?php
session_start();
include '../include/config/connection.php';

// Redirect to login page if user is not logged in or user is not an admin
if (!isset($_SESSION['email']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

// Check if the ID is provided
if (!isset($_GET['id'])) {
    echo "Invalid request";
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

// Get the image path from the database
$query = "SELECT image_path FROM most_wanted WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error getting image path: " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
$image_path = $row['image_path'];

// Delete the most wanted entry from the database
$query = "DELETE FROM most_wanted WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error deleting most wanted entry: " . mysqli_error($conn);
    exit;
}

// Remove the associated image file from the server
if (file_exists($image_path)) {
    unlink($image_path);
}

mysqli_close($conn);
header('Location: ../view/most_wanted.php');
exit;
