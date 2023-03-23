<?php
require_once '../includes/functions.php';
$most_wanted = getAllMostWanted(); // Implement this function in functions.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Most Wanted Persons</title>
</head>
<body>
<h1>Most Wanted Persons</h1>
<!-- Display the list of most wanted persons -->
<?php while ($row = $most_wanted->fetch_assoc()): ?>
    <!-- Customize the display of most wanted person details -->
    <div>
        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endwhile; ?>
</body>
</html>
