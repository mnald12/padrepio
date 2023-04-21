<?php

$database = 'database';
$username = 'root';
$host = 'localhost';
$password = '';
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
   die("Connection Failed: ". $conn->connect_error());
}

$mode = mysqli_real_escape_string($conn, $_POST['mode']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$summary = mysqli_real_escape_string($conn, $_POST['summary']);
$contents = mysqli_real_escape_string($conn, $_POST['contents']);

$extension=array("jpeg","jpg","png","gif","jfif");
$file_name=$_FILES["file"]["name"];
$file_tmp=$_FILES["file"]["tmp_name"];
$ext=pathinfo($file_name,PATHINFO_EXTENSION);
if(in_array($ext,$extension)) {
    if(!file_exists("pics/".$file_name)) {
        move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"],"pics/".$file_name);
        $insert="INSERT Into `$mode` (title, summary, contents, image) VALUES ('$title', '$summary', '$contents', '$file_name')";
        $res=mysqli_query($conn, $insert);
    }
    else {
        $filename=basename($file_name,$ext);
        $newFileName=$filename.time().".".$ext;
        move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"],"pics/".$newFileName);
        $insert="INSERT Into `$mode` (title, summary, contents, image) VALUES ('$title', '$summary', '$contents', '$newFileName')";
        $res=mysqli_query($conn, $insert);
    }
}

header('location: index.php');

?>