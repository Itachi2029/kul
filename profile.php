

<?php
  include'db/nav.php';
 ?>
 <?php
 include'db/db.php';
 ?>

<!doctype html>
<html lang="en">
     <head>
      <style>


        .menu{
            text-align:center;
            margin:auto;
            width:25%;
            background-color:"silver";
            box-shadow:0 1px 4px 0 rgba(0,0,0,0.4);
            padding:14px 18px;
        }
     .title{
        font-size:18px;
        color:grey;
     }
     p>a{
        display:block;
        height:5vh;
        align-item:center;
        padding:0px;
        margin:0px;
        background:black;
        color:white;
        font-size:20px;
        width:100%;
        text-decoration:none;
     }
     
     p>a:hover {
     opacity: 0.4;
     }  
      </style>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      
     </head>
     <body>


       <div class="menu">
         <h1> User Profile</h1>
       <?php
          
          $name= $_SESSION['username'];
          $sql = "SELECT * FROM `user` WHERE `username` = '$name'";

          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_array($result);
          if(is_array($row)){
             echo "<p class='title'>Name-".$row[0]."</p>";
             echo "<p  class='title'> Email-".$row[1]."</p>";
             echo "<p  class='title'> Password-".$row[2]."</p>";
            
        }
          ?>
         <p><a href="logout.php">Logout</a><p>  
        </div>
       
     </body>
</html>