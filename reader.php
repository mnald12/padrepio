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

if(!$id && !$mode){
   header('location: index.php');
}

$query = "SELECT * FROM `$mode` where id = '$id' ";
$result = $conn->query($query);
$contents = $result->fetch_assoc();



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saint Padre Pio</title>
    <link rel="stylesheet" href="nav.css" />
    <link rel="stylesheet" href="index.css" />
</head>
<body>
	  <nav>
         <ul class="brand">
            <h3>Saint Padre Pio</h3>
         </ul>
         <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="photos.html">Photos</a></li>
            <li><a href="videos.html">Videos</a></li>
         </ul>
      </nav>

      <div class="display" style="align-items: unset !important;">
         <div class="d-left">
            <h2>
               <?= $contents['title'] ?>
            </h2>
            <br>
            <p><?= nl2br($contents['contents']) ?></p>
            <br>

            <a href="#" onclick="history.back()">Back</a>

         </div>
         <div class="d-right r-right">
            <img style="min-width: 300px; min-height: 220px" src="pics/<?= $contents['image'] ?>" />
         </div>
      </div>

      <div class="footer" style="background: white;">
         <h1>Padre Pio</h1>
         <br />
         © Copyright padrepio.com 2023. All Rights Reserved
      </div>
</body>
</html>