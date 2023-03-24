<?php
session_start();
require_once '../includes/functions.php';

if (!isAuthenticated()) {
    header("Location: ../login.php");
    exit();
}
include '../includes/header.php';

$lost_found = getAllReports('lost_and_found'); // Implement this function in functions.php

include '../includes/menu.php';
?>
<!-- Hamburger Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OCRS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/lost_found.php">Lost & Found</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/missing_persons.php">Missing Persons</a>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['email'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../register.php">Register</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<body>
<h1>Lost and Found Items</h1>
<!-- Display the list of lost and found items -->
<?php while ($row = $lost_found->fetch_assoc()): ?>
    <!-- Customize the display of lost and found item details -->
    <div>
        <h4><?php echo $row['item_name']; ?></h4>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endwhile; ?>
</body>
</html>
