<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial;
        }
        #logo-nav {
            width: 100%;
            min-height: 50px;
            background-color: #8b0000;
            margin-bottom: 10px;

        }
        #logo-div {
            color: white;
            width: 50%;
            min-height: 50px;
            float:left;
            line-height: 50px;
            padding-left: 2%;

        }
        @media only screen and (max-width: 767px) {
            #logo-div {
                padding-left: 2%;
            }
        }
        #nav-div {
            width: 100%;
            min-height: 30px;
            text-align: center;
            line-height: 30px;
            margin-bottom: 10px;
            line-height: 50px;
            padding-left: 2%;
        }

        .nav-item {
            display: inline-block;
            margin-right: 10px;
            padding: 0 10px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

    </style>
    <title>Nav bar?</title>
<body>


<div id= "logo-nav" class="clearfix">
    <div id= "logo-div">
        OCRS
    </div>

    <div id="nav-div">
        <ul>

            <li class="nav-item"><a class="nav-link" href="view/main.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="Lost&Found.php">Lost&Found</a></li>
            <li class="nav-item"><a class="nav-link" href="view/missing_person.php">Missing Person</a></li>
            <li class="nav-item"><a class="nav-link" href="view/most_wanted.php">Most Wanted People</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>

    </div>
</div>


</body>

</head>
</html>



