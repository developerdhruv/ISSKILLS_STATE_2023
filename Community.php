<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style_3.css">
    </head>
    
    
    
    
    <body>
        <nav>
            <ul>
                <li><a href="HomePage.html"> 🥗 Annsksha</a></li>
                <li><a href="HomePage.html">Home</a></li>
                <li><a href="index.html">Create Request</a></li>
                <li><a href="requests.php"></a>Current Requests</li>
                <li><a href="Community.php">Community</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="imgcom.html">MAKE POST</a></li>
                
            </ul>

        </nav>
        <section>
            <h1>Community</h1>
            
            
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
    <img src = "./Uploads/<?php echo $fetch['image']?>" alt = "recipe image" width = 320px height = 300px  ">
    <div class="container">
        <h2><b><?php echo $fetch['name']?></b></h2>
        <a href="<?php echo $fetch['link']?>">Link to video</a>
    </div>
    </div>
   

    <?php
    "
    
        
        
    
    ";
    
    
    

}





?>


