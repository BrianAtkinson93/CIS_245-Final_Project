<?php
session_start();
include '../include/config/connection.php';

// Redirect to login page if user is not logged in
if (!isset($_SESSION['email'])) {
    header('Location: ../login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Most Wanted People</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/css/styles.css">
    <!--     Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--     Include Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="../images/webpage/hacker.png">

</head>
<body>

<!-- Hamburger menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Most Wanted People</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../view/main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Lost&Found.php">Lost&Found</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/missing_person.php">Missing Persons</a>
            </li>
        </ul>
        <div class="user-container ml-auto">
            <?php if (isset($_SESSION['email'])): ?>
                <span style="margin-right: 15px;">Welcome, <?php echo $_SESSION['first_name']; ?></span>
                <a href="../logout.php">Logout</a>
            <?php else: ?>
                <a href="../login.php">Login</a>
                <a href="../register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>

</nav>
<div class="most-wanted-container">
    <?php
    $query = "SELECT * FROM most_wanted";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="most-wanted-widget">';
        echo '<img src="../' . $row['image_path'] . '" alt="Most Wanted">';
        echo '<div>';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p>' . $row['offence_details'] . '</p>';

        // Add the delete button for admin users
        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
            echo '<a href="../handlers/mw_remove_handler.php?id=' . $row['id'] . '" class="btn btn-danger delete-button">Delete</a>';
        }


        echo '</div>';
        echo '</div>';
    }

    // Show the "Add Most Wanted" form only if the user is an admin
    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
        echo '<div class="add-most-wanted-widget">';
        echo '<h3>Add Most Wanted</h3>';
        echo '<form action="../handlers/mw_add_handler.php" method="post" enctype="multipart/form-data">';
        echo '<div class="form-group">';
        echo '<label for="name">Name:</label>';
        echo '<input type="text" class="form-control" id="name" name="name" required>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="offence_details">Offence Details:</label>';
        echo '<textarea class="form-control" id="offence_details" name="offence_details" rows="5" required></textarea>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="image">Image:</label>';
        echo '<input type="file" class="form-control-file" id="image" name="image" required>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Submit</button>';
        echo '</form>';
        echo '</div>';
    }
    ?>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
