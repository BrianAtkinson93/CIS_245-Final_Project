<?php
session_start();
include '../include/config/connection.php';

// Redirect to login page if user is not logged in
if (!isset($_SESSION['email'])) {
    header('Location: ../login.php');
    exit;
}


//// Get the three newest items from the lost_found table
//$lf_query = "SELECT * FROM lost_found ORDER BY id DESC LIMIT 3";
//$lf_result = mysqli_query($conn, $lf_query);

// Get the three most wanted from the most_wanted table
$mw_query = "SELECT * FROM most_wanted ORDER BY id DESC LIMIT 3";
$mw_result = mysqli_query($conn, $mw_query);

// Get the three first missing persons from the missing_persons table
$mp_query = "SELECT * FROM missing_persons ORDER BY id ASC LIMIT 3";
$mp_result = mysqli_query($conn, $mp_query);

// Get the lost items from the lost_items table
$lf_query = "SELECT * FROM lost_items ORDER BY id DESC LIMIT 3";
$lf_result = mysqli_query($conn, $lf_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SESSION['first_name']; ?>'s Home</title>
    <link rel="stylesheet" href="../include/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../include/css/styles.css">
    <link rel="icon" type="image/png" href="../images/webpage/hacker.png">
</head>
<body>

<!-- Fade everything out if prompt -->
<div id="overlay"></div>

<!-- prompt to scroll -->
<div id="scroll-prompt" class="scroll-prompt">
    <p>Scroll down to see more content</p>
</div>

<!-- Hamburger menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="main.php"><?php echo $_SESSION['first_name']; ?>'s Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Lost&Found.php">Lost & Found</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="most_wanted.php">Most Wanted</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../contact.php">Contact Us</a>
            </li>
        </ul>
        <div class="user-container">
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

<!--Most wanted area-->
<div class="container">
    <h2>Most Wanted</h2>
    <div class="row">
        <?php if (mysqli_num_rows($mw_result) > 0): ?>

            <?php while ($mw_row = mysqli_fetch_assoc($mw_result)): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../<?php echo $mw_row['image_path']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mw_row['name']; ?></h5>
                            <p class="card-text"><?php echo $mw_row['offence_details']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center">No lost items found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!--missing person area-->
<div class="container">
    <h2>Missing Persons</h2>
    <div class="row">
        <?php if (mysqli_num_rows($mp_result) > 0): ?>
            <?php while ($mp_row = mysqli_fetch_assoc($mp_result)): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../<?php echo $mp_row['image_path']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mp_row['name']; ?></h5>
                            <p class="card-text"><?php echo $mp_row['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center">No lost items found or reported.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!--lost items area-->
<div class="container">
    <h2>Lost Items</h2>
    <div class="row">
        <?php if (mysqli_num_rows($lf_result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($lf_result)): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['crime_type']; ?></h5>
                            <p class="card-text">Location: <?php echo $row['crime_location']; ?></p>
                            <p class="card-text">Description: <?php echo $row['crime_description']; ?></p>
                            <p class="card-text">Reported by: <?php echo $row['email']; ?></p>
                            <p class="card-text">Reported at: <?php echo $row['created_at']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center">No lost items found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!--JavaScript for the popup // overlay-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var scrollPrompt = document.getElementById("scroll-prompt");
        var overlay = document.getElementById("overlay");
        var promptTimeout;
        var userHasScrolled = false;

        function showPrompt() {
            scrollPrompt.classList.add("show");
            overlay.style.display = 'block';
        }

        function hidePrompt() {
            scrollPrompt.classList.remove("show");
            overlay.style.display = 'none';
        }

        window.addEventListener("scroll", function () {
            userHasScrolled = true;
            hidePrompt();
            clearTimeout(promptTimeout);
        });

        if (!userHasScrolled) {
            setTimeout(function () {
                showPrompt();
                promptTimeout = setTimeout(function () {
                    hidePrompt();
                }, 3000); // Hide the widget after 3 seconds if the user hasn't scrolled
            }, 1000); // Show the widget after 1 second
        }
    });
</script>

<script src="../include/bootstrap-4.5.3-dist/js/bootstrap.min.js"></scipt>

</body>
</html>
