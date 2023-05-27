<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
    <title>Home Page</title>4
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="contain">
               <h1> Home page </h1>
               <ul>
                   <li><a class="li" href="index.php">Login</a></li>
                   <li><a class="li" href="signUp.php">Sign Up</a></li>
                   <li><a class="li" href="home.php">Home</a></li>
                   <li><a class="li" href="profile.php">Profile Page</a></li>
               </ul> 
            </div>
           </nav>      
      </header>
    <?php  
$userName = $_SESSION['userName'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
 ?>
 <h3 id= "h3"> Welcom To My Profile   </h3>
    <div class="header"  >
            <label class="information" for="email"> User Name</label> <br>
            <b name = "name"> <?php echo "$userName" ?>   </b><br>
            <label class="information" for="email"> User Email </label> <br>
            <b name = "email"> <?php echo "$Email" ?>   </b><br>
            <label class="information" for="Password"> Password </label> <br>
            <!-- <b name = "Password"> <?php echo "$password" ?>   </b><br> -->
    </div>
<!--Bootstrap 5 js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>