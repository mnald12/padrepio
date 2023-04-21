<?php

$database = 'database';
$username = 'root';
$host = 'localhost';
$password = '';
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
   die("Connection Failed: ". $conn->connect_error());
}

$lifes = [];
$lq = "SELECT * FROM lifes";
$lr = $conn->query($lq);
while($row = $lr->fetch_assoc()){
   $lifes[] = $row; 
}

$phenomenas = [];
$pq = "SELECT * FROM phenomenas";
$pr = $conn->query($pq);
while($row = $pr->fetch_assoc()){
   $phenomenas[] = $row; 
}


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home</title>
      <link rel="stylesheet" href="nav.css" />
      <link rel="stylesheet" href="index.css" />
   </head>
   <body>
      <nav>
         <ul class="brand">
            <h3>Saint Padre Pio</h3>
         </ul>
         <ul class="links">
            <li><a class="active" href="#">Home</a></li>
            <li><a href="photos.html">Photos</a></li>
            <li><a href="videos.html">Videos</a></li>
         </ul>
      </nav>

      <div class="display">
         <div class="d-left">
            <h2>
               The Journey of <strong>Charity</strong> and <strong>Devotion</strong>
            </h2>
            <br>
            <p>Padre Pio was born on May 25, 1887 in Pietrelcina, southern Italy. He was tutored privately until his entry to the novitiate of the Capuchin Friars at the age of 15. Of feeble health but strong will, with the help of grace, he completed the required studies and was ordained a priest in 1910.</p>
            <br>
            <a href="read.html">Read more</a>
         </div>
         <div class="d-right">
            <img src="pics/p3.png" />
         </div>
      </div>

      <div class="hr-styled">
         <h3>Life</h3>
         <div class="action">
            <form action="add.php" method="post">
               <input type="text" name="mode" value="lifes" hidden>
               <button>Add</button>
            </form>
         </div>
      </div>

      <div id="life">
         <?php foreach($lifes as $row): ?>
            <div class="display2">
               <div class="d-left">
                  <img src="./pics/<?= $row['image'] ?>">
               </div>
               <div class="d-right">
                  <h2><?= $row['title'] ?></h2>
                  <br>
                  <p><?= $row['summary'] ?></p>
                  <br>
                  <form action="reader.php" method="post">
                     <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
                     <input type="text" name="mode" value="lifes" hidden>
                     <button>Read more</button>
                  </form>
               </div>
            </div>
         <?php endforeach ?>
      </div>

      <div class="hr-styled">
         <h3>Supernatural phenomena</h3>
         <div class="action">
            <form action="add.php" method="post">
               <input type="text" name="mode" value="phenomenas" hidden>
               <button>Add</button>
            </form>
         </div>
      </div>

      <div id="phenomena">
         <?php foreach($phenomenas as $row): ?>
            <div class="display2">
               <div class="d-left">
                  <img src="./pics/<?= $row['image'] ?>">
               </div>
               <div class="d-right">
                  <h2><?= $row['title'] ?></h2>
                  <br>
                  <p><?= $row['summary'] ?></p>
                  <br>
                  <form action="reader.php" method="post">
                     <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
                     <input type="text" name="mode" value="phenomenas" hidden>
                     <button>Read more</button>
                  </form>
               </div>
            </div>
         <?php endforeach ?>
      </div>

      <div class="footer">
         <h1>Padre Pio</h1>
         <br />
         © Copyright padrepio.com 2023. All Rights Reserved
      </div>

   </body>
</html>
