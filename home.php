<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap 5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home Page</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="contain">
               <h1> Home </h1>
               <ul>
                   <li><a class="li" href="index.php">Login</a></li>
                   <li><a class="li" href="signUp.php">Sign Up</a></li>
                   <li><a class="li" href="home.php">Home</a></li>
                   <li><a class="li" href="profile.php">Profile Page</a></li>
                   <li><span><a href="" class="logout">Log Out</a></span></li>


               </ul> 
            </div>
           </nav>      
      </header>
      
<!--start content-->
<div class="container">
    <div class="postForm">
       <div class="flexPostForm">
        <div class="imgPostForm">
            <img src="img/jojo.jpg" alt="">
        </div>
        <!-- Modal -->
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <textarea name = "post" class="form-control txtPostModal"  placeholder="Type your post here or select image to upload..."  rows="3"></textarea>
                    <input name = "file" class="form-control" type="file" id="formFile"><br>
                    <input name = "submitPost" class="btn btn-primary"  type="submit"  value="Post">
                    </form>
                   

                </div>

            </div>
            </div>
        </div>
       </div>     
    </div>

    <?php  

$sql = "SELECT id , name , Create_at , password, email , role
  FROM users AS p JOIN users AS u WHERE admin =1; user= 2";
      $res = mysqli_query($con, $sql);

      $rowNum = mysqli_num_rows($res);
      if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {

       echo '<div class="postCard">'.
               '<div class="postForm">'.
                   '<div class="flexPostForm">'.
                       '<div class="imgPostForm">'.
                           '<img src="img/jojo.jpg" alt="">'.
                       '</div>'.
                       '<div class="namePostCard">'.
                           '<p class="name">' .  $row["name"] .
                        '<div class="divTime">'.
                              '<i class="fa-solid fa-clock"></i>'.
                               '<p>'.  $row["Create_at"] .'</p>'.
                           '</div>'.
                       '</div> '. 
                   '</div>'.
                  '<div class="imgPost">
                <p class="contentBoxComment">'.$row["id"].'</p>'. 
                   '</div>'. '<br>' .
                   
                   '<div>'.
                   ' <form action="" method="post">'.
                       '<div class="flexPostForm">'.
                           '<div class="imgPostForm">'.
                               '<img src="img/jojo.jpg" alt="">'.
                           '</div>'.
                           '<input name = "Posts_id"   type="hidden"  value= '.$row['id'] .'>'.
                           '<input class="form-control" type="text" name="comment_txt" placeholder="Type your comment" aria-label=".form-control-lg example">
                           <input name = "comment" class="btn btn-primary"  type="submit"  value="comment">

                           </form>
                       </div>
                   </div>';
        $sql = "SELECT c.comment_txt , c.creat_at , c.user_id , c.post_id , u.userName , p.Posts_id
        FROM comments AS c JOIN users AS u JOIN posts AS p  WHERE post_id = $row[Posts_id]  AND u.Id = p.Posts_id AND c.user_id = p.Posts_id  ORDER BY comment_id   ASC  " ;
        $res1 = mysqli_query($con, $sql);
        $rownum = mysqli_num_rows($res1);

        echo '<div class="divNumComments">'.
        '<i class="fa-solid fa-comment pNumComments"></i>'.
        '<p class="pNumComments">'.$rownum.'</p>'.
    '</div>';
if ($res1->num_rows > 0) {
while($row1 = $res1->fetch_assoc()) {
echo ' <div class="comment">
<div class="flexPostForm">
<div class="imgPostForm">
<img src="img/jojo.jpg" alt="">
</div>
<div class="boxComment">
<p class="nameBoxComment">'. $row1['name'] .'</p>
<p class="contentBoxComment">'.$row1['comment_txt'].'</p>
<div class="divTime">
<i class="fa-solid fa-clock"></i>
<p>'.$row1['creat_at'] .'</p></div> </div> </div> </div>' ;


            }}
        }
       }

    
    ?> 
    
<!--end content-->


<!--Bootstrap 5 js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>