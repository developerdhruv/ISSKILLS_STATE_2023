<?php
if (isset($_GET["id"])) {
$id = $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "skills_state";
// Create connection
$connection = new mysqli($servername, $username, $password, $database);
$sql = "DELETE FROM requests WHERE id=$id";
$connection->query($sql);

}

header("Location: requests.php");
?>