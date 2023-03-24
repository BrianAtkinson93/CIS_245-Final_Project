<?php
require_once '../includes/functions.php';
include '../includes/header.php';
session_start();

if (!isAuthenticated()) {
    header("Location: ../login.php");
    exit();
}
$missing_persons = getAllReports('missing_persons');
?>
<body>
<!-- Hamburger Menu -->

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
                <a class="nav-link" href="lost_found.php">Lost & Found</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="missing_persons.php">Missing Persons</a>
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


<section class="container mt-5">
    <h1>Reported Missing Persons</h1>
    <div class="row">
        <?php
        $missing_persons = getAllReports('missing_persons');
        while ($row = $missing_persons->fetch_assoc()):
            // Construct the image path using the folder path and the image filename
            $image_path = '../images/' . $row['image_filename'];
            ?>
            <div class="col-md-4">
                <img src="<?php echo $image_path; ?>" alt="Missing Person <?php echo $row['id']; ?>" class="img-fluid uniform-image">
                <h3><?php echo $row['name']; ?></h3>
                <p>Age: <?php echo $row['age']; ?>, Last seen: <?php echo $row['last_seen']; ?></p>
                <p>Description: <?php echo $row['description']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php include '../includes/footer.php'; ?>
