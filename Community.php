<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        
        table{
            width: 65%;
            border-collapse: collapse;
            margin-left:30px;
            border-radius:30px;
            height: 50px;

        }
        table, th, td{
            border: ;
            border-radius:30px;
        }



        th, td{
            padding: 8px;
            text-align: left;
            border-radius:30px;
        }
        th{
            background-color: #D9F0E6;
            color: grey;
            border-radius:30px;
            margin: 5px;

        }
        tr:nth-child(even){
            background-color:#B3DCE4;
            border-radius:30px;
        }
        .card{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            height: 490px;
            border-radius: 20px;
            margin-left:5px;
            
            background-color: #d6e7d5;
            width:320px;
            

        }
        section{
            gap : 5px;
            display: flex;
        }
        

        .card img{
            border-radius:20px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container {
            padding: 2px 16px;
        }

        @media screen and (max-width: 480px){
            body{
                display:grid;
            }
            nav{
                display: flex;
                flex-direction: row;
                width: 450px;
                border-radius: 25px;
                height: 280px;
            } 
            
            table{
                width: 450px;
                border-radius: 25px;
                height: 280px;
            }
        }





    </style>
    
    
    
    <body>
        <nav>
            <ul>
                <li><a href="HomePage.html"> 🥗 Annsksha 🥗</a></li>
                <li><a href="HomePage.html">Home</a></li>
                <li><a href="index.html">Create Request</a></li>
                <li><a href="requests.php">Current Requests</a></li>
                <li><a href="contact.html">Ahara</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </nav>
        <section>
            
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
        </section>


        

        
            
           
        

    </body>


</html>


