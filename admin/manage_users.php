<?php
require_once '../includes/functions.php';

if (!isAuthenticated()) {
    header("Location: ../login.php");
    exit();
}

$users = getAllUsers(); // Implement this function in functions.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
</head>
<body>
<h1>Manage Users</h1>
<!-- Display the list of users -->
<?php while ($row = $users->fetch_assoc()): ?>
    <!-- Customize the display of user details -->
    <div>
        <h2><?php echo $row['username']; ?></h2>
        <p><?php echo $row['email']; ?></p>
    </div>
<?php endwhile; ?>
<!-- Add functionality to edit or delete users -->
</body>
</html>
