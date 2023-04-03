<?php
//session_start();

// Redirect to login page if user is not logged in
//if (!isset($_SESSION['username'])) {
//
//}
?>

<!DOCTYPE html>
<?php
include 'include/config/connection.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Guest Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, serif;
        }

        #logo-div {
            width: 100%;
            min-height: 50px;
            background-color: #8b0000;
            padding-left: 2%;
            line-height: 50px;
            margin-bottom: 10px;
            color: white;
        }

        #nav-div {
            width: 100%;
            min-height: 30px;
            background-color: #8b0000;
            text-align: center;
            line-height: 30px;
            margin-bottom: 10px
        }

        .nav-item {
            display: inline-block;
            margin-right: 20px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        #header-banner-div {
            width: 100%;
            min-height: 100px;
            background-color: lightgray;
            text-align: center;
            line-height: 100px;
            margin-bottom: 10px

        }

        #main-div {
            width: 100%;
            margin-bottom: 10px;


        }

        #side-bar-div {
            width: 20%;
            min-height: 400px;
            background-color: lightgrey;
            float: left;
            text-align: center;
            line-height: 400px;
            line-height: 1.5;
        }

        #side-bar-div img {
            max-width: 100%;
            height: 400px;
        }

        #side-bar-div img:hover {
            opacity: 0.7;
        }


        #body-div {
            width: 75%;
            min-height: 400px;
            background-color: lightgrey;
            float: right;
            text-align: center;
            line-height: 400px;
            line-height: 1.5;


        }

        .clearfix::after {
            content: "";
            display: block;
            clear: both;

        }

        #main-div {
            width: 100%;
            min-height: 400px;


        }

        #main-div .box {
            width: 30%;
            min-height: 400px;
            background-image: url("lost.jpeg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            float: left;
            text-align: center;
            line-height: 400px;
            margin-bottom: 10px;

        }

        #main-div .box:hover {
            opacity: 0.7;
        }

        #main-div .box:nth-child(2) {
            margin-left: 5%;
            margin-right: 5%;

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
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
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

        #wrapper {
            width: 95%;
            margin: auto;

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

        #reg {
            text-align: right;
        }

        input[type="submit"] {
            background-color: #8b0000;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #ff4500;

        }

        #main-div .box:hover {
            background-color: gray;
            color: white;
            cursor: pointer;
        }

    </style>
</head>

<body>

<div id="wrapper">
    <div id="logo-div">
        OCRS
        <nav id=" reg">
            <?php if (!isset($_SESSION['email'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php endif; ?>
        </nav>
    </div>

    <div id="nav-div">
        <ul>
            <li class="nav-item"><a class="nav-link" href="Lost&Found.php">Lost&Found</a></li>
            <li class="nav-item"><a class="nav-link" href="view/missing_person.php">Missing Person</a></li>
            <li class="nav-item"><a class="nav-link" href="view/most_wanted.php">Most Wanted People</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>

    </div>

    <div id="header-banner-div">
        Online Crime Reporting
    </div>

    <div id="main-div" class="clearfix">
        <div id="side-bar-div">
            <img src="side.jpeg" alt="Side Image">

        </div>
        <div id="body-div">
            <p>
            <p>Welcome to our online crime reporting system. We understand that reporting a crime can be a daunting
                task, which is why we have made it easier for you to report crimes online from the comfort of your own
                home.</p>

            <p>Our online crime reporting system is secure, confidential, and easy to use. If you have witnessed a
                crime, been a victim of a crime, or have information about a crime, you can report it to us through our
                online platform.</p>

            <p>When you submit a report, we ensure that it is received by our law enforcement team promptly. They will
                review the report and take appropriate action to investigate the crime. If necessary, they will contact
                you for additional information.</p>

            <p>Please note that in case of an emergency or a crime in progress, you should call 911 or your local
                emergency number. Our online reporting system is only for non-emergency situations.</p>

            <p>We take all reports seriously and are committed to working with you to ensure that our communities remain
                safe. Thank you for choosing to report crime online, and we hope that our system provides you with a
                convenient way to help keep our neighborhoods safe.</p>
        </div>
    </div>

    <div id="main-div" class="clearfix">
        <div class="box">

            <form action="Lost&Found.php" method="POST">
                <input type="submit" name="submit1" value="Report a Crime for lost and found ">
            </form>
        </div>
        <div class="box">
            <form action="view/missing_person.php" method="POST">
                <input type="submit" name="submit2" value="Report a Crime for missing person">
            </form>
        </div>
        <div class="box">
            <form action="contact.php" method="POST">
                <input type="submit" name="submit3" value="Report any Crime">
            </form>
        </div>
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
                        <li><a href="index.php">Main</a></li>
                        <li><a href="contact.php">Report</a></li>
                        <li><a href="login.php">login</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>connect with us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
    </footer>

</div>

</body>
</html>
     
    