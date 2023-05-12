
<?php

session_start();
if(!isset($_SESSION['userid'])){
   header('location: index.php');
}

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

if(!$mode){
   header('location: index.php');
}

$toupdate;

if($mode === 'lifes'){
    $q = "SELECT * FROM lifes Where id = '$id' ";
    $res = $conn->query($q);
    $toupdate = $res->fetch_assoc();
}
else{
    $q = "SELECT * FROM phenomenas Where id = '$id' ";
    $res = $conn->query($q);
    $toupdate = $res->fetch_assoc();
}

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Photos</title>
      <link rel="stylesheet" href="nav.css?v=<?php echo time(); ?>" />
      <style>
        form{
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            box-shadow: 0 0 4px 0 black;
            padding: 20px;
            border-radius: 6px;
        }
        form h3{
            font-size: 28px;
        }
        form hr{
            margin: 10px 0;
        }
        form label{
            font-size: 22px;
            margin: 10px 0;
        }
        form input{
            width: 100%;
            height: auto;
            padding: 10px;
            margin: 10px 0;
            border: none;
            outline: none;
            box-shadow: 0 0 2px 0 black;
        }
        form textarea{
            width: 100%;
            height: auto;
            padding: 10px;
            margin: 10px 0;
            min-height: 220px;
            border: none;
            outline: none;
            box-shadow: 0 0 2px 0 black;
        }
        form button{
            border: none;
            outline: none;
            box-shadow: 0 0 2px 0 black;
            border-radius: 5px;
            padding: 12px 30px;
            background: green;
            color: aliceblue;
            position: relative;
            left: 86%;
            cursor: pointer;
        }
        form button:hover{
            background: yellowgreen;
        }
        label{
            display: block;
        }
        img{
            width: auto;
            height: auto;
            max-height: 400px;
        }
      </style>
   </head>
   <body>
      <nav>
         <ul class="brand">
            <h3>Saint Padre Pio</h3>
         </ul>
         <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>

      <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $toupdate['id'] ?>" hidden>
        <input type="text" name="mode" value="<?= $mode ?>" hidden>
        <h3>Edit</h3>
        <hr>
        <label for="img">Image</label>
        <img src="pics/<?= $toupdate['image'] ?>" alt="" id="img">
        <input class="file" type="file" name="file" id="img" onchange="c(event)">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $toupdate['title'] ?>">
        <label for="summary">Summary</label>
        <textarea name="summary" id="summary" cols="30" rows="10"><?= $toupdate['summary'] ?></textarea>
        <label for="contents">Contents</label>
        <textarea name="contents" id="contents" cols="30" rows="10"><?= $toupdate['contents'] ?></textarea>
        <button>Update</button>
      </form>

      <div class="footer">
        <h1>Padre Pio</h1>
        <br />
        © Copyright padrepio.com 2023. All Rights Reserved
      </div>

      <script>
        const c = (event) => {
            const img = document.getElementById('img')
            img.src = URL.createObjectURL(event.target.files[0])+'#toolbar=0'
        }
      </script>

   </body>
</html>
