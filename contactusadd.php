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
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";

if($conn->query($sql) === TRUE){
    echo"<script> alert('Message sent successfully')</script>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>