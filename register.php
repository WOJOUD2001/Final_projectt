<?php
  session_start();
   # sigIn
      $name = "";
      $email ="";
      $password = ""; 
      $confirm_password = ""; 
      $con = new mysqli("localhost" , "root" , "" , "users" );
      if (isset($_POST['submit'])    ) {
      $name = $_POST['name'];
      $email =$_POST['email'];
      $password = $_POST['password']; 
      $confirm_password = $_POST['confirm_password'];
      $ext = end($arr);
      $currentDer = getcwd()."\\images\\$name.$ext";
      $_SESSION['name'] =$name ;
      $_SESSION['email'] =$email ;
      $_SESSION['password'] =$password ;

      $sql = "SELECT Email FROM users WHERE Email='$email' AND Password ='$password'  ";
      $res = mysqli_query($con, $sql);
 
      if ($res->num_rows  == 1) {
       while($row = $res->fetch_assoc()) {
         echo '<script>
         window.alert("This email already exists, please choose another email");
         </script>' ;
       }
   } elseif($password != $confirm_password){
    echo '<script>
    window.alert("Please verify the password");
    </script>' ;
   }else{
$query="insert into users(name , Email , Password   )Values('$name','$email','$password')";
 mysqli_query($con,$query);
 header('location: index.php');
   }
     }
     # login
  if (isset($_POST['login']) ){
    $email =$_POST['email'];
    $password = $_POST['password']; 
    $sql = "SELECT Id , name , Email ,    FROM users WHERE Email='$email' AND Password ='$password' ";
     $res = mysqli_query($con, $sql);
    if ($res->num_rows > 0) {
     while($row = $res->fetch_assoc()) {
     $_SESSION['Id'] =$row["Id"] ;
     $_SESSION['name'] =$row["name"] ;
     $_SESSION['Email'] =$row["Email"] ;
    
       }
   } 

 $sql = "SELECT * FROM users WHERE Email='$email' AND Password ='$password' ";
$results = mysqli_query($con, $sql);
if (mysqli_num_rows($results) != 1) {
echo '<script>
  window.alert("Please verify your information");
 </script>' ;
}else {
	header('location: home.php');
  }
 } 
  
 # for posting

  if (isset($_POST['submitPost'])) {

      $user_id  = $_SESSION['Id'];
      $post = $_POST['post'] ;
      $img_name = $_FILES['file']['name'];
      $tmp_name = $_FILES['file']['tmp_name'];
      $ext = end($arr);
      $currentDer = getcwd()."\\images\\$img_name.$ext";
 $Create_at = date("y:m:d h:i");
if ( !empty($_POST['post'])  )  {
$query="insert into posts(txt , picture , Create_at , User_id )Values('$post' , ' $img_name' , '$Create_at' , '$user_id') "; 
 mysqli_query($con,$query);
if(move_uploaded_file($tmp_name, $currentDer )){
$msg = "image uploaded successfuly";
}
 }   
}
# for comment
if (isset($_POST['comment'])) {
$user_id  = $_SESSION['Id'];
$txt = $_POST['comment_txt'];
$Posts_id = $_POST['Posts_id'];
$Create_at = date("y:m:d h:i");  
 $query="insert into comments(Creat_at , comment_txt  , User_id ,post_id  )Values('$Create_at' , ' $txt'  , '$user_id' , '$Posts_id' ) "; 
 mysqli_query($con,$query);   
   }
?>