<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    

    <style>

     ul{
        display:flex;
        flex-direction:row;
        height:6%;
        list-style:none;
        overflow:hidden;
        background-color:#333;
        margin:0px;
        padding:0px;
        align-items:center;
        
        
     }
     li a{
        text-decoration:none;
        color:white;
        padding: 14px 16px;
        text-align: center;
     }

     li a:hover {
     background-color: #111;
     }  
   

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Bootstrap demo</title>
  </head>
  <ul>
  <li><a href="Home.php">Home</a></li>
  
  <?php
  if(isset($_SESSION['username']) ){
  
         

          echo "<li><a href='logout.php'>Logout</a></li>";
          echo "<li><a  href='profile.php'>" . $_SESSION['username'] . "</a></li>";
           
         
        }
  else{
    echo "<li><a href='login.php'>Login</a></li>";
    echo "<li><a href='Singup.php'>Signup </a></li>";
    
  }
   echo "<li><a href='Add.php'>Add Post</a></li>";;
        ?>

</ul>
   
   
  
</html