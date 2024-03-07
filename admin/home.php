<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" ">
    </head>
    
    
    
    
    <body>
        
        <section>
            <h1>ADMIN PANEL ANNSKSHA</h1>
            <a href = "home.php">Community</a>
            <a href = "request.php">Check Donate Requests</a>
            <a href = "contactquery.php">Contact Queries</a>
            
            
        </section>


        

        
            
           
        

    </body>


</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skills_state";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("conn failed". mysqli_connect_error());
}


$sql =  "SELECT * FROM `images` WHERE 1";
$result = mysqli_query($conn, $sql);

while($fetch = mysqli_fetch_assoc($result)){
    echo "";

    ?>
    <div class="card">
    <img src = "../Uploads/<?php echo $fetch['image']?>" alt = "recipe image" width = 320px height = 300px  ">
    <div class="container">
        <h2><b><?php echo $fetch['name']?></b></h2>
        <a href="<?php echo $fetch['link']?>">Link to video</a>
        <a href=".\deletecom.php?id=<?php echo $fetch['id']?>">Delete</a>
    </div>
    </div>
   

    <?php
    "
    
        
        
    
    ";
    
    
    

}





?>


