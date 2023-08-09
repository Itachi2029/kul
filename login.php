

<?php
  include'db/nav.php';
 ?>
 <?php
 echo "hello world";
 include'db/db.php';
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

     <div class="register">
     <h1> Login Page</h1>  
     <form action="login.php" method="POST">
  
     <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
          
            $name=$_POST['name'];
            $pass=$_POST['pass'];
          if(empty($name) ||  empty($pass)){
                     echo '<script> alert("Some details maybe unfilled")</script>';
                    
          }
        else{
          $sql="SELECT * FROM `user` WHERE (`username`='$name'AND `pass`='$pass')";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_array($result);
          if(is_array($row)){
          session_start();
          $_SESSION['username']=$row[0];
          $_SESSION["login"]=true;
          header('location:Home.php');
         
          }
        }
       
      
      }
     ?> 




  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
     </body>
</html>