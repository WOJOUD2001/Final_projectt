<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO</title>
    <link rel="stylesheet" href="css/css.css">


</head>

<body >

    <!-- <img id="image" src="./img/jojo.jpg" alt="the wed site logo" width="128" height="128" id="image" > -->
    <div class="header"  >
        <img src="./img/l.jpg" alt="login logo" width="128" height="128">
        <form action="" method="post">
            <!-- <div class="information">
                    <label>UserName</label><br>
                    <input type="text" class="name" required><br>
                </div> -->
            <label class="information" for="email"> Enter your E-mail </label> <br>
            <input class="information"  type="email" name="email" id="email"  required="required"> <br>

            <label class="information" for="password"> Enter Your Password </label> <br>
            <input class="information" type="password" name="password" id="password" required="required"> <br> <br>
            
            <input id="submit" type="submit" name="login" value="login"> <br>
            <br>
            Don't Have Account? <a href="signUp.php">Sign Up</a>


        </form>

    </div>
    <!-- <footer>
        <div class="footer-content">
            <h3>user management</h3>
            <ul class="contact">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
</footer> -->



</body>

</html>