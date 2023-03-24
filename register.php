<?php
require_once 'includes/functions.php';
include 'includes/header.php';

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
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view/lost_found.php">Lost & Found</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view/missing_persons.php">Missing Persons</a>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['email'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<body>
<h1>Register</h1>
<form action="register_handler.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Register">
</form>
</body>
</html>
