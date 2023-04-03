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

// Get the image path for the missing person
$query = "SELECT image_path FROM missing_persons WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$image_path = $row['image_path'];

// Delete the missing person from the database
$query = "DELETE FROM missing_persons WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error deleting missing person: " . mysqli_error($conn);
}

// Delete the associated image
if (file_exists('../images/missing_persons/' . $image_path)) {
    unlink('../images/missing_persons/' . $image_path);
}

mysqli_close($conn);
header('Location: ../view/missing_person.php');
exit;
?>
