<?php
require_once 'includes/config.php';
include 'includes/header.php';
?>
<body>
<h1>Login</h1>
<form action="login_handler.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>
