<?php
session_start();
session_unset();
session_destroy();
header("Location: admin_index.php"); // Redirect the user to the home page or another appropriate page after logging out
exit();
