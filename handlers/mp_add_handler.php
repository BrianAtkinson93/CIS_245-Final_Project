<?php
session_start();
include '../include/config/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $last_seen = $_POST['last_seen'];
    $description = $_POST['description'];

    // Handle image upload
    $target_dir = "../images/missing_persons/";
    $image_name = basename($_FILES["image_path"]["name"]);
    $target_file = $target_dir . $image_name;
    move_uploaded_file($_FILES["image_path"]["tmp_name"], $target_file);

    // Insert the missing person data into the database
    $sql = "INSERT INTO missing_persons (name, gender, last_seen_location, image_path, description) VALUES ($name, $gender, $last_seen, $image_name, $description)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "sissss", $name, $age, $gender, $last_seen, $target_file, $description);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../missing_person.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
