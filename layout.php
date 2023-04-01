<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php  include 'navigationbar.php'?>
<html lang="en">
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
    </style>

<body>

<div class = "container">
    <h1>Connect With Us</h1>
    <p>feel free to get in touch with us </p>
    <div class ="contact-box">
        <div class="contact-left">
            <h3>sent your request</h3>
            <form>
                <div class="input-row">
                    <div class="input-group">
                        <label>Name</label>
                        <input type = "text" >
                    </div>

                    <div class="input-group">
                        <label>Phone</label>
                        <input type = "text" >
                    </div>
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label>Email</label>
                        <input type = "email" >
                    </div>

                    <div class="input-group">
                        <label>subject</label>
                        <input type = "text" >
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
</html>
