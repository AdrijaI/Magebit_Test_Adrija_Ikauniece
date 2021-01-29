<!DOCTYPE html>
<html>
    <head>
        <title>pineapple.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="./assets/css/style.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="./assets/js/validate.js"></script>
    </head>

    <body>
    
        <div id="main-container">
            
            <div class="menu">
                <img src="./assets/img/Union.svg"/>
                <img class="pineapple" src="./assets/img/pineapple..svg"/>

                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

        </div>

        <div id="background">
            <img src="./assets/img/image_summer.png"/>
        </div>

        <div id="subscribe-container">
            <h1>Subscribe to newsletter</h1>
            <h3>Subscribe to our newsletter and get 10% discount on pineapple glasses.</h3>
            <form id="form" action="" method="POST">
                <input id="input-field" type="email" name="email" placeholder="Type your email address here…" onkeydown="return validation()"/>
                <input id="submit" type="submit" name="submit" value="e" onclick="return checkboxValidation() "/>
                <span id="text"></span>
                <input id="checkbox" type="checkbox" name="checkbox" onclick="return checkboxValidation()"/>
                <p>I agree to <a href="#">terms of service</a></p>
            </form>
            
        </div>

        <?php

            if(isset($_POST['submit'])) {
                include "./assets/db/classes/dbh.php";
                $email = $_POST['email'];
                $provider = substr($email, strpos($email, '@') + 1);
                $date = date('Y-m-d');

                $submit = new Dbh();
                $submit->insertEmail($email, $provider, $date);
            }
            
        ?>

        <div id="icon-container">
           
                <a href="#"><div class="a">a</div></a>
                <a href="#"><div class="b">b</div></a>
                <a href="#"><div class="c">c</div></a>
                <a href="#"><div class="d">d</div></a>
            
        </div>
        
        

    </body>
</html>