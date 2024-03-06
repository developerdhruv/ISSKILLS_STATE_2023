<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skills_state";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    echo "Connection Failed";

};

$name = $_POST['name'];
$dated = $_POST['dated'];
$foodvalue = $_POST['foodvalue'];

$sql = "INSERT INTO requests (name, dated, foodvalue) VALUES ('$name', '$dated', '$foodvalue')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
    header("Location: Pages\success.html");
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>