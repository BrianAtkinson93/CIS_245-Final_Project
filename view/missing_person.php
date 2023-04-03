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
    <title>Missing Persons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/css/styles.css">
</head>
<body>

<!-- Hamburger menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Missing Persons</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Lost&Found.php">Lost&Found</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/most_wanted.php">Most Wanted</a>
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
    $query = "SELECT * FROM missing_persons";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="most-wanted-widget">';
        echo '<img src="../' . $row['image_path'] . '" alt="Missing Person">';
        echo '<div>';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';

        // Add the delete button for admin users
        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
            echo '<a href="../handlers/mp_remove_handler.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
        }

        echo '</div>';
        echo '</div>';
    }
    ?>
    <?php

    // Show the "Add Missing Person" form only if the user is an admin
    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
        echo '<div class="add-most-wanted-widget">';
        echo '<h3>Add Missing Person</h3>';
        echo '<form action="../handlers/mp_add_handler.php" method="post" enctype="multipart/form-data">';
        echo '<div class="form-group">';
        echo '<label for="name">Name:</label>';
        echo '<input type="text" class="form-control" id="name" name="name" required>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="description">Description:</label>';
        echo '<textarea class="form-control" id="description" name="description" rows="5" required></textarea>';
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
</body>
</html>
