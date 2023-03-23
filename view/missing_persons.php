<?php
include '../includes/header.php';
require_once '../includes/config.php';
require_once '../includes/functions.php';
$missing_persons = getAllReports('missing_persons');
?>

<body>
<!-- Hamburger Menu -->
<?php include '../includes/menu2.php'; ?>
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
</html>
