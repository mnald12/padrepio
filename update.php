<?php

$database = 'database';
$username = 'root';
$host = 'localhost';
$password = '';
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
   die("Connection Failed: ". $conn->connect_error());
}

$id = mysqli_real_escape_string($conn, $_POST['id']);
$mode = mysqli_real_escape_string($conn, $_POST['mode']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$summary = mysqli_real_escape_string($conn, $_POST['summary']);
$contents = mysqli_real_escape_string($conn, $_POST['contents']);

$query = "SELECT * FROM `$mode` where id = '$id' ";
$result = $conn->query($query);
$toupdate = $result->fetch_assoc();

if($_FILES['file']['name'] !== ""){
    $extension=array("jpeg","jpg","png","gif","jfif");
    $file_name=$_FILES["file"]["name"];
    $file_tmp=$_FILES["file"]["tmp_name"];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if(in_array($ext,$extension)) {
        if(!file_exists("pics/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"],"pics/".$file_name);
            $update="UPDATE `$mode` set image = '$file_name' where id = '$id' ";
            $res=mysqli_query($conn, $update);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"],"pics/".$newFileName);
            $update="UPDATE `$mode` set image = '$newFileName' where id = '$id' ";
            $res=mysqli_query($conn, $update);
        }
    }
}

if($title !== $toupdate['title']){
    $update = "UPDATE `$mode` SET title = '$title' where id = '$id' ";
    $result = $conn->query($update);
}

if($summary !== $toupdate['summary']){
    $update = "UPDATE `$mode` SET summary = '$summary' where id = '$id' ";
    $result = $conn->query($update);
}

if($contents !== $toupdate['contents']){
    $update = "UPDATE `$mode` SET contents = '$contents' where id = '$id' ";
    $result = $conn->query($update);
}

header('location: home.php');

?>