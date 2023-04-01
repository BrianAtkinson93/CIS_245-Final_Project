<?php
session_start();
require_once 'connection.php';

// Redirect to login page if user is not logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $name = $_POST['name'];
    $offence_details = $_POST['offence_details'];

    // Check if image file is selected
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_size = $image['size'];
        $image_tmp = $image['tmp_name'];
        $image_type = $image['type'];

        // Check if the file is an image
        if (strpos($image_type, 'image') !== false) {

            // Generate a unique file name for the image
            $image_name = uniqid() . '-' . $image_name;

            // Move the image to the uploads folder
            move_uploaded_file($image_tmp, 'images/' . $image_name);

            // Insert data into database
            $query = "INSERT INTO most_wanted (name, offence_details, image_path) VALUES ('$name', '$offence_details', 'images/$image_name')";
            $result = mysqli_query($conn, $query);

            // Redirect to the most wanted page
//            header('Location: most_wanted.php');
//            exit;
        } else {
            echo 'The file must be an image.';
        }
    }
}
move_uploaded_file($image_tmp, 'images/' . $image_name);

// Check if file is uploaded successfully
if (!$result) {
    die("Error uploading file: " . mysqli_error($conn));
}

// Redirect to the most wanted page
header('Location: Most wanted people.php');
exit;
?>
