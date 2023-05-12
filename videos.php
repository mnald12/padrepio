<?php
session_start();
if(!isset($_SESSION['userid'])){
   header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Videos</title>
      <link rel="stylesheet" href="nav.css" />
      <link rel="stylesheet" href="videos.css" />
   </head>
   <body>
      <nav>
         <ul class="brand">
            <h3>Saint Padre Pio</h3>
         </ul>
         <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="#" class="active">Videos</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>

      <div class="v-intros">
         <video controls autoplay>
            <source src="vids/intro.mp4" type="video/mp4">
         </video>
      </div>

      <div class="container" id="container"></div>

      <div class="footer">
         <h1>Padre Pio</h1>
         <br />
         © Copyright padrepio.com 2023. All Rights Reserved
      </div>

      <script type="text/javascript">

         const links = [
            'vids/v1.mp4',
            'vids/v2.mp4',
            'vids/v3.mp4'
         ]

         const container = document.getElementById('container')

         for(let i of links){
            const v = document.createElement('video')
            v.classList.add('v')
            v.setAttribute('control', 'control')
            v.controls = true
            const src = document.createElement('source')
            src.src = i
            v.appendChild(src)
            container.appendChild(v)
         }

      </script>

   </body>
</html>
