<!DOCTYPE html>
<?php
include 'include/config/connection.php';
include 'navigationbar.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lost and Found</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, serif;
            box-sizing: border-box;
        }

        .clearfix::after {
            content: "";
            display: block;
            clear: both;
        }

        #header-banner {
            width: 100%;
            min-height: 100px;
            background-color: #8b0000;
            text-align: center;
            line-height: 100px;
            margin-bottom: 20px;
            position: relative;
            color: white;
        }

        #intro-div {
            width: 100%;
            min-height: 80px;
            background-color: lightgray;
            text-align: center;
            line-height: 80px;
            margin-bottom: 20px;
        }

        #main-div {
            width: 100%;
            min-height: 400px;
        }

        #main-div .box {
            width: 30%;
            min-height: 400px;
            background-color: lightgray;
            float: left;
            text-align: center;
            margin-bottom: 20px;
        }

        #main-div .box:nth-child(2) {
            margin-left: 5%;
            margin-right: 5%;
        }

        #extra-box {
            width: 100%;
            min-height: 400px;
            background-color: #F8F8FF;
            text-align: center;
            line-height: 100px;
            margin-bottom: 20px;
        }

        body {
            line-height: 1.5;
            font-family: 'poppins', sans-serif;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #24262b;
            padding: 70px 0;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;

            text-transform: capitalize;
            text-decoration: none;
            font-weight: 300;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #8b0000;
            padding-left: 10px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #8b0000;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;

        }

        p {
            text-align: justify;
            text-justify: inter-word;
            margin: 0;
            padding: 0;
            margin-bottom: 20px;
            padding-left: 2%;
            padding-right: 2%;

        }

        body {
            background-color: #f2f2f2;
        }


        .form-field {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type=text], input[type=email] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
            max-width: 400px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }

        #wrapper {
            width: 95%;
            margin: auto;

        }

    </style>

<body>


<div id="header-banner">

    <h1>Lost And Found </h1>

</div>
<div id="intro-div">
    We understand how frustrating it can be to lose something valuable, and we're here to help you reunite with your
    lost items
</div>

<div id="main-div" class="clearfix">
    <div class="box">
        <h3>Lost And Found</h3>
        <p>Welcome to our lost and found page! We understand how frustrating it can be to lose something valuable, and
            we're here to help you reunite with your lost items.</p>

        <p>On this page, you can browse through the items that have been reported as lost or found by our community. We
            encourage you to check back often as new items are added regularly.</p>

        <p>If you've lost something, you can also fill out a report form to let us know what you're missing, and we'll
            do our best to help you locate it.</p>

        <p>And if you've found something, please take a moment to report it so that we can get it back to its rightful
            owner. Thank you for using our lost and found service!</p>

    </div>
    <div class="box">
        <h3>Report a Loss </h3>
        <p>To report a loss or something you've found, simply fill out our online form with as much detail as possible
            about the item.</p>

        <p>For lost items, please include a description of the item, the location where you last had it, and the date
            and time of the loss.</p>

        <p>If you found something, please describe the item, the location where you found it, and the date and time you
            found it.</p>

        <p>Once you submit the form, our team will review it and add the information to our lost and found database.</p>

        <p>We'll also notify you if we receive any matches or if someone claims the item you found.</p>


    </div>
    <div class="box">
        <h3>The Benefits of Reporting Lost and Found</h3>
        <p>By reporting a loss or found item, you're helping to create a network of support within our community.</p>

        <p> having a central location to report the loss can help ease the burden.</p>

        <p>By sharing information about lost or found items, we can help reunite people with their belongings and reduce
            the amount of waste.</p>

        <p>Additionally, by reporting found items, you can help prevent theft and ensure that lost items are returned to
            their rightful owners.</p>

        <p>Thank you for your help in keeping our community connected and supporting each other in times of need.</p>

    </div>

</div>

<div id="extra-box">
    <div class="report-box-div">
        <form action="Lost&Found.php" method="POST">
            <div class="form-field">

                <label for="Type of crime"><b>Type of crime:</b></label>
                <input type="text" name="crime_type" required>
            </div>
            <div class="form-field">
                <label for="Location of crime"><b>Location of crime:</b></label>
                <input type="text" name="crime_location" required>
            </div>
            <div class="form-field">
                <label for="Description"><b>Description:</b></label>
                <input type="text" name="crime_description" required>
            </div>
            <div class="form-field">
                <label for="Email"><b>Email:</b></label>
                <input type="email" name="email" required>
            </div>
            <div class="form-field">
                <input type="submit" name="create" value="Report">
            </div>
    </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $crimeType = $_POST['crime_type'];
        $crimeLocation = $_POST['crime_location'];
        $crimeDescription = $_POST['crime_description'];
        $email = $_POST['email'];

        $sql = "INSERT INTO lost_items (crime_type, crime_location, crime_description, email) VALUES('$crimeType', '$crimeLocation', '$crimeDescription', '$email')";

        if (mysqli_query($conn, $sql)) {
            echo "one of our agents will contact you shortly";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
</div>

<footer class=" footer">

    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="index.php">about us</a></li>
                    <li><a href="Lost&Found.php">our service</a></li>
                    <li><a href="contact.php">Privacy Policy</a></li>
                    <li><a href="contact.php">programs</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get help</h4>
                <ul>
                    <li><a href="register.php">FAQ</a></li>
                    <li><a href="Lost&Found.php">Lost&found</a></li>
                    <li><a href="view/missing_person.php">Missing person</a></li>
                    <li><a href="view/most_wanted.php">Most wanted people</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>Online Report</h4>
                <ul>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="view/main.php">Main</a></li>
                    <li><a href="contact.php">Report</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>connect with us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
</footer>

</body>
</html>