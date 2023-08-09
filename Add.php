<?php
  include 'db/nav.php';
?>

<?php
  include 'db/db.php';
?>





<!doctype html>
<html lang="en">
  <head>
    <style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        h1 {
            text-align: center;
            padding: 20px;
        }
        
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        #button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Bootstrap demo</title>
  </head>
  <div>
     <?php
    
       
       if(isset($_SESSION['username'])){
         if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_SESSION['username'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $sql="INSERT INTO `adds` (`username`, `title`, `content`) VALUES ('$username', '$title', '$content')";
        mysqli_query($conn,$sql);

        header("location:Home.php");


       }}
       else{
        echo "<h1> Please login to Post </h1>";
        exit();
       }
       ?>

     <h1>Create a New Post</h1>
     <form action="Add.php" method="Post" id="postForm">
       <label for="title">Title:</label><br>
       <input type="text" id="title" name="title"><br><br>
       <label for="content">Content:</label><br>
       <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
       
       <Input type="submit" value="Submit" id="button">
     </form>

 </div>
  
   
   
  
</html