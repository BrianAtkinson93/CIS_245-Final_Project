<?php
session_start();
session_destroy();
header('Refresh: 2; URL = index.php');
echo 'You have been logged out. Redirecting to guest page...';
exit;
?>
