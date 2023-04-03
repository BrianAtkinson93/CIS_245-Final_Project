<!DOCTYPE html>
<?php
include 'include/config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    $email = $_POST['email'];
    $sql = "SELECT id FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "User with that email already has an account.";
    } else {
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstname, $lastname', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "New user created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="include/css/styles.css">
</head>
<body>
<div class="registration-form">
    <form action="register.php" method="POST">
        <div class="container">
            <h1>Registration</h1>

            <label for="firstname"><b>First name</b></label>
            <input type="text" name="firstname" required><br><br>

            <label for="lastname"><b>Last name</b></label>
            <input type="text" name="lastname" required><br><br>

            <label for="email"><b>Email</b></label>
            <input type="email" name="email" required><br><br>

            <label for="phonenumber"><b>Phone NO</b></label>
            <input type="text" name="phonenumber" required><br><br>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required><br><br>

            <input type="submit" name="create" value="Register"><br><br>

            <button onclick="window.location.href = 'index.php';">Return Home</button>
        </div>
    </form>
</div>
</body>
</html>
