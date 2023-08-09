<?php
  include 'db/nav.php';
  
?>

<?php
include 'db/db.php';
?>



<html>
  <head>
   <style>

         .card {
            width: 400px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
        }



       .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align:center;
        }
        
        .card-username {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .card-timestamp {
            font-size: 12px;
            color: #999;
        



    </style>

  </head>
  
    <?php 

          
           $sql="SELECT * FROM `adds`";
           $result=mysqli_query($conn,$sql);
         
           while($row=mysqli_fetch_assoc($result)){
                 echo'
                   <div class="card">
                     <div class="card-title">'.$row['title'].'</div>
                     <div class="card-username">Posted by:<bold>'.$row['username'].'</bold></div>
                     <div class="card-timestamp">Posted on:' .$row['time'].'</div>
                     <p>'.$row['content']. '</p>
                   </div>';
           }
    
        
       
       
    ?>
    <h3 style="text-align:center;">_______No More Post_______</h3>
</html>