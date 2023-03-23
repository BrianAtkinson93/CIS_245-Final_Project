<?php
require_once '../includes/functions.php';
$crimes = getAllCrimes();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Crimes</title>
</head>
<body>
<h1>Reported Crimes</h1>
<!-- Display the list of reported crimes -->
<?php while ($row = $crimes->fetch_assoc()): ?>
    <!-- Customize the display of crime details -->
    <div>
        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endwhile; ?>
</body>
</html>
