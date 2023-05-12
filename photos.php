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
      <title>Photos</title>
      <link rel="stylesheet" href="nav.css" />
      <link rel="stylesheet" href="photos.css" />
   </head>
   <body>
      <nav>
         <ul class="brand">
            <h3>Saint Padre Pio</h3>
         </ul>
         <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="#">Photos</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>

      <div class="container" id="container"></div>

      <div class="footer">
         <h1>Padre Pio</h1>
         <br />
         © Copyright padrepio.com 2023. All Rights Reserved
      </div>

      <script type="text/javascript">

         const container = document.getElementById('container')

         for(let i = 1; i <= 18; i++){
            const d = document.createElement('div')
            d.classList.add('d-img')
            const img = document.createElement('img')
            img.src = `pics/p${i}.jpg`
            let isOpen = false
            img.addEventListener('click', () => {
               if(isOpen){
                  img.classList.remove('zoomed')
                  isOpen = false
               }
               else{
                  img.classList.add('zoomed')
                  isOpen = true
               }
            })
            img.alt = `pics/p${i}.jpg`
            d.appendChild(img)
            container.appendChild(d)
         }

      </script>

   </body>
</html>
