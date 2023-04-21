<?php
   
    $database = 'database';
    $username = 'root';
    $host = 'localhost';
    $password = '';
    
    $conn = new mysqli($host, $username, $password, $database);
    
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error());
    }
    
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
        
    if($result->num_rows){
        header('location: home.php');
    }
    else{
        session_start();
        $_SESSION['error_message'] = 'username or password is incorrect!';
        header('location: index.php');
    }

?>