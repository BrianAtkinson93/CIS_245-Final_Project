<?php
session_start();
require_once 'connection.php';

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index3.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Lost&Found.php">Lost & Found</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Most%20wanted%20people.php">Most Wanted</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
<!--            --><?php //if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Admin-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="adminDropdown">-->
<!--                        <a class="dropdown-item" href="add_missing_person.php">Add Missing Person</a>-->
<!--                        <a class="dropdown-item" href="edit_missing_person.php">Edit Missing Person</a>-->
<!--                        <a class="dropdown-item" href="remove_missing_person.php">Remove Missing Person</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--            --><?php //endif; ?>
        </ul>
        <div class="user-container">
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

<?php
include 'connection.php';

//// Get the three newest items from the lost_found table
//$lf_query = "SELECT * FROM lost_found ORDER BY id DESC LIMIT 3";
//$lf_result = mysqli_query($conn, $lf_query);

// Get the three most wanted from the most_wanted table
$mw_query = "SELECT * FROM most_wanted ORDER BY id DESC LIMIT 3";
$mw_result = mysqli_query($conn, $mw_query);

// Get the three first missing persons from the missing_persons table
$mp_query = "SELECT * FROM missing_persons ORDER BY id ASC LIMIT 3";
$mp_result = mysqli_query($conn, $mp_query);

?>

<!--<div class="container">-->
<!--    <h2>Latest from Lost & Found</h2>-->
<!--    <div class="row">-->
<!--        --><?php //while ($lf_row = mysqli_fetch_assoc($lf_result)): ?>
<!--            <div class="col-md-4">-->
<!--                <div class="card">-->
<!--                    <img src="--><?php //echo $lf_row['image_path']; ?><!--" class="card-img-top" alt="...">-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">--><?php //echo $lf_row['title']; ?><!--</h5>-->
<!--                        <p class="card-text">--><?php //echo $lf_row['description']; ?><!--</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endwhile; ?>
<!--    </div>-->
<!--</div>-->

<div class="container">
    <h2>Most Wanted</h2>
    <div class="row">
        <?php while ($mw_row = mysqli_fetch_assoc($mw_result)): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $mw_row['image_path']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $mw_row['name']; ?></h5>
                        <p class="card-text"><?php echo $mw_row['offence_details']; ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<div class="container">
    <h2>Missing Persons</h2>
    <div class="row">
        <?php while ($mp_row = mysqli_fetch_assoc($mp_result)): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $mp_row['image_path']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $mp_row['name']; ?></h5>
                        <p class="card-text"><?php echo $mp_row['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
