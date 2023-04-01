<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Missing Persons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/styles.css">
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
                <a class="nav-link" href="index3.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Lost&Found.php">Lost&Found</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Most%20wanted%20people.php">Most Wanted</a>
            </li>
<!--            --><?php //if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Admin-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="adminDropdown">-->
<!--                        <a class="dropdown-item" href="add_missing_person.php">Add Most Wanted</a>-->
<!--                        <a class="dropdown-item" href="edit_missing_person.php">Edit Most Wanted</a>-->
<!--                        <a class="dropdown-item" href="remove_missing_person.php">Remove Most Wanted</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--            --><?php //endif; ?>

        </ul>
        <div class="user-container ml-auto">
            <?php if (isset($_SESSION['email'])): ?>
                <span style="margin-right: 15px;">Welcome, <?php echo $_SESSION['first_name']; ?></span>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>

</nav>

<?php include 'connection.php'; ?>
<div class="most-wanted-container">
    <?php
    $query = "SELECT * FROM missing_persons";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="most-wanted-widget">';
        echo '<img src="' . $row['image_path'] . '" alt="Missing Person">';
        echo '<div>';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';
        echo '</div>';
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
