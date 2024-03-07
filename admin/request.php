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
        <a href = "home.php">Community</a>
        <a href = "request.php">Check Donate Requests</a>
        
    
    
    
    
        <table>
            
            <tr>
                <th>ID</th>
                <th>Name of Orphanage</th>
                
                <th>FOOD AMOUNT RAISED</th>
                




            </tr>
        </table>
        

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

$sql =  "SELECT * FROM requests";

$result = $conn->query($sql);

if(!$result){
    die("query failed");
}

while($row = $result->fetch_assoc()){
    echo "

    <tr>

    <td>$row[id]</td>
    <td>$row[name]</td>
    
    <td>$row[foodvalue]</td>
    <td><a href='/DSUIS2023/delete.php?id=$row[id]'>Delete</a></td>
    </tr>
    
    ";
}


?>