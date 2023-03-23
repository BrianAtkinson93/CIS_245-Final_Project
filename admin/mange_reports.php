<?php
require_once '../includes/functions.php';

if (!isAuthenticated()) {
    header("Location: ../login.php");
    exit();
}

$reports = getAllReports(); // Implement this function in functions.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Reports</title>
</head>
<body>
<h1>Manage Reports</h1>
<!-- Display the list of reports -->
<?php while ($row = $reports->fetch_assoc()): ?>
    <!-- Customize the display of report details -->
    <div>
        <h2><?php echo $row['report_type']; ?></h2>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endwhile; ?>
<!-- Add functionality to edit, delete, or mark reports as resolved -->
</body>
</html>
