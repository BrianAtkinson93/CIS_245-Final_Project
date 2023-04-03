<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php  include 'navigationbar.php'?>

<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: whitesmoke;
            font-size: 14px;

        }
        .container{
            width: 80%;
            margin: 50px auto;


        }
        .contact-box{
            background: #fff;
            display: flex;
            margin-bottom: 20px;
        }
        .contact-left{
            flex: 60%;
            padding: 40px 60px;
        }
        .contact-right{
            flex: 40%;
            padding: 40px;
            background: #8b0000;
            color: white;
        }
        h1{
            margin-bottom: 10px;
        }
        .container p{
            margin-bottom: 40px;
        }
        .input-row{
            display: flex;
            justify-content:space-between;
            margin-bottom: 20px;
        }
        .input-row .input-group{
            flex-basis: 45%;
        }
        input{
            width:100%;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            padding-bottom: 5px;
        }
        textarea{
            width: 100%;
            border: 1px solid #ccc;
            outline: none;
            padding: 10px;
            box-sizing: border-box;
        }

        label{
            margin-bottom: 6px;
            display: block;
            color: #8b0000;
        }
        button{
            background: #8b0000;
            width: 100px;
            border: none;
            outline: none;
            color: #fff;
            height: 35px;
            border-radius: 30px;
            margin-top: 20px;
        }
        .contact-left h3{
            color: #8b0000;
            font-weight: 600;
            margin-bottom: 30px;
        }
        .contact-right h3{

            font-weight: 600;
            margin-bottom: 30px;
        }
        tr td:first-child{
            padding-right: 20px;

        }
        tr td:first-child{
            padding-top: 20px;

        }
        body{
            line-height: 1.5;
            font-family: 'poppins', sans-serif;
        }
        .container{
            max-width: 1170px;


            margin: auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        ul{
            list-style:none;
        }
        .footer{
            background-color: #24262b;
            padding: 70px 0;
        }
        .footer-col{
            width: 25%;
            padding: 0 15px
        }
        .footer-col h4{
            font-size: 18px;
            color: #ffffff;
            text-transform:capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;

        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #8b0000;
            padding-left: 10px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #8b0000;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;

        }
    </style>

<body>

<div class = "container">
    <h1>Connect With Us</h1>
    <p>feel free to get in touch with us </p>
    <div class ="contact-box">
        <form action="contactus_handler.php" method="post">
        <div class="contact-left">
            <h3>sent your request</h3>
            <form>
                <div class="input-row">
                    <div class="input-group">
                        <label>Name</label>
                        <input type = "text" name="name">
                    </div>

                    <div class="input-group">
                        <label>Phone</label>
                        <input type = "text" name="phone">
                    </div>
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label>Email</label>
                        <input type = "email" name="email">
                    </div>

                    <div class="input-group">
                        <label>subject</label>
                        <input type = "text" name="subject">
                    </div>
                </div>
                <lebel>Message</lebel>
                <textarea rows="5" placeholder ="Your Message"></textarea>

                <button type = "submit" >Send</button>
            </form>
        </div>
        <div class="contact-right">
            <h3>Reach us</h3>
            <table>
                <tr>
                    <td>Email</td>
                    <td>Lost&Found@example.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>778-888-8888</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>508-22156 Street, Coquitlam, BC V5Z 6J5<br><!-- comment -->
                    </td>
                </tr>


            </table>
        </div>


    </div>

</div>
</body>
</head>
<body>
<footer class =" footer">

    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                        <li><a href="index3.php">about us</a></li>
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
                        <li><a href="Most wanted people">Most wanted people</a></li>
                      
                    </ul>
            </div>
                       <div class="footer-col">
                    <h4>Online Report</h4>
                    <ul>
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="index3.php">Main</a></li>
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


</body>
</html>
    
   