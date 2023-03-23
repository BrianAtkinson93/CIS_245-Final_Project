<!DOCTYPE html>
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
        <!-- Replace the 'src' attribute with the actual image paths -->
        <div class="col-md-4">
            <img src="img/wanted1.jpg" alt="Most Wanted 1" class="img-fluid">
            <h3>John Doe</h3>
            <p>Wanted for robbery, assault, and other charges.</p>
        </div>
        <div class="col-md-4">
            <img src="img/wanted2.jpg" alt="Most Wanted 2" class="img-fluid">
            <h3>Jane Smith</h3>
            <p>Wanted for fraud, identity theft, and other charges.</p>
        </div>
        <div class="col-md-4">
            <img src="img/wanted3.jpg" alt="Most Wanted 3" class="img-fluid">
            <h3>Robert Brown</h3>
            <p>Wanted for burglary, drug trafficking, and other charges.</p>
        </div>
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
