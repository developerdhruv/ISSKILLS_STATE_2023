<?php
if(isset($_POST['submit'])){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "skills_state";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    echo "Connection Failed";

};

$name = $_POST['name'];
$filename = $_FILES["file"]["name"];
$tmpName = $_FILES["file"]["tmp_name"];
$link = $_POST['link'];
$folder = "uploads/" .$filename;





$sql = "INSERT INTO `images` (`name`, `image`, `link`)VALUES ('$name', '$filename', '$link')";

if($filename == ""){
    echo"
    <script> alert(select images is mandatory)</script>
    
    ";
}else{
    $result = mysqli_query($conn, $sql);
    move_uploaded_file($tmpName, $folder);
    echo "
    <script> alert('Image uploaded successfully')</script>
    
    ";
    header("Location: Community.php");


}
}
?>