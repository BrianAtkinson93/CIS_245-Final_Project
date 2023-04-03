<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Report Missing Person</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/styles.css">
</head>
<body>
<!-- Hamburger menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Most Wanted People</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Lost&Found.php">Lost & Found</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Report Missing Person</a>
            </li>
        </ul>
        <div class="user-container">
            <?php if (isset($_SESSION['username'])): ?>
                <span>Welcome, <?php echo $_SESSION['username']; ?></span>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div class="registration-form">
    <h1>Report Missing Person</h1>
    <form action="submit_missing_person.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="last_seen">Last seen:</label>
            <input type="text" class="form-control" id="last_seen" name="last_seen" required>
        </div>
        <div class="form-group">
            <label for="image_path">Image:</label>
            <input type="file" class="form-control-file" id="image_path" name="image_path" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
