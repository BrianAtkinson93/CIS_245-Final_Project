<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial;
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
</head>
<body>
<footer class =" footer">

    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">programs</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Lost&found</a></li>
                    <li><a href="#">Missing person</a></li>
                    <li><a href="#">Most wanted people</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>Online Report</h4>
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Main</a></li>
                    <li><a href="#">Report</a></li>
                    <li><a href="#">login</a></li>
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
