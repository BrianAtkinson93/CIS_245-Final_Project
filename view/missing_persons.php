<?php
require_once '../includes/functions.php';
$missing_persons = getAllMissingPersons(); // Implement this function in functions.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Missing Persons</title>
</head>
<body>
<h1>Reported Missing Persons</h1>
<!-- Display the list of reported missing persons -->
<?php while ($row = $missing_persons->fetch_assoc()): ?>
    <!-- Customize the display of missing person details -->
    <div>
        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endwhile; ?>
</body>
</html>
