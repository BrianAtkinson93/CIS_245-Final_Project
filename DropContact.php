<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'connection.php';

if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Delete the record from the contact table
    $sql = "DELETE FROM contact2 WHERE name = '$name' OR phone = '$name' OR email = '$name' OR subject = '$name'";
    if (mysqli_query($conn, $sql)) {
        echo "Contact information deleted successfully";
    } else {
        echo "Error deleting contact information: " . mysqli_error($conn);
    }
} else {
    echo "Wrong approach.";
}

mysqli_close($conn);
?>
        
    </body>
</html>
