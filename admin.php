<?php


$result= mysqli_query($conn ,"SELECT * FROM users ");

?>
<!doctype html>
<html lang="en">

<head>
    <title>admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
</head>

<body >

<nav >
        <div >
            <h3>User<span>Portal</span></h3>
        </div>
        <ul>
            <li class="item"><a href="hom.php">Home</a></li>
            <li class="item"><a href="profile.php">Profile</a></li>
            <li class="item"><a href="#about">About</a></li>
            <li class="item"><a href="logout.php">logout</a></li>
        </ul>
</nav>

<div>
    <h2>Admin</h2> 
</div>

<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>Name </th>
            <th>Email </th>
            <th>Passsword </th>
            <th>Update </th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php 
            
            while($row= mysqli_fetch_assoc($result))
            {
                
            ?>
            <td> <?php echo $row['id'] ; ?></td>
            <td> <?php echo $row['name'] ; ?></td>
            <td> <?php echo $row['email'] ; ?></td>
            <td> <?php echo $row['password'] ; ?></td>
            <td> <a href="updatee.php" ><i class="fa-solid fa-pen"  ></i></a> </td>
            <td> <a href="delete.php" ><i class="fa-solid fa-trash" ></i></a> </td>

        </tr> 
           <?php 
            }
        
            ?>
        
  </tbody> 
   
</table>

<footer>

<div >
    <h3>User<span>Portal</span></h3>

    <p>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Blog</a>
    </p>
    <p >Copyright © 2021 <strong>user manegment</strong></p>
</div>
    <div>
        <p>+9725864123</p>
    </div>
    <div>
        <p><a href="mailto:wojoud@gmail.com">wojoud@gmail.com</a></p>
    </div>
</div>
        <span>User managment</span>
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