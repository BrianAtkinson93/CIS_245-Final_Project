<?php
require_once '../includes/functions.php';
$lost_found = getAllLostAndFound(); // Implement this function in functions.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Lost and Found Items</title>
</head>
<body>
<h1>Lost and Found Items</h1>
<!-- Display the list of lost and found items -->
<?php while ($row = $lost_found->fetch_assoc()): ?>
    <!-- Customize the display of lost and found item details -->
    <div>
        <h2><?php echo $row['item_name']; ?></h2>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php endwhile; ?>
</body>
</html>
