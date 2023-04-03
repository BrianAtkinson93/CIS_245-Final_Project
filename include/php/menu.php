<!-- Hamburger menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../../view/main.php"><?php echo $_SESSION['first_name']; ?>'s Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../view/main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../Lost&Found.php">Lost & Found</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../../view/most_wanted.php">Most Wanted</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../../contact.php">Contact Us</a>
            </li>
        </ul>
        <div class="user-container">
            <?php if (isset($_SESSION['email'])): ?>
                <span style="margin-right: 15px;">Welcome, <?php echo $_SESSION['first_name']; ?></span>
                <a href="../../logout.php">Logout</a>
            <?php else: ?>
                <a href="../../login.php">Login</a>
                <a href="../../register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>