<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>SHOW</title>
  </head>
  <body>
  <header>
        <div class="woj">
            <div class="lo">
                <div>
                   
                    <h2 class="w">Logo</h2>
                    
                </div>
            </div>

            <nav>
                  <li><a class="li" href="index.php">Login</a></li>
                   <li><a class="li" href="signUp.php">Sign Up</a></li>
                   <li><a class="li" href="home.php">Home</a></li>
                   <li><a class="li" href="profile.php">Profile Page</a></li>
                  <li><span><a href="logout.php" class="logout">Log Out</a></span></li>
                
            </nav>
        </div>
    </header>
    <div class="contain">
        <div class="box">
        <button class="btn btn-primary my-5"><a href="signUp.php" class="text-light">Add user</a></button>
    
  <table class="table " >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr><th></th><td></td><td></td><td></td><td></td>
    <td>
        <button class="btn btn-primary"><a href="updatee.php" class="text-light">UpDate</a></button>
        <button class="btn btn-danger"><a href="delete.php" class="text-light">Delete</a></button>
</td></tr>
    
  </tbody> 
</table>
</div>
</div>
<footer>
        <div class="footer-content">
            <h3>User management</h3>
            <ul class="contact">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>

    </footer>
   
  </body>
</html>