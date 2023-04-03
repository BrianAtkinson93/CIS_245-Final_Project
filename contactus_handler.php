<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
      
    </head>
    <body>
        <div id="contact-table">
       <?php
    include 'include/config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $subject = $_POST['subject'];
    $email   = $_POST['email'];

    $sql = "INSERT INTO contact2 (name, phone, subject, email) VALUES ('$name', '$phone', '$subject', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "One of our agents will contact you shortly.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $result = mysqli_query($conn, "SELECT * FROM contact2");

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Contact Information:</h2>";
        echo "<table style='border-collapse: collapse;'>";
        echo "<tr><th style='border: 1px solid black; padding: 5px;'>Name</th><th style='border: 1px solid black; padding: 5px;'>Phone</th><th style='border: 1px solid black; padding: 5px;'>Subject</th><th style='border: 1px solid black; padding: 5px;'>Email</th></tr><br><br>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td style='border: 1px solid black; padding: 5px;'>".$row["name"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["phone"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["subject"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["email"]."</td><td><a href='DropContact.php?name=".$row["name"]."'>Click here to delete</a></td></tr>";
        }
     
        echo "</table>";

    } else {
        echo "No contact information found";
    }

    mysqli_close($conn);
}
?>
            </div>
    </body>
</html>
