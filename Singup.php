<?php
include "db/db.php";
?>


<?php
  include'db/nav.php';
?>



   
  


<!doctype html>
<html lang="en">
     <head>
      <style>
         .register{
          text-align:center;
          margin:auto;
          width:25%;
          box-shadow:0 2px 4px 0 rgba(0,0,0,0.8);
          padding:10px
         }
      </style>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      
     </head>
     <body>


     <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
          
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
          if(empty($name) || empty($email) || empty($pass)){
                     echo '<script> alert("Some details maybe unfilled")</script>';
                     location.reload("Singup.php");
          }
        else{
          $sql="INSERT INTO `user` (`username`, `email`, `pass`) VALUES ('$name', '$email', '$pass')";
          mysqli_query($conn,$sql);
          echo "<h1> Register Sucessfull</h1>";
         
          header("location:login.php");
        }
       
      
      }
     ?> 
     
     <div class="register">
     <h1> Registration Page </h1>  
    
     <form action="Singup.php" method="POST">
 
  
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
     </body>
</html>