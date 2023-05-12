<?php

$database = 'database';
$username = 'root';
$host = 'localhost';
$password = '';
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
   die("Connection Failed: ". $conn->connect_error());
}

$id = mysqli_real_escape_string($conn, $_GET['id']);
$mode = mysqli_real_escape_string($conn, $_GET['mode']);

$query = "DELETE FROM  `$mode` WHERE id = '$id'";
$result = $conn->query($query);

header('location: home.php');

?>