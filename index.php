<!DOCTYPE html>
<?php require_once 'includes/functions.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Crime Reporting System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
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
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Most Wanted Section -->
<section class="container mt-5">
    <h2>Most Wanted</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="assets/images/Putin.jpg" alt="Most Wanted 1" class="img-fluid">
            <h3>Vladimir Putin</h3>
            <p>Wanted for multiple human rights violations, corruption, and undermining democracy.</p>
        </div>
        <div class="col-md-4">
            <img src="assets/images/Ruja.jpg" alt="Most Wanted 2" class="img-fluid">
            <h3>Ruja Ignatova</h3>
            <p>Wanted for running a multi-billion dollar Ponzi scheme through OneCoin cryptocurrency.</p>
        </div>
        <div class="col-md-4">
            <img src="assets/images/wanted3.jpg" alt="Most Wanted 3" class="img-fluid">
            <h3>Joseph Kony</h3>
            <p>Wanted for crimes against humanity, including abduction, sexual enslavement, and child soldier recruitment.</p>
        </div>

    </div>
</section>

<!-- Missing Persons Section -->
<section class="container mt-5">
    <h2>Missing Persons</h2>
    <div class="row">
        <?php
        $missing_persons = getAllReports('missing_persons');
        while ($row = $missing_persons->fetch_assoc()):
            // Construct the image path using the folder path and the image filename
            $image_path = 'images/' . $row['image_filename'];
            ?>
            <div class="col-md-4">
                <img src="<?php echo $image_path; ?>" alt="Missing Person <?php echo $row['id']; ?>" class="img-fluid">
                <h3><?php echo $row['name']; ?></h3>
                <p>Age: <?php echo $row['age']; ?>, Last seen: <?php echo $row['last_seen']; ?></p>
                <p>Description: <?php echo $row['description']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</section>


<!-- Additional relevant information -->
<section class="container mt-5">
    <h2>Latest News & Updates</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>News Item 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, similique.</p>
        </div>
        <div class="col-md-4">
            <h3>News Item 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, similique.</p>
        </div>
        <div class="col-md-4">
            <h3>News Item 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, similique.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-light py-3 mt-5">
    <div class="container">
        <p class="text-center mb-0">Online Crime Reporting System &copy; 2023</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
