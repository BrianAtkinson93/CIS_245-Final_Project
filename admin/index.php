<?php
require_once '../includes/functions.php';

if (!isAuthenticated()) {
    header("Location: ../login.php");
    exit();
}

// Implement admin dashboard logic (e.g., fetch statistics, recent reports, etc.)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<h1>Admin Dashboard</h1>
<!-- Display admin dashboard content (e.g., statistics, recent reports, etc.) -->
</body>
</html>
