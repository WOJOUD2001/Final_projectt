<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
</head>
<body id="body">
<!-- <img id="image" src="./img/l.jpg" alt="login logo" width="128" height="128" id="image" > -->
    <div class="header">
        <form action="signUp.php" method="post" enctype="multipart/form-data" >
            <label class="information" for="name"> Enter Your Name </label> <br>
            <input class="information" type="text" name="name" id="name" required="required" > <br>
            <label class="information" for="email"> Enter Your Email </label> <br>
            <input class="information" type="email" name="email" required="required" id="email" > <br>
            <label class="information" for="password"> Enter Your Password </label> <br>
            <input class="information" type="password" name="password" required="required" id="password"  > <br>
            <label class="information" for="password"> Confirm Your Password </label> <br>
            <input class="information" type="password" name="confirm_password" id="confirm_password" required="required" > <br>
             <!-- <div class="role"> -->
       <label for="role" >Role : </label>
		<input type="radio" id="male" name="gender" value="user" required>
		<label for="admin">admin</label>
		<input type="radio" id="female" name="gender" value="user">
		<label for="user">user</label><br>
<!-- </div> -->
             <br> 
            <button id="submit"type="submit">Up Date</button><br> <br>
            <button id="submit" type="submit"><a href="display.php" style="text-decoration: none;"> Back</a></button>
        </form>
    </div>
</body>
</html>
            </form>
        </div>
    </div>
</body>
</html>