<?php
// $delete = new Delete();

if(isset($_SESSION["id"])){
    $user = $delete-> delete($_SESSION["id"]);
    echo 
       "<script> alert('Delete successful'); </script>";
}else{
    echo 
       "<script> alert('Delete Error'); </script>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>delete</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>

<body >



<nav >
        <div>
            <h3>User<span>Portal</span></h3>
        </div>
        <ul>
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="#about">About</a></li>
            <li class="item"><a href="logout.php">Logout</a></li>
            <li class="item"><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <pre>
</pre>

<footer >

<div>
    <h3>User<span>Portal</span></h3>

    <p >
        <a href="#">Home</a>
       
        <a href="#">About</a>
       
        <a href="#">Contact</a>
      
        <a href="#">Blog</a>
    </p>

    <p>Copyright © 2021 <strong>user managment</strong></p>
</div>

<div>

    <div>
        <p>+9725864123</p>
    </div>
    <div>
        
        <p><a href="mailto:wojoud@gmail.com">wojoud@gmail.com</a></p>
    </div>
</div>
<div >
    <p >
        
        <strong>user manegment</strong> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, dicta?
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>
</body>
</html>